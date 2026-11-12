<?php
// ============================================
// LOAD CONFIG + COURSE DATA
// ============================================
require_once __DIR__ . '/config.php';

$courses = require __DIR__ . '/data/dbcourses.php';

$slug     = $_GET['slug'] ?? '';
$category = $_GET['category'] ?? '';

// Find the course by slug
$course = null;
foreach ($courses as $c) {
    if (($c['slug'] ?? '') === $slug) {
        $course = $c;
        break;
    }
}

// Extra safety: check category matches
if ($course && $category) {
    $expectedCategory = strtolower(str_replace([' & ', ' '], ['-and-', '-'], $course['category']));
    if ($category !== $expectedCategory) {
        $course = null;
    }
}

// 404 if not found
if (!$course) {
    header('HTTP/1.0 404 Not Found');
    include __DIR__ . '/404.php';
    exit;
}

// Helper values
$fullTitle    = $course['code'] . ' ' . $course['title'];
$pageTitle    = $fullTitle . ' | State Institute of Training';
$locationsText = implode(' & ', $course['locations'] ?? []);
$metaDesc     = $course['short_desc']
    . ' Study at State Institute of Training — Melbourne & Brisbane. CRICOS '
    . $course['cricos'] . '. RTO 45205.';

// Clean canonical (no query string, no www, matches .htaccess)
$categoryUrlSlug = strtolower(str_replace([' & ', ' '], ['-and-', '-'], $course['category']));
$canonicalUrl    = rtrim(BASE_URL, '/') . '/' . $categoryUrlSlug . '/' . $course['slug'];

// Absolute image for OG / Twitter / Schema
$ogImage = rtrim(BASE_URL, '/') . '/public/imgs/courses/' . ($course['thumbnail'] ?? '');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Primary SEO -->
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta name="description" content="<?= htmlspecialchars($metaDesc) ?>" />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl) ?>" />

    <!-- Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="State Institute of Training" />
    <meta property="og:url" content="<?= htmlspecialchars($canonicalUrl) ?>" />
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>" />
    <meta property="og:description" content="<?= htmlspecialchars($metaDesc) ?>" />
    <meta property="og:image" content="<?= htmlspecialchars($ogImage) ?>" />
    <meta property="og:locale" content="en_AU" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle) ?>" />
    <meta name="twitter:description" content="<?= htmlspecialchars($metaDesc) ?>" />
    <meta name="twitter:image" content="<?= htmlspecialchars($ogImage) ?>" />

    <!-- Schema.org JSON-LD (Course) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Course",
        "name": <?= json_encode($fullTitle) ?>,
        "description": <?= json_encode($course['short_desc'] ?? '') ?>,
        "provider": {
            "@type": "Organization",
            "name": "State Institute of Training",
            "url": "https://sit.vic.edu.au",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Level 5, 255 William Street",
                "addressLocality": "Melbourne",
                "addressRegion": "VIC",
                "postalCode": "3000",
                "addressCountry": "AU"
            }
        },
        "hasCourseInstance": {
            "@type": "CourseInstance",
            "courseMode": "onsite",
            "duration": "P<?= (int)($course['duration_weeks'] ?? 0) ?>W",
            "location": {
                "@type": "Place",
                "name": <?= json_encode($locationsText) ?>
            }
        },
        "educationalCredentialAwarded": <?= json_encode($course['title'] ?? '') ?>,
        "occupationalCategory": <?= json_encode($course['category'] ?? '') ?>,
        "url": <?= json_encode($canonicalUrl) ?>
    }
    </script>

    <?php include_once('./includes/stylefiles.php') ?>
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/course.css" />
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/sections/cta.css" />
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/sections/course-common-info.css" />
</head>

