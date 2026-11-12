<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php require_once __DIR__ . '/config.php'; ?>

    <title>About Us | State Institute of Training | Melbourne, Pakenham & Brisbane</title>
    <meta name="description"
        content="Learn about State Institute of Training (SIT) — a trusted RTO delivering practical, industry-focused vocational training in engineering, construction and business across Melbourne, Pakenham and Brisbane. RTO 45205 · CRICOS 03948A." />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="<?= BASE_URL ?>/about" />

    <!-- Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="State Institute of Training" />
    <meta property="og:title" content="About Us | State Institute of Training | Melbourne, Pakenham & Brisbane" />
    <meta property="og:description"
        content="Practical, industry-focused vocational training in engineering, construction and business. RTO 45205 · CRICOS 03948A." />
    <meta property="og:url" content="<?= BASE_URL ?>/about" />
    <meta property="og:image" content="<?= BASE_URL ?>/img/logo.png" />
    <meta property="og:locale" content="en_AU" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="About Us | State Institute of Training" />
    <meta name="twitter:description"
        content="Practical, industry-focused vocational training in engineering, construction and business across Melbourne, Pakenham and Brisbane." />
    <meta name="twitter:image" content="<?= BASE_URL ?>/img/logo.png" />

    <?php include_once('./includes/stylefiles.php') ?>
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/about.css" />
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/sections/cta.css" />
</head>

<body>
    <main>
        <?php include_once(ROOT_PATH . '/includes/header.php') ?>

        <!-- ===================== PAGE HEADER ===================== -->
        <section class="page-header">
            <div class="page-hero-bg">
                <img src="<?= BASE_URL ?>/public/imgs/page-header/about.webp" alt="About State Institute of Training" />
            </div>
            <div class="page-header-inner">
                <nav class="crumb" aria-label="Breadcrumb">
                    <a href="<?= BASE_URL ?>/">Home</a>
                    <span class="sep">/</span>
                    <span class="crumbactive">About Us</span>
                </nav>

                <h1>Practical training.<br>Real careers.</h1>
                <p>
                    State Institute of Training is a Registered Training Organisation delivering
                    relevant, affordable vocational education across Melbourne, Pakenham and Brisbane.
                </p>
            </div>
        </section>

        <!-- ===================== WHO WE ARE ===================== -->
        <section class="about-intro">
            <div class="container">
                <div class="intro-grid">
                    <div class="intro-content">
                        <span class="section-eyebrow">Who we are</span>
                        <h2>A training partner focused on outcomes</h2>
                        <p class="lead">
                            State Institute of Training (SIT) is a privately owned Registered Training
                            Organisation (RTO No. 45205, CRICOS 03948A). We provide nationally recognised
                            qualifications through practical, flexible learning that prepares students
                            for real work in engineering, construction and related fields.
                        </p>
                        <p>
                            Our trainers are industry practitioners. Courses are delivered face-to-face
                            with hands-on workshop time — not just theory. We don’t subcontract training
                            delivery, so the quality you experience is the quality we control.
                        </p>
                        <p>
                            Whether you’re starting a trade, upskilling, or studying as an international
                            student, our goal is the same: give you the skills and confidence to move
                            forward in your career.
                        </p>
                    </div>

                    <div class="intro-aside">
                        <img class="img-fluid" src="<?= BASE_URL ?>/public/imgs/about-students.gif"
                            alt="Students training at State Institute of Training" />
                        <div class="trust-strip">
                            <div class="trust-item">
                                <span class="trust-val">RTO</span>
                                <span class="trust-key">45205</span>
                            </div>
                            <div class="trust-item">
                                <span class="trust-val">CRICOS</span>
                                <span class="trust-key">03948A</span>
                            </div>
                            <div class="trust-item">
                                <span class="trust-val">Registered</span>
                                <span class="trust-key">Since 2017</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===================== CEO MESSAGE ===================== -->
        <section class="ceo-section">
            <div class="container">
                <div class="ceo-card">
                    <div class="ceo-quote">
                        <span class="quote-mark" aria-hidden="true">“</span>
                        <blockquote>
                            Education is one of the most powerful things a person can carry.
                            At SIT we keep things practical and supportive — so students leave
                            with skills they can actually use, and a clearer path ahead.
                        </blockquote>
                        <div class="ceo-meta">
                            <div class="ceo-avatar" aria-hidden="true">KB</div>
                            <div>
                                <strong>Kesu Basi</strong>
                                <span>Chief Executive Officer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===================== WHY SIT ===================== -->
        <section class="why-section">
            <div class="container">
                <div class="section-head">
                    <span class="section-eyebrow">Why students choose us</span>
                    <h2>What sets us apart</h2>
                    <p class="section-lead">
                        Simple focus: quality training, real industry input, and support that
                        helps you finish what you start.
                    </p>
                </div>

                <div class="why-grid">
                    <div class="why-card">
                        <div class="why-icon" aria-hidden="true">
                            <i class="fa fa-wrench"></i>
                        </div>
                        <h3>Hands-on from the start</h3>
                        <p>
                            Purpose-built workshops and practical assessment mean you spend time
                            doing the work, not just reading about it.
                        </p>
                    </div>

                    <div class="why-card">
                        <div class="why-icon" aria-hidden="true">
                            <i class="fa fa-user-tie"></i>
                        </div>
                        <h3>Trainers who work in the field</h3>
                        <p>
                            Our trainers bring current industry experience into the classroom —
                            so you learn the standards and practices used on real sites.
                        </p>
                    </div>

                    <div class="why-card">
                        <div class="why-icon" aria-hidden="true">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <h3>Three campus options</h3>
                        <p>
                            Study in the city or a growing regional centre. Melbourne, Pakenham
                            and Brisbane give you flexibility on location and lifestyle.
                        </p>
                    </div>

                    <div class="why-card">
                        <div class="why-icon" aria-hidden="true">
                            <i class="fa fa-handshake-o"></i>
                        </div>
                        <h3>Support that stays with you</h3>
                        <p>
                            From orientation and LLN support to progress monitoring and wellbeing
                            referrals — we help you settle in and stay on track.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===================== CAMPUSES ===================== -->
        <section class="campuses-section">
            <div class="container">
                <div class="section-head">
                    <span class="section-eyebrow">Our locations</span>
                    <h2>Campuses in Victoria & Queensland</h2>
                    <p class="section-lead">
                        Three campuses. Same commitment to practical training and student support.
                    </p>
                </div>

                <div class="campus-grid">
                    <article class="campus-card">
                        <div class="campus-badge">Victoria</div>
                        <h3>Melbourne Campus</h3>
                        <address>
                            Level 5, 255 William Street<br>
                            Melbourne VIC 3000
                        </address>
                        <p class="campus-note">
                            Central CBD location — close to transport, workplaces and city amenities.
                        </p>
                        <div class="campus-actions">
                            <a href="tel:0383834447" class="campus-link">
                                <i class="fa fa-phone" aria-hidden="true"></i> 03 8383 4447
                            </a>
                            <a href="mailto:info@sit.vic.edu.au" class="campus-link">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i> Email
                            </a>
                        </div>
                    </article>

                    <article class="campus-card">
                        <div class="campus-badge">Victoria</div>
                        <h3>Pakenham Campus</h3>
                        <address>
                            Level 1, 29 James Street<br>
                            Pakenham VIC 3810
                        </address>
                        <p class="campus-note">
                            Growing outer-Melbourne hub with good transport links and a more
                            relaxed pace of study life.
                        </p>
                        <div class="campus-actions">
                            <a href="tel:0383834447" class="campus-link">
                                <i class="fa fa-phone" aria-hidden="true"></i> 03 8383 4447
                            </a>
                            <a href="mailto:info@sit.vic.edu.au" class="campus-link">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i> Email
                            </a>
                        </div>
                    </article>

                    <article class="campus-card">
                        <div class="campus-badge brisbane">Queensland</div>
                        <h3>Brisbane Campus</h3>
                        <address>
                            Level 3, 300 Adelaide Street<br>
                            Brisbane QLD 4000
                        </address>
                        <p class="campus-note">
                            Inner-city Brisbane location for students who want to train in
                            Queensland’s capital.
                        </p>
                        <div class="campus-actions">
                            <a href="tel:0383834447" class="campus-link">
                                <i class="fa fa-phone" aria-hidden="true"></i> 03 8383 4447
                            </a>
                            <a href="mailto:info@sit.vic.edu.au" class="campus-link">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i> Email
                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- ===================== COMMITMENT ===================== -->
        <section class="commit-section">
            <div class="container">
                <div class="commit-grid">
                    <div class="commit-content">
                        <span class="section-eyebrow">Our commitment</span>
                        <h2>Quality, inclusion and student success</h2>
                        <p>
                            As an RTO registered with ASQA, we meet the Standards for Registered
                            Training Organisations and the National Code for overseas students.
                            We take that responsibility seriously.
                        </p>
                        <p>
                            We are committed to a safe, inclusive learning environment. Students
                            have access to academic support, language and literacy assistance,
                            wellbeing referrals, and a clear complaints and appeals process.
                            International students receive an orientation program to help them
                            settle into study and life in Australia.
                        </p>
                        <ul class="commit-list">
                            <li>Nationally recognised qualifications</li>
                            <li>No third-party delivery of training</li>
                            <li>Student Tuition Protection Scheme (TPS) participant</li>
                            <li>Focus on course progress and completion support</li>
                        </ul>
                    </div>
                    <div class="commit-aside">
                        <div class="aside-card">
                            <h4>Looking for a course?</h4>
                            <p>
                                Explore our range of Certificate and Diploma qualifications in
                                engineering, construction and related fields.
                            </p>
                            <a href="<?= BASE_URL ?>/courses" class="btn-sit btn-primary-sit">View courses <span
                                    class="arrow"><svg width="25px" height="100%" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 18L18 6M18 6H10M18 6V14" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg></span></a>
                        </div>
                        <div class="aside-card muted">
                            <h4>Need to talk it through?</h4>
                            <p>
                                Our team can help with entry requirements, pathways and campus options.
                            </p>
                            <a href="<?= BASE_URL ?>/contact#query" class="btn-sit btn-lime-sit">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
                            <a href="<?= BASE_URL ?>/contact#query" class="btn-sit btn-secondary-sit">Talk to us
                                <span class="arrow"><svg width="25px" height="100%" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 18L18 6M18 6H10M18 6V14" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg></span></a>
                            <a href="<?= BASE_URL ?>/courses" class="btn-sit btn-secondary-outline-sit">Browse
                                courses</a>
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