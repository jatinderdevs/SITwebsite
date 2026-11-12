<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php require_once __DIR__ . '/config.php'; ?>

    <title>Student Support | Forms, Policies & Help | State Institute of Training</title>
    <meta name="description"
        content="Student Support at State Institute of Training — download forms and policies, find orientation info, contact the right team, and access wellbeing helplines and external resources." />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="<?= BASE_URL ?>/student-support" />

    <!-- Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="State Institute of Training" />
    <meta property="og:title" content="Student Support | Forms, Policies & Help | State Institute of Training" />
    <meta property="og:description"
        content="Download forms and policies, find orientation info, contact the right team, and access wellbeing helplines at State Institute of Training." />
    <meta property="og:url" content="<?= BASE_URL ?>/student-support" />
    <meta property="og:image" content="<?= BASE_URL ?>/img/logo.png" />
    <meta property="og:locale" content="en_AU" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Student Support | Forms, Policies & Help | State Institute of Training" />
    <meta name="twitter:description"
        content="Download forms and policies, find orientation info, and access wellbeing helplines at State Institute of Training." />
    <meta name="twitter:image" content="<?= BASE_URL ?>/img/logo.png" />

    <?php include_once('./includes/stylefiles.php') ?>
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/student-support.css" />
</head>

<body>
    <main>
        <?php include_once('./includes/header.php') ?>

        <!-- ===================== PAGE HEADER ===================== -->
        <section class="page-header">
            <div class="page-hero-bg">
                <img src="<?= BASE_URL ?>/public/imgs/page-header/support.webp"
                    alt="Student support at State Institute of Training" />
            </div>

            <div class="page-header-inner">
                <nav class="crumb" aria-label="Breadcrumb">
                    <a href="<?= BASE_URL ?>/">Home</a>
                    <span class="sep">/</span>
                    <span class="crumbactive">Student Support</span>
                </nav>
                <span class="sit-c-eyebrow">Student Support</span>
                <h1>Help when you need it</h1>
                <p>
                    Forms, policies, orientation details, support contacts and wellbeing resources —
                    everything in one place for current and prospective students.
                </p>
            </div>
        </section>

        <!-- ===================== QUICK HELP ===================== -->
        <section class="quick-help">
            <div class="container">
                <div class="quick-help-grid">
                    <a href="tel:0383834447" class="qh-card">
                        <div class="qh-icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <div>
                            <strong>Call us</strong>
                            <span>03 8383 4447 · Mon–Fri 9am–5pm</span>
                        </div>
                    </a>
                    <a href="mailto:info@sit.vic.edu.au" class="qh-card">
                        <div class="qh-icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                        <div>
                            <strong>Email</strong>
                            <span>info@sit.vic.edu.au · Reply in 1–2 days</span>
                        </div>
                    </a>
                    <a href="<?= BASE_URL ?>/contact#query" class="qh-card">
                        <div class="qh-icon"><i class="fa fa-comments-o" aria-hidden="true"></i></div>
                        <div>
                            <strong>Send a message</strong>
                            <span>Contact form · We’ll get back to you</span>
                        </div>
                    </a>
                    <a href="<?= BASE_URL ?>/assets/policies/student-handbook-international-students.pdf"
                        class="qh-card" target="_blank" rel="noopener">
                        <div class="qh-icon"><i class="fa fa-book" aria-hidden="true"></i></div>
                        <div>
                            <strong>Student Handbook</strong>
                            <span>Full guide · PDF download</span>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- ===================== FORMS ===================== -->
        <section class="ss-section" id="forms">
            <div class="container">
                <div class="section-head">
                    <span class="section-eyebrow">Downloads</span>
                    <h2>Student forms</h2>
                    <p class="section-lead">
                        Use these forms to apply, request a refund, or raise a complaint or appeal.
                    </p>
                </div>

                <div class="doc-grid">
                    <a href="<?= BASE_URL ?>/assets/forms/application-for-enrolment-form.pdf" class="doc-card"
                        target="_blank" rel="noopener">
                        <div class="doc-icon"><i class="fa fa-file-text-o" aria-hidden="true"></i></div>
                        <div class="doc-body">
                            <h3>Application for Enrolment</h3>
                            <p>Start your application for a course at SIT.</p>
                        </div>
                        <span class="doc-action">Download PDF</span>
                    </a>

                    <a href="<?= BASE_URL ?>/assets/forms/refund-form.pdf" class="doc-card" target="_blank"
                        rel="noopener">
                        <div class="doc-icon"><i class="fa fa-file-text-o" aria-hidden="true"></i></div>
                        <div class="doc-body">
                            <h3>Refund Form</h3>
                            <p>Request a refund of fees under the refund policy.</p>
                        </div>
                        <span class="doc-action">Download PDF</span>
                    </a>

                    <a href="<?= BASE_URL ?>/assets/forms/complaints-and-appeals-form.pdf" class="doc-card"
                        target="_blank" rel="noopener">
                        <div class="doc-icon"><i class="fa fa-file-text-o" aria-hidden="true"></i></div>
                        <div class="doc-body">
                            <h3>Complaints &amp; Appeals Form</h3>
                            <p>Lodge a formal complaint or appeal a decision.</p>
                        </div>
                        <span class="doc-action">Download PDF</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- ===================== POLICIES ===================== -->
        <section class="ss-section alt" id="policies">
            <div class="container">
                <div class="section-head">
                    <span class="section-eyebrow">Policies</span>
                    <h2>Student policies</h2>
                    <p class="section-lead">
                        Official policies that guide how we manage enrolment, progress, fees and your rights.
                    </p>
                </div>

                <div class="policy-groups">
                    <!-- Group 1 -->
                    <div class="policy-group">
                        <h3 class="group-title">Study &amp; progress</h3>
                        <div class="policy-list">
                            <a href="<?= BASE_URL ?>/assets/policies/attendance-policy.pdf" class="policy-item"
                                target="_blank" rel="noopener">
                                <span class="policy-name">Attendance Policy &amp; Procedure</span>
                                <span class="policy-dl">PDF</span>
                            </a>
                            <a href="<?= BASE_URL ?>/assets/policies/course-progress-policy.pdf" class="policy-item"
                                target="_blank" rel="noopener">
                                <span class="policy-name">Course Progress &amp; Attendance Monitoring</span>
                                <span class="policy-dl">PDF</span>
                            </a>
                        </div>
                    </div>

                    <!-- Group 2 -->
                    <div class="policy-group">
                        <h3 class="group-title">Fees &amp; refunds</h3>
                        <div class="policy-list">
                            <a href="<?= BASE_URL ?>/assets/policies/fees-charges-and-refund-policy.pdf"
                                class="policy-item" target="_blank" rel="noopener">
                                <span class="policy-name">Fees, Charges and Refund Policy</span>
                                <span class="policy-dl">PDF</span>
                            </a>
                        </div>
                    </div>

                    <!-- Group 3 -->
                    <div class="policy-group">
                        <h3 class="group-title">Changing your enrolment</h3>
                        <div class="policy-list">
                            <a href="<?= BASE_URL ?>/assets/policies/deferment-suspension-cancellation-policy.pdf"
                                class="policy-item" target="_blank" rel="noopener">
                                <span class="policy-name">Deferment, Suspension or Cancellation</span>
                                <span class="policy-dl">PDF</span>
                            </a>
                            <a href="<?= BASE_URL ?>/assets/policies/overseas-student-transfer-policy.pdf"
                                class="policy-item" target="_blank" rel="noopener">
                                <span class="policy-name">Overseas Student Transfer Policy</span>
                                <span class="policy-dl">PDF</span>
                            </a>
                        </div>
                    </div>

                    <!-- Group 4 -->
                    <div class="policy-group">
                        <h3 class="group-title">Rights, entry &amp; protection</h3>
                        <div class="policy-list">
                            <a href="<?= BASE_URL ?>/assets/policies/complaints-and-appeals-policy.pdf"
                                class="policy-item" target="_blank" rel="noopener">
                                <span class="policy-name">Complaints and Appeals Policy</span>
                                <span class="policy-dl">PDF</span>
                            </a>
                            <a href="<?= BASE_URL ?>/assets/policies/entry-equirements-and-selection-policy.pdf"
                                class="policy-item" target="_blank" rel="noopener">
                                <span class="policy-name">Entry Requirements and Selection</span>
                                <span class="policy-dl">PDF</span>
                            </a>
                            <a href="<?= BASE_URL ?>/assets/policies/informing-and-protecting-learners-policy.pdf"
                                class="policy-item" target="_blank" rel="noopener">
                                <span class="policy-name">Informing and Protecting Learners</span>
                                <span class="policy-dl">PDF</span>
                            </a>
                            <a href="<?= BASE_URL ?>/assets/policies/recognition-of-prior-learning-and-credit-transfer-policy.pdf"
                                class="policy-item" target="_blank" rel="noopener">
                                <span class="policy-name">RPL and Credit Transfer</span>
                                <span class="policy-dl">PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===================== ORIENTATION ===================== -->
        <section class="ss-section" id="orientation">
            <div class="container">
                <div class="section-head">
                    <span class="section-eyebrow">Getting started</span>
                    <h2>Orientation</h2>
                    <p class="section-lead">
                        All new students attend an orientation session before classes begin.
                        It’s free and designed to help you settle in.
                    </p>
                </div>

                <div class="orient-grid">
                    <div class="orient-card">
                        <div class="orient-num">01</div>
                        <h3>What to expect</h3>
                        <p>
                            You’ll meet staff, learn how the campus works, and get clear information
                            about your course, assessment, attendance and support services.
                        </p>
                    </div>
                    <div class="orient-card">
                        <div class="orient-num">02</div>
                        <h3>Key topics covered</h3>
                        <ul>
                            <li>Course structure and timetable</li>
                            <li>Attendance and progress requirements</li>
                            <li>Assessment and academic integrity</li>
                            <li>Student support and wellbeing</li>
                            <li>Campus facilities and safety</li>
                            <li>Who to contact for what</li>
                        </ul>
                    </div>
                    <div class="orient-card">
                        <div class="orient-num">03</div>
                        <h3>Before you arrive</h3>
                        <p>
                            Read the Student Handbook and keep your offer letter and ID ready.
                            If you have questions about starting dates or documents, email us
                            at <a href="mailto:info@sit.vic.edu.au">info@sit.vic.edu.au</a>.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===================== WHO TO CONTACT ===================== -->
        <section class="ss-section alt" id="contact-who">
            <div class="container">
                <div class="section-head">
                    <span class="section-eyebrow">Directory</span>
                    <h2>Who to contact for what</h2>
                    <p class="section-lead">
                        Reach the right team the first time. For general enquiries, start with Student Support.
                    </p>
                </div>

                <div class="contact-who-grid">
                    <div class="cw-card">
                        <h3>Course &amp; academic questions</h3>
                        <p>Units, assessments, progress, or training support.</p>
                        <span class="cw-role">Your trainer or Academic Manager</span>
                        <a href="mailto:info@sit.vic.edu.au" class="cw-link">info@sit.vic.edu.au</a>
                    </div>
                    <div class="cw-card">
                        <h3>Fees, refunds &amp; admin</h3>
                        <p>Invoices, payment plans, refund requests, enrolment changes.</p>
                        <span class="cw-role">Student Administration</span>
                        <a href="mailto:info@sit.vic.edu.au" class="cw-link">info@sit.vic.edu.au</a>
                    </div>
                    <div class="cw-card">
                        <h3>Wellbeing &amp; personal support</h3>
                        <p>Settling in, stress, personal issues, or needing a referral.</p>
                        <span class="cw-role">Student Support / Welfare</span>
                        <a href="mailto:info@sit.vic.edu.au" class="cw-link">info@sit.vic.edu.au</a>
                    </div>
                    <div class="cw-card">
                        <h3>Complaints or appeals</h3>
                        <p>Formal complaint or appeal of a decision.</p>
                        <span class="cw-role">Use the Complaints &amp; Appeals Form</span>
                        <a href="#forms" class="cw-link">Go to forms ↓</a>
                    </div>
                    <div class="cw-card">
                        <h3>Visa or transfer questions</h3>
                        <p>Course transfer, release letters, or visa-related guidance.</p>
                        <span class="cw-role">Student Support (we’ll direct you)</span>
                        <a href="mailto:info@sit.vic.edu.au" class="cw-link">info@sit.vic.edu.au</a>
                    </div>
                    <div class="cw-card">
                        <h3>General enquiries</h3>
                        <p>Campus locations, open days, agent queries, anything else.</p>
                        <span class="cw-role">Reception / Student Support</span>
                        <a href="tel:0383834447" class="cw-link">03 8383 4447</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===================== SUPPORT SERVICES + HELPLINES ===================== -->
        <section class="ss-section" id="support-services">
            <div class="container">
                <div class="section-head">
                    <span class="section-eyebrow">Support</span>
                    <h2>Support services &amp; helplines</h2>
                    <p class="section-lead">
                        SIT provides academic and wellbeing support at no extra cost.
                        For urgent help outside office hours, use the free national services below.
                    </p>
                </div>

                <div class="support-split">
                    <div class="support-internal">
                        <h3>At SIT</h3>
                        <ul class="support-list">
                            <li>
                                <strong>Orientation program</strong>
                                <span>Age- and culturally appropriate induction for all new students</span>
                            </li>
                            <li>
                                <strong>LLN &amp; study support</strong>
                                <span>Language, literacy, numeracy and digital literacy assistance</span>
                            </li>
                            <li>
                                <strong>Academic progress monitoring</strong>
                                <span>Early support if you’re at risk of falling behind</span>
                            </li>
                            <li>
                                <strong>Wellbeing referrals</strong>
                                <span>Guidance and referral to external counselling or health services</span>
                            </li>
                            <li>
                                <strong>Complaints &amp; appeals</strong>
                                <span>Clear process if something isn’t working</span>
                            </li>
                        </ul>
                    </div>

                    <div class="support-helplines">
                        <h3>Free helplines (24/7)</h3>
                        <div class="helpline-cards">
                            <a href="https://www.lifeline.org.au/" class="helpline-card" target="_blank" rel="noopener">
                                <strong>Lifeline</strong>
                                <span class="hl-num">13 11 14</span>
                                <span class="hl-desc">Crisis support &amp; suicide prevention</span>
                            </a>
                            <a href="https://www.beyondblue.org.au/" class="helpline-card" target="_blank"
                                rel="noopener">
                                <strong>Beyond Blue</strong>
                                <span class="hl-num">1300 22 4636</span>
                                <span class="hl-desc">Anxiety, depression &amp; wellbeing</span>
                            </a>
                            <a href="https://www.1800respect.org.au/" class="helpline-card" target="_blank"
                                rel="noopener">
                                <strong>1800RESPECT</strong>
                                <span class="hl-num">1800 737 732</span>
                                <span class="hl-desc">Sexual assault &amp; domestic violence</span>
                            </a>
                            <a href="https://www.kidshelpline.com.au/" class="helpline-card" target="_blank"
                                rel="noopener">
                                <strong>Kids Helpline</strong>
                                <span class="hl-num">1800 55 1800</span>
                                <span class="hl-desc">Under 25 · Free counselling</span>
                            </a>
                        </div>
                        <p class="helpline-note">
                            In an emergency always call <strong>000</strong>.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===================== EXTERNAL LINKS ===================== -->
        <section class="ss-section alt" id="external">
            <div class="container">
                <div class="section-head">
                    <span class="section-eyebrow">Resources</span>
                    <h2>Useful external links</h2>
                    <p class="section-lead">
                        Official government and support sites that many students find helpful.
                    </p>
                </div>

                <div class="ext-grid">
                    <a href="https://www.studyaustralia.gov.au/" class="ext-card" target="_blank" rel="noopener">
                        <h3>Study Australia</h3>
                        <p>Official guide to living and studying in Australia</p>
                    </a>
                    <a href="https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/student-500"
                        class="ext-card" target="_blank" rel="noopener">
                        <h3>Home Affairs — Student visa</h3>
                        <p>Visa conditions, work rights and obligations</p>
                    </a>
                    <a href="https://www.education.gov.au/tps" class="ext-card" target="_blank" rel="noopener">
                        <h3>Tuition Protection (TPS)</h3>
                        <p>How your fees are protected if a provider closes</p>
                    </a>
                    <a href="https://www.ombudsman.gov.au/complaints/overseas-students" class="ext-card" target="_blank"
                        rel="noopener">
                        <h3>Overseas Student Ombudsman</h3>
                        <p>External complaints about education providers</p>
                    </a>
                    <a href="https://www.asqa.gov.au/" class="ext-card" target="_blank" rel="noopener">
                        <h3>ASQA</h3>
                        <p>National regulator for vocational education</p>
                    </a>
                    <a href="https://www.studyinaustralia.gov.au/English/Live-in-Australia/Health-and-safety"
                        class="ext-card" target="_blank" rel="noopener">
                        <h3>Health &amp; safety in Australia</h3>
                        <p>Emergency, health insurance and staying safe</p>
                    </a>
                </div>
            </div>
        </section>

        <!-- ===================== CTA ===================== -->
        <section class="ss-cta">
            <div class="container">
                <div class="cta-box">
                    <div class="shape sh1"></div>
                    <div class="shape sh3"></div>
                    <div class="cta-content">
                        <span class="badge"><span class="dot"></span>Still need help?</span>
                        <h3>Talk to Student Support</h3>
                        <p class="lead">
                            Can’t find what you need, or prefer to speak with someone?
                            We’re here Mon–Fri, 9am–5pm.
                        </p>
                        <div class="cta-actions">
                            <a href="<?= BASE_URL ?>/contact#query" class="btn-sit btn-secondary-sit">Contact us <span
                                    class="arrow">→</span></a>
                            <a href="tel:0383834447" class="btn-sit btn-secondary-outline-sit">03 8383 4447</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include_once('./includes/footer.php') ?>
    </main>
    <?php include_once('./includes/scriptfiles.php') ?>
</body>

</html>