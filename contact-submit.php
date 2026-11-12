<?php

/**
 * contact-submit.php
 * -----------------------------------------------------------------------------
 * Receives the Contact Us form (contact.php) via fetch() POST, validates it,
 * and hands it to email/email.php which sends:
 *   - the enquiry to the college inbox (CONTACT_TO in env.php)
 *   - a confirmation email to the visitor
 *
 * Always answers with JSON:
 *   success → 200 {"ok":true,  "message":"..."}
 *   invalid → 422 {"ok":false, "message":"...", "errors":{"email":"..."}}
 *   other   → 4xx/5xx {"ok":false, "message":"..."}
 *
 * IMPORTANT: call it as /contact-submit (no .php). Your .htaccess 301-redirects
 * direct *.php requests, and a redirect turns a POST into a GET.
 */

// Never let PHP notices/warnings leak into the JSON response.
ini_set('display_errors', '0');

header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store');
header('X-Content-Type-Options: nosniff');

require_once __DIR__ . '/config.php';        // BASE_URL, ROOT_PATH, env.php constants
require_once __DIR__ . '/email/email.php';   // email templates + sending

/* -----------------------------------------------------------------------------
 * Small helpers
 * -------------------------------------------------------------------------- */

/** Send a JSON response and stop. */
function sit_respond(int $status, array $body): void
{
    http_response_code($status);
    echo json_encode($body, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    exit;
}

/** Read a POST field as a string (arrays / missing → ''). */
function sit_post(string $key): string
{
    $v = $_POST[$key] ?? '';
    return is_string($v) ? $v : '';
}

/** Length that counts characters, not bytes. */
function sit_len(string $s): int
{
    return function_exists('mb_strlen') ? mb_strlen($s, 'UTF-8') : strlen($s);
}

/** Visitor IP (Cloudflare / proxy aware – only used for the rate limit). */
function sit_client_ip(): string
{
    foreach (['HTTP_CF_CONNECTING_IP', 'HTTP_X_FORWARDED_FOR', 'REMOTE_ADDR'] as $key) {
        if (!empty($_SERVER[$key])) {
            $ip = trim(explode(',', (string) $_SERVER[$key])[0]);
            if (filter_var($ip, FILTER_VALIDATE_IP)) {
                return $ip;
            }
        }
    }
    return '0.0.0.0';
}

/** Rate-limit storage file for an IP (in the system temp dir). */
function sit_rate_file(string $ip): string
{
    return rtrim(sys_get_temp_dir(), '/\\') . '/sit_contact_rl_' . sha1($ip) . '.json';
}

/** Submissions by this IP inside the window (default: 5 per 15 minutes). */
function sit_rate_recent(string $ip, int $window = 900): array
{
    $file = sit_rate_file($ip);
    $data = is_file($file) ? json_decode((string) @file_get_contents($file), true) : [];
    $now  = time();
    return array_values(array_filter(is_array($data) ? $data : [], function ($t) use ($now, $window) {
        return is_int($t) && ($now - $t) < $window;
    }));
}

function sit_rate_record(string $ip, int $window = 900): void
{
    $recent   = sit_rate_recent($ip, $window);
    $recent[] = time();
    @file_put_contents(sit_rate_file($ip), json_encode($recent), LOCK_EX);
}

/** "0412 345 678" / "+61 412…" / "412345678" → "+61412345678" (or '' if invalid → null). */
function sit_normalise_phone(string $raw): ?string
{
    $raw    = trim($raw);
    $digits = preg_replace('/\D/', '', $raw);

    if ($raw === '') {
        return '';                                 // optional field left blank
    }
    if ($digits === '') {
        return null;                               // typed something, but no digits
    }
    if (strpos($raw, '+') === 0) {                 // typed with an international prefix
        $out = '+' . $digits;
    } elseif (strpos($digits, '0') === 0) {        // local format 04xx / 03xx
        $out = '+61' . substr($digits, 1);
    } elseif (strpos($digits, '61') === 0 && strlen($digits) >= 11) {
        $out = '+' . $digits;
    } else {                                       // number typed after the visual "+61" prefix
        $out = '+61' . $digits;
    }

    $count = strlen(preg_replace('/\D/', '', $out));
    return ($count >= 9 && $count <= 15) ? $out : null;
}

/* -----------------------------------------------------------------------------
 * 1. Request checks
 * -------------------------------------------------------------------------- */

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    header('Allow: POST');
    sit_respond(405, ['ok' => false, 'message' => 'Method not allowed.']);
}

// Same-origin check (browsers send Origin on POST; if it's there it must match).
if (!empty($_SERVER['HTTP_ORIGIN'])) {
    $originHost = parse_url((string) $_SERVER['HTTP_ORIGIN'], PHP_URL_HOST);
    $thisHost   = preg_replace('/:\d+$/', '', (string) ($_SERVER['HTTP_HOST'] ?? ''));
    if (!$originHost || strcasecmp($originHost, $thisHost) !== 0) {
        sit_respond(403, ['ok' => false, 'message' => 'Request not allowed.']);
    }
}

if ((int) ($_SERVER['CONTENT_LENGTH'] ?? 0) > 20000) {
    sit_respond(413, ['ok' => false, 'message' => 'Your message is too large.']);
}

/* -----------------------------------------------------------------------------
 * 2. Spam checks (invisible to real visitors)
 * -------------------------------------------------------------------------- */

// Honeypot: real people never see/fill this field. Pretend success so bots move on.
if (trim(sit_post('company_website')) !== '') {
    error_log('[sit-contact] honeypot triggered from ' . sit_client_ip());
    sit_respond(200, ['ok' => true, 'message' => 'Thanks! Your enquiry has been received.']);
}

// Minimum fill time: the page JS reports how long the form was open (ms).
$fillMs = sit_post('fill_ms');
if (!ctype_digit($fillMs) || (int) $fillMs < 3000) {
    sit_respond(429, [
        'ok'      => false,
        'message' => 'Please take a moment to complete the form, then submit again.',
    ]);
}

/* -----------------------------------------------------------------------------
 * 3. Validation
 * -------------------------------------------------------------------------- */

$errors = [];

// Full name
$fullName = sit_clean_line(sit_post('fullName'), 100);
if ($fullName === '' || sit_len($fullName) < 2) {
    $errors['fullName'] = 'Please enter your full name.';
}

// Email
$email = trim(sit_post('email'));
if ($email === '' || strlen($email) > 254 || preg_match('/[\r\n]/', $email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Please enter a valid email address.';
}

// Phone (optional)
$phone = sit_normalise_phone(sit_post('phone'));
if ($phone === null) {
    $errors['phone'] = 'Please enter a valid phone number, or leave it blank.';
    $phone = '';
}

// Student ID (optional)
$studentId = sit_clean_line(sit_post('studentid'), 30);
if ($studentId !== '' && !preg_match('/^[A-Za-z0-9][A-Za-z0-9\-\/ ]{0,29}$/', $studentId)) {
    $errors['studentid'] = 'Student ID can only contain letters, numbers, spaces, / and -.';
}

// "I am a"
$enquiryType = sit_post('enquiryType');
if (!in_array($enquiryType, ['student', 'agent', 'other'], true)) {
    $errors['enquiryType'] = 'Please select who you are.';
}

// Message (keep line breaks, drop other control characters)
$message = str_replace(["\r\n", "\r"], "\n", trim(sit_post('message')));
$message = preg_replace('/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]/u', '', $message);
if ($message === null || sit_len($message) < 10) {
    $errors['message'] = 'Please tell us a little more (at least 10 characters).';
    $message = (string) $message;
} elseif (sit_len($message) > 5000) {
    $errors['message'] = 'Please keep your message under 5,000 characters.';
} elseif (substr_count(strtolower($message), 'http') > 2) {
    $errors['message'] = 'Please remove extra links from your message.';
}

// Privacy consent
if (sit_post('privacy') === '') {
    $errors['privacy'] = 'Please agree to the Privacy Policy to continue.';
}

if ($errors) {
    sit_respond(422, [
        'ok'      => false,
        'message' => 'Please check the highlighted fields and try again.',
        'errors'  => $errors,
    ]);
}

/* -----------------------------------------------------------------------------
 * 4. Rate limit (only counts valid submissions, so typo-fixing is never blocked)
 * -------------------------------------------------------------------------- */

$ip = sit_client_ip();
if (count(sit_rate_recent($ip)) >= 5) {
    sit_respond(429, [
        'ok'      => false,
        'message' => 'You\'ve sent a few messages already. Please wait a few minutes or call us on 03 8383 4447.',
    ]);
}
sit_rate_record($ip);

/* -----------------------------------------------------------------------------
 * 5. Send the emails
 * -------------------------------------------------------------------------- */

$result = sit_send_contact_emails([
    'fullName'    => $fullName,
    'email'       => $email,
    'phone'       => $phone,
    'studentId'   => $studentId,
    'enquiryType' => $enquiryType,
    'message'     => $message,
]);

// The enquiry itself didn't reach the college – tell the visitor honestly.
if (!$result['staff']['ok']) {
    error_log('[sit-contact] STAFF EMAIL FAILED: ' . ($result['staff']['error'] ?? 'unknown'));
    sit_respond(500, [
        'ok'      => false,
        'message' => 'Sorry, we couldn\'t send your message just now. Please call us on 03 8383 4447 or email '
            . (string) sit_mail_setting('SIT_PUBLIC_EMAIL', 'info@sit.vic.edu.au') . '.',
    ]);
}

// Enquiry delivered. If only the confirmation failed, log it but still succeed.
if (!$result['visitor']['ok']) {
    error_log('[sit-contact] confirmation email failed for ' . $email . ': ' . ($result['visitor']['error'] ?? 'unknown'));
    sit_respond(200, [
        'ok'      => true,
        'message' => 'Thanks, ' . sit_first_name($fullName) . '! Your enquiry has been received. We\'ll be in touch within 1–2 business days.',
    ]);
}

sit_respond(200, [
    'ok'      => true,
    'message' => 'Thanks, ' . sit_first_name($fullName) . '! Your enquiry has been received and a confirmation email is on its way to ' . $email . '.',
]);
