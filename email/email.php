<?php

/**
 * email/email.php
 * -----------------------------------------------------------------------------
 * Everything email-related for the SIT website lives in this one file:
 *
 *   1. Settings   – read from constants defined in env.php (via config.php)
 *   2. Helpers    – escaping, cleaning, labels, dates
 *   3. Templates  – HTML + plain-text for the staff notification and the
 *                   visitor confirmation
 *   4. Sending    – thin wrapper around Resend (with a dry-run mode)
 *   5. Public API – sit_send_contact_emails()
 *
 * This folder is blocked from direct browser access by .htaccess
 * (RewriteRule ^(includes|data|email)(/|$) - [F,L]), so it is safe to keep
 * server-side code here. It is loaded by /contact-submit.php.
 *
 * Settings (all optional except the first two) – put them in env.php:
 *
 *   RESEND_API_KEY      Resend API key (re_...)
 *   CONTACT_TO          Inbox that receives enquiries. Comma-separate for more.
 *   MAIL_FROM           "Name <address@verified-domain>" – domain must be verified in Resend
 *   MAIL_REPLY_TO       Reply-To on the visitor's confirmation email (default: CONTACT_TO)
 *   MAIL_SUBJECT_PREFIX Prepended to staff subjects, e.g. "[TEST] " while testing
 *   SIT_PUBLIC_EMAIL    Address printed in the email footer (default: info@sit.vic.edu.au)
 *   MAIL_DRY_RUN        true = don't call Resend, just log (for local testing)
 */

if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', dirname(__DIR__));
}

/* =============================================================================
 * 1. SETTINGS
 * ========================================================================== */

/** Read a setting defined as a constant in env.php, with a fallback. */
function sit_mail_setting(string $name, $default = null)
{
    return defined($name) ? constant($name) : $default;
}

/** Comma-separated CONTACT_TO → clean array of addresses. */
function sit_mail_recipients(): array
{
    $raw = (string) sit_mail_setting('CONTACT_TO', '');
    $list = array_map('trim', explode(',', $raw));
    return array_values(array_filter($list, function ($addr) {
        return $addr !== '' && filter_var($addr, FILTER_VALIDATE_EMAIL);
    }));
}

/* =============================================================================
 * 2. HELPERS
 * ========================================================================== */

/** HTML-escape. Use for EVERYTHING that came from the visitor. */
function sit_e($value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/** Single-line clean: removes line breaks / control characters (subjects, names). */
function sit_clean_line($value, int $max = 200): string
{
    $value = preg_replace('/[\x00-\x1F\x7F]+/u', ' ', (string) $value);
    $value = trim(preg_replace('/\s{2,}/', ' ', (string) $value));
    return function_exists('mb_substr') ? mb_substr($value, 0, $max) : substr($value, 0, $max);
}

/** Human label for the "I am a" dropdown. */
function sit_enquiry_label(string $type): string
{
    $labels = [
        'student' => 'Student / Prospective Student',
        'agent'   => 'Education Agent',
        'other'   => 'Other',
    ];
    return $labels[$type] ?? 'Other';
}

/** First word of the full name, for "Hi Sam,". */
function sit_first_name(string $fullName): string
{
    $parts = preg_split('/\s+/', trim($fullName));
    return $parts[0] !== '' ? $parts[0] : 'there';
}

/** Current time in Melbourne, e.g. "Thu 12 Nov 2026, 11:16 am AEDT". */
function sit_now_melbourne(): string
{
    $dt = new DateTime('now', new DateTimeZone('Australia/Melbourne'));
    return $dt->format('D j M Y, g:i a T');
}

/** Absolute logo URL (email clients need a full URL). */
function sit_logo_url(): string
{
    $base = defined('BASE_URL') ? rtrim((string) BASE_URL, '/') : '';
    return $base . '/img/logo.png';
}

/* =============================================================================
 * 3. TEMPLATES
 * ========================================================================== */

/**
 * Shared HTML shell (table-based + inline styles so it renders in Outlook/Gmail).
 * Brand colours match public/css/stylesheet.css.
 */
function sit_email_layout(string $title, string $preheader, string $bodyHtml): string
{
    $logo        = sit_e(sit_logo_url());
    $publicEmail = sit_e(sit_mail_setting('SIT_PUBLIC_EMAIL', 'info@sit.vic.edu.au'));

    return '<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>' . sit_e($title) . '</title>
</head>
<body style="margin:0;padding:0;background:#f7f9fb;">
<div style="display:none;max-height:0;overflow:hidden;opacity:0;color:#f7f9fb;">' . sit_e($preheader) . '</div>
<table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:#f7f9fb;padding:24px 12px;">
  <tr><td align="center">
    <table role="presentation" width="600" cellpadding="0" cellspacing="0" style="width:100%;max-width:600px;background:#ffffff;border-radius:12px;overflow:hidden;border:1px solid #e5e8ef;">
      <tr><td style="padding:22px 28px;background:#ffffff;border-bottom:4px solid #1a11a6;">
        <img src="' . $logo . '" alt="State Institute of Training" width="130" style="display:block;border:0;height:auto;max-width:130px;">
      </td></tr>
      <tr><td style="padding:28px;font-family:Arial,Helvetica,sans-serif;font-size:15px;line-height:1.6;color:#1b1f3b;">
        ' . $bodyHtml . '
      </td></tr>
      <tr><td style="padding:20px 28px;background:#1a11a6;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:1.6;color:#d9d7f5;">
        <strong style="color:#ffffff;">State Institute of Training</strong><br>
        RTO No. 45205 &middot; CRICOS 03948A<br>
        Melbourne &middot; Pakenham &middot; Brisbane<br>
        <a href="tel:+61383834447" style="color:#baed5e;text-decoration:none;">03 8383 4447</a>
        &nbsp;|&nbsp;
        <a href="mailto:' . $publicEmail . '" style="color:#baed5e;text-decoration:none;">' . $publicEmail . '</a><br>
        Mon&ndash;Fri, 9:00 am&ndash;5:00 pm (AEST)
      </td></tr>
    </table>
  </td></tr>
</table>
</body>
</html>';
}

/** One label/value row for the details table. $valueHtml must already be safe. */
function sit_email_row(string $label, string $valueHtml): string
{
    return '<tr>
      <td style="padding:8px 12px;width:34%;vertical-align:top;font-size:13px;color:#6b7280;border-bottom:1px solid #eef0f5;">' . sit_e($label) . '</td>
      <td style="padding:8px 12px;vertical-align:top;font-size:14px;color:#1b1f3b;border-bottom:1px solid #eef0f5;">' . $valueHtml . '</td>
    </tr>';
}

/** Visitor's message, safely escaped, line breaks kept, in a quote box. */
function sit_email_message_box(string $message): string
{
    return '<div style="margin:8px 0 0;padding:14px 16px;background:#f8fafc;border-left:4px solid #baed5e;border-radius:6px;font-size:14px;color:#1e293b;">'
        . nl2br(sit_e($message), false) . '</div>';
}

/**
 * Staff notification  →  [subject, html, text]
 * $d keys: fullName, email, phone, studentId, enquiryType, message
 */
function sit_render_staff_email(array $d): array
{
    $label   = sit_enquiry_label($d['enquiryType']);
    $when    = sit_now_melbourne();
    $subject = sit_clean_line(
        (string) sit_mail_setting('MAIL_SUBJECT_PREFIX', '')
        . 'New website enquiry: ' . $d['fullName'] . ' (' . $label . ')',
        180
    );

    $phone     = $d['phone'] !== '' ? sit_e($d['phone']) : '<span style="color:#9aa1ae;">Not provided</span>';
    $studentId = $d['studentId'] !== '' ? sit_e($d['studentId']) : '<span style="color:#9aa1ae;">Not provided</span>';
    $mailto    = 'mailto:' . rawurlencode($d['email']) . '?subject=' . rawurlencode('Re: your enquiry to State Institute of Training');

    $body  = '<h1 style="margin:0 0 4px;font-size:21px;color:#1a11a6;">New website enquiry</h1>';
    $body .= '<p style="margin:0 0 20px;font-size:13px;color:#6b7280;">Submitted ' . sit_e($when) . ' via the Contact Us form</p>';
    $body .= '<table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="border:1px solid #eef0f5;border-radius:8px;border-collapse:separate;">';
    $body .= sit_email_row('Name', sit_e($d['fullName']));
    $body .= sit_email_row('Email', '<a href="' . sit_e($mailto) . '" style="color:#1a11a6;">' . sit_e($d['email']) . '</a>');
    $body .= sit_email_row('Phone', $phone);
    $body .= sit_email_row('Student ID', $studentId);
    $body .= sit_email_row('Enquiry from', sit_e($label));
    $body .= '</table>';
    $body .= '<p style="margin:22px 0 0;font-size:13px;color:#6b7280;">Message</p>';
    $body .= sit_email_message_box($d['message']);
    $body .= '<p style="margin:24px 0 0;"><a href="' . sit_e($mailto) . '" style="display:inline-block;padding:11px 22px;background:#1a11a6;color:#ffffff;text-decoration:none;border-radius:8px;font-weight:bold;font-size:14px;">Reply to ' . sit_e(sit_first_name($d['fullName'])) . '</a></p>';
    $body .= '<p style="margin:16px 0 0;font-size:12px;color:#9aa1ae;">You can also just hit Reply &ndash; your response goes straight to the sender.</p>';

    $html = sit_email_layout($subject, 'New enquiry from ' . $d['fullName'] . ' (' . $label . ')', $body);

    $text = "NEW WEBSITE ENQUIRY\n"
        . "Submitted: {$when}\n\n"
        . "Name:         {$d['fullName']}\n"
        . "Email:        {$d['email']}\n"
        . 'Phone:        ' . ($d['phone'] !== '' ? $d['phone'] : 'Not provided') . "\n"
        . 'Student ID:   ' . ($d['studentId'] !== '' ? $d['studentId'] : 'Not provided') . "\n"
        . "Enquiry from: {$label}\n\n"
        . "Message:\n{$d['message']}\n\n"
        . "Reply to this email to respond to the sender.\n";

    return [$subject, $html, $text];
}

/**
 * Visitor confirmation  →  [subject, html, text]
 */
function sit_render_confirmation_email(array $d): array
{
    $first       = sit_first_name($d['fullName']);
    $subject     = 'We\'ve received your enquiry – State Institute of Training';
    $publicEmail = (string) sit_mail_setting('SIT_PUBLIC_EMAIL', 'info@sit.vic.edu.au');

    $body  = '<h1 style="margin:0 0 12px;font-size:21px;color:#1a11a6;">Thanks, ' . sit_e($first) . ' &ndash; we\'ve got your message</h1>';
    $body .= '<p style="margin:0 0 14px;">Your enquiry has been received by the State Institute of Training team. '
        . 'We aim to reply within <strong>1&ndash;2 business days</strong>.</p>';
    $body .= '<p style="margin:0 0 14px;">If your matter is urgent, please call us on '
        . '<a href="tel:+61383834447" style="color:#1a11a6;font-weight:bold;">03 8383 4447</a> '
        . '(Mon&ndash;Fri, 9:00 am&ndash;5:00 pm AEST).</p>';
    $body .= '<p style="margin:22px 0 0;font-size:13px;color:#6b7280;">A copy of what you sent us</p>';
    $body .= sit_email_message_box($d['message']);
    $body .= '<p style="margin:22px 0 0;font-size:12px;color:#9aa1ae;">This is an automated confirmation. '
        . 'If you didn\'t submit this enquiry, you can safely ignore this email.</p>';

    $html = sit_email_layout($subject, 'We\'ve received your enquiry and will reply within 1–2 business days.', $body);

    $text = "Hi {$first},\n\n"
        . "Thanks for contacting State Institute of Training. We've received your enquiry and aim to reply within 1-2 business days.\n\n"
        . "If your matter is urgent, call 03 8383 4447 (Mon-Fri, 9:00 am-5:00 pm AEST) or email {$publicEmail}.\n\n"
        . "A copy of what you sent us:\n{$d['message']}\n\n"
        . "This is an automated confirmation. If you didn't submit this enquiry, you can ignore this email.\n\n"
        . "State Institute of Training | RTO No. 45205 | CRICOS 03948A\n";

    return [$subject, $html, $text];
}

/* =============================================================================
 * 4. SENDING (Resend)
 * ========================================================================== */

/**
 * Send one email through Resend.
 * $payload keys: from, to (array), subject, html, text, reply_to (optional)
 * Returns ['ok' => bool, 'id' => ?string, 'error' => ?string]. Never throws.
 */
function sit_mail_send(array $payload): array
{
    // Dry run: no network call, just log. Handy for local testing.
    if (filter_var(sit_mail_setting('MAIL_DRY_RUN', false), FILTER_VALIDATE_BOOLEAN)) {
        error_log('[sit-mail][dry-run] to=' . implode(',', (array) $payload['to']) . ' | subject=' . $payload['subject']);
        return ['ok' => true, 'id' => 'dry-run', 'error' => null];
    }

    $apiKey = (string) sit_mail_setting('RESEND_API_KEY', '');
    if ($apiKey === '') {
        return ['ok' => false, 'id' => null, 'error' => 'RESEND_API_KEY is not set (check env.php)'];
    }

    $autoload = ROOT_PATH . '/vendor/autoload.php';
    if (!is_file($autoload)) {
        return ['ok' => false, 'id' => null, 'error' => 'vendor/autoload.php missing – run "composer install"'];
    }
    require_once $autoload;

    try {
        $resend = Resend::client($apiKey);
        $result = $resend->emails->send($payload);

        $id = null;
        if (is_object($result) && isset($result->id)) {
            $id = (string) $result->id;
        } elseif (is_array($result) && isset($result['id'])) {
            $id = (string) $result['id'];
        }
        return ['ok' => true, 'id' => $id, 'error' => null];
    } catch (Throwable $e) {
        error_log('[sit-mail] Resend error: ' . $e->getMessage());
        return ['ok' => false, 'id' => null, 'error' => $e->getMessage()];
    }
}

/* =============================================================================
 * 5. PUBLIC API
 * ========================================================================== */

/**
 * Send both emails for a contact-form submission.
 *
 *   1. Staff notification  → CONTACT_TO   (Reply-To = the visitor)
 *   2. Confirmation        → the visitor  (Reply-To = MAIL_REPLY_TO / CONTACT_TO)
 *
 * $d must already be validated: fullName, email, phone, studentId,
 * enquiryType, message.
 *
 * Returns ['staff' => result, 'visitor' => result] where each result is the
 * array from sit_mail_send(). The caller decides what to tell the visitor –
 * a failed staff email is serious; a failed confirmation is not.
 */
function sit_send_contact_emails(array $d): array
{
    $from       = (string) sit_mail_setting('MAIL_FROM', 'State Institute of Training <noreply@slashkode.com.au>');
    $recipients = sit_mail_recipients();

    if (!$recipients) {
        $err = ['ok' => false, 'id' => null, 'error' => 'CONTACT_TO is not set or invalid (check env.php)'];
        return ['staff' => $err, 'visitor' => ['ok' => false, 'id' => null, 'error' => 'skipped']];
    }

    // 1) Staff notification first – this is the one that must not be lost.
    [$subject, $html, $text] = sit_render_staff_email($d);
    $staff = sit_mail_send([
        'from'     => $from,
        'to'       => $recipients,
        'subject'  => $subject,
        'html'     => $html,
        'text'     => $text,
        'reply_to' => $d['email'],
    ]);

    // If staff didn't get it, don't confirm receipt to the visitor.
    if (!$staff['ok']) {
        return ['staff' => $staff, 'visitor' => ['ok' => false, 'id' => null, 'error' => 'skipped']];
    }

    // 2) Confirmation to the visitor.
    $replyTo = (string) sit_mail_setting('MAIL_REPLY_TO', '');
    if ($replyTo === '' || !filter_var($replyTo, FILTER_VALIDATE_EMAIL)) {
        $replyTo = $recipients[0];
    }

    [$subject, $html, $text] = sit_render_confirmation_email($d);
    $visitor = sit_mail_send([
        'from'     => $from,
        'to'       => [$d['email']],
        'subject'  => $subject,
        'html'     => $html,
        'text'     => $text,
        'reply_to' => $replyTo,
    ]);

    return ['staff' => $staff, 'visitor' => $visitor];
}