<body>
    <main>
        <?php include_once('./includes/header.php') ?>

        <!-- ===================== HERO ===================== -->
        <section class="sit-c-hero page-header">
            <div class="page-hero-bg">
                <img src="<?= BASE_URL ?>/public/imgs/courses/<?= htmlspecialchars($course['thumbnail'] ?? '') ?>"
                    alt="<?= htmlspecialchars($fullTitle) ?> at State Institute of Training" />
            </div>
            <div class="container page-header-inner">
                <nav class="crumb" aria-label="Breadcrumb">
                    <a href="<?= BASE_URL ?>/">Home</a>
                    <span class="sep">/</span>
                    <a href="<?= BASE_URL ?>/courses">Courses</a>
                    <span class="sep">/</span>
                    <a href="<?= BASE_URL ?>/courses"><?= htmlspecialchars($course['category']) ?></a>
                    <span class="sep">/</span>
                    <span class="crumbactive"><?= htmlspecialchars($course['title']) ?></span>
                </nav>

                <div class="my-4">
                    <span class="sit-c-eyebrow">CRICOS Course Code: <?= htmlspecialchars($course['cricos']) ?></span>
                    <h1><?= htmlspecialchars($fullTitle) ?></h1>
                </div>

                <p><?= htmlspecialchars($course['short_desc']) ?></p>

                <div class="header-actions">
                    <a href="<?= BASE_URL ?>/contact" class="btn-sit btn-secondary-sit">Apply Now →</a>
                    <a href="#" class="btn-sit btn-secondary-outline-sit">Download Course Guide</a>
                </div>

                <div class="quick-facts">
                    <div class="fact">
                        <span class="tag-mono">Duration</span>
                        <span class="val"><?= (int)($course['duration_weeks'] ?? 0) ?> weeks</span>
                    </div>
                    <div class="fact">
                        <span class="tag-mono">Study Mode</span>
                        <span class="val"><?= htmlspecialchars($course['mode'] ?? '') ?></span>
                    </div>
                    <div class="fact">
                        <span class="tag-mono">Location</span>
                        <span class="val"><?= htmlspecialchars($locationsText) ?></span>
                    </div>
                    <div class="fact">
                        <span class="tag-mono">Units</span>
                        <span class="val"><?= htmlspecialchars($course['units'] ?? '') ?></span>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <section>
                <div class="row">
                    <!-- Sidebar TOC -->
                    <div class="col-lg-3 mb-4 mb-lg-0">
                        <div class="toc">
                            <span class="toc-label">On this page</span>
                            <a href="#s-desc">Course Description</a>
                            <a href="#s-entry">Entry Requirements</a>
                            <a href="#s-english">English Proficiency</a>
                            <a href="#s-delivery">Duration &amp; Delivery</a>
                            <a href="#p-rules">Packaging Rules</a>
                            <a href="#s-pathways">Pathways</a>
                            <a href="#s-fees">Course Fees</a>
                            <a href="#s-support">Student Support</a>
                            <a href="#s-apply">How to Apply</a>
                            <a href="#s-further">Further Information</a>

                            <div class="side-callout">
                                <span class="tag-mono">Not sure this is the right course?</span>
                                <p>
                                    Book a free 15-minute call with an advisor — we'll walk through
                                    entry requirements and pathway options for your situation.
                                </p>
                                <a href="<?= BASE_URL ?>/contact">Talk to an advisor →</a>
                            </div>
                            <div class="text-center p-3">
                                <img src="https://sit.vic.edu.au/assets/img/ntr.png" width="80" class="img-fluid"
                                    alt="Nationally Recognised Training logo" />
                            </div>
                        </div>
                    </div>

                    <!-- Main Content -->
                    <div class="col-lg-9">

                        <!-- Course Description -->
                        <details class="qa-section" id="s-desc" open>
                            <summary>
                                <h3>Course Description</h3>
                                <span class="plus"></span>
                            </summary>
                            <div class="qa-body">
                                <?= nl2br(htmlspecialchars($course['full_description'] ?? '')) ?>
                            </div>
                        </details>

                        <!-- Entry Requirements -->
                        <details class="qa-section" id="s-entry">
                            <summary>
                                <h3>Entry Requirements</h3>
                                <span class="plus"></span>
                            </summary>
                            <div class="qa-body">
                                <?php if (!empty($course['isrequirments'])): ?>
                                <p><?= nl2br(htmlspecialchars($course['isrequirments'])) ?></p>
                                <?php else: ?>
                                <p>
                                    There's no formal prerequisite qualification for this course. To
                                    enrol at SIT, you'll need to meet the following:
                                </p>
                                <?php endif; ?>

                                <ul>
                                    <li>Be 18 years or older at the time of enrolment</li>
                                    <li>Have completed high school or equivalent</li>
                                    <li>Hold a registered Unique Student Identifier (USI)</li>
                                    <li>Have basic computer skills (Word, Excel, PowerPoint, web research)</li>
                                </ul>
                                <div class="mini-note">
                                    This is a physically demanding trade — expect power tools,
                                    standing, bending and manual handling. A pre-training review
                                    checks course suitability and any support needs.
                                </div>
                            </div>
                        </details>

                        <!-- English Language Proficiency -->
                        <details class="qa-section" id="s-english">
                            <summary>
                                <h3>English Language Proficiency</h3>
                                <span class="plus"></span>
                            </summary>
                            <div class="qa-body">
                                <p>
                                    Training and assessment are delivered in English, so you'll need
                                    to show proof of proficiency (test taken within the last 2
                                    years) via one of:
                                </p>
                                <ul>
                                    <li>IELTS — overall band 6.0</li>
                                    <li>PTE Academic — overall score 50</li>
                                    <li>TOEFL iBT — overall score 64</li>
                                    <li>C1 Advanced (CAE) — overall score 169</li>
                                    <li>OET — overall score 350</li>
                                </ul>
                                <p>
                                    You may be exempt if you're a citizen of the UK, USA, Canada,
                                    New Zealand or Ireland, or have completed at least 5 years of
                                    study — or recent senior secondary/AQF4+ study — in an
                                    English-speaking system.
                                </p>
                            </div>
                        </details>

                        <!-- Duration & Delivery -->
                        <details class="qa-section" id="s-delivery">
                            <summary>
                                <h3>Duration &amp; Delivery</h3>
                                <span class="plus"></span>
                            </summary>
                            <div class="qa-body">
                                <p><?= htmlspecialchars($course['duration_text'] ?? '') ?></p>
                                <p><strong>Mode of Study:</strong>
                                    <?= nl2br(htmlspecialchars($course['mode_text'] ?? '')) ?></p>
                                <p><strong>Locations:</strong>
                                    <?= nl2br(htmlspecialchars($course['location_text'] ?? '')) ?></p>
                                <?php if (!empty($course['has_work_placement'])): ?>
                                <p><strong>Work Placement:</strong> This course includes mandatory work-based training.
                                </p>
                                <?php endif; ?>
                            </div>
                        </details>

                        <!-- Packaging Rules -->
                        <details class="qa-section" id="p-rules">
                            <summary>
                                <h3>Packaging Rules</h3>
                                <span class="plus"></span>
                            </summary>
                            <div class="qa-body">
                                <p><?= nl2br(htmlspecialchars($course['packaging_rules'] ?? '')) ?></p>
                            </div>
                        </details>

                        <!-- Pathways -->
                        <details class="qa-section" id="s-pathways">
                            <summary>
                                <h3>Pathways</h3>
                                <span class="plus"></span>
                            </summary>
                            <div class="qa-body">
                                <?php if (!empty($course['pathways'])): ?>
                                <p>Once you've completed this qualification, you can continue on to:</p>
                                <ul>
                                    <?php foreach ($course['pathways'] as $path): ?>
                                    <li><?= htmlspecialchars($path) ?></li>
                                    <?php endforeach; ?>
                                </ul>
                                <?php else: ?>
                                <p>This is a higher-level qualification. Graduates may progress into industry roles or
                                    further specialised study.</p>
                                <?php endif; ?>
                            </div>
                        </details>

                        <!-- Course Fees -->
                        <details class="qa-section" id="s-fees">
                            <summary>
                                <h3>Course Fees</h3>
                                <span class="plus"></span>
                            </summary>
                            <div class="qa-body">
                                <p>
                                    Course fees are updated periodically — contact SIT directly for
                                    the current fee structure. A few things worth knowing upfront:
                                </p>
                                <ul>
                                    <li>Fees don't cover living costs in Australia</li>
                                    <li>SIT doesn't offer VET FEE-HELP or other government-funded subsidies</li>
                                    <li>Fees may change over the duration of the course</li>
                                </ul>
                                <div class="mini-note">
                                    Planning your budget? The Study in Australia website has a
                                    living-costs guide, and Home Affairs sets the financial
                                    requirements for your student visa.
                                </div>
                            </div>
                        </details>

                        <!-- Student Support -->
                        <details class="qa-section" id="s-support">
                            <summary>
                                <h3>Student Support Services</h3>
                                <span class="plus"></span>
                            </summary>
                            <div class="qa-body">
                                <p>
                                    International students get an age- and culturally-appropriate
                                    Orientation Program covering the support available to help you
                                    settle into study and life in Australia — at no additional cost.
                                    This includes course progress monitoring, LLN (language,
                                    literacy, numeracy) assessment before you start, and access to
                                    SIT's complaints and appeals process if you ever need it.
                                </p>
                            </div>
                        </details>

                        <!-- How to Apply -->
                        <details class="qa-section" id="s-apply">
                            <summary>
                                <h3>How to Apply</h3>
                                <span class="plus"></span>
                            </summary>
                            <div class="qa-body">
                                <p>
                                    Applications go directly through SIT — download the application
                                    form and send it in, or reach out and we'll walk you through it.
                                </p>
                                <ul>
                                    <li>Email: <a href="mailto:info@sit.vic.edu.au">info@sit.vic.edu.au</a></li>
                                    <li>Phone: <a href="tel:+61383834447">03 8383 4447</a></li>
                                    <li>Melbourne — Level 5, 255 William Street, Melbourne VIC 3000</li>
                                    <li>Brisbane — Level 3, 300 Adelaide Street, Brisbane QLD 4000</li>
                                </ul>
                            </div>
                        </details>

                        <!-- Further Information -->
                        <details class="qa-section" id="s-further">
                            <summary>
                                <h3>Further Information</h3>
                                <span class="plus"></span>
                            </summary>
                            <div class="qa-body">
                                <ul>
                                    <li>SIT does not use any 3rd party arrangements for delivery and assessment of this
                                        course.</li>
                                    <li>SIT does not guarantee that a student will obtain a particular employment
                                        outcome after completing this course.</li>
                                    <li>SIT does not promise any possible migration outcomes from undertaking this
                                        course, or guarantee successful education assessment outcomes.</li>
                                </ul>
                            </div>
                        </details>

                    </div>
                </div>
            </section>
        </div>

        <?php include_once('./includes/course-common-info.php'); ?>

        <div class="container">
            <!-- ===================== CTA ===================== -->
            <section class="about-cta">
                <div class="container">
                    <div class="cta-box">
                        <div class="shape sh1"></div>
                        <div class="shape sh3"></div>
                        <div class="cta-content">
                            <span class="badge"><span class="dot"></span>Ready when you are</span>
                            <h3>Take the next step with SIT</h3>
                            <p class="lead">
                                Whether you’re exploring options or ready to apply — we’re here to help
                                you find the right course and campus.
                            </p>
                            <div class="cta-actions">
                                <a href="<?= BASE_URL ?>/contact" class="btn-sit btn-secondary-sit">
                                    Talk to us <span class="arrow">→</span>
                                </a>
                                <a href="<?= BASE_URL ?>/courses" class="btn-sit btn-secondary-outline-sit">
                                    Browse courses
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <?php include_once('./includes/footer.php') ?>
    </main>

    <?php include_once('./includes/scriptfiles.php') ?>
</body>

</html>