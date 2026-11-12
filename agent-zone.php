<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php require_once __DIR__ . '/config.php'; ?>

    <title>Agent Zone | Partner with State Institute of Training</title>
    <meta name="description"
        content="Education agent zone for State Institute of Training — partner with SIT. Campus info for Melbourne, Pakenham and Brisbane, application form, enrolment document checklist and agent support." />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="<?= BASE_URL ?>/agent-zone" />

    <!-- Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="State Institute of Training" />
    <meta property="og:title" content="Agent Zone | Partner with State Institute of Training" />
    <meta property="og:description"
        content="Partner with SIT — campuses in Melbourne, Pakenham and Brisbane, agent application, enrolment checklist and support contacts." />
    <meta property="og:url" content="<?= BASE_URL ?>/agent-zone" />
    <meta property="og:image" content="<?= BASE_URL ?>/img/logo.png" />
    <meta property="og:locale" content="en_AU" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Agent Zone | Partner with State Institute of Training" />
    <meta name="twitter:description"
        content="Partner with SIT — campuses, agent application, enrolment checklist and support for education agents." />
    <meta name="twitter:image" content="<?= BASE_URL ?>/img/logo.png" />

    <?php include_once('./includes/stylefiles.php') ?>
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/agent-zone.css" />
</head>

<body>
    <main>
        <?php include_once('./includes/header.php') ?>

        <!-- ===================== HERO ===================== -->
        <section class="page-header az-hero">
            <div class="page-hero-bg">
                <img src="<?= BASE_URL ?>/public/imgs/page-header/australia.webp"
                    alt="Partner with State Institute of Training" />
            </div>

            <div class="page-header-inner">
                <nav class="crumb" aria-label="Breadcrumb">
                    <a href="<?= BASE_URL ?>/">Home</a>
                    <span class="sep">/</span>
                    <span class="crumbactive">Agent Zone</span>
                </nav>
                <span class="sit-c-eyebrow">For Education Agents</span>
                <h1>Partner with State Institute of Training</h1>
                <p>
                    Everything you need to represent State Institute of Training —
                    campuses, courses, enrolment documents and a direct line to our team.
                </p>
                <div class="hero-actions">
                    <a href="#apply" class="btn-sit btn-secondary-sit">Become an agent →</a>
                    <a href="<?= BASE_URL ?>/our-agents" class="btn-sit btn-secondary-outline-sit">Our Authorised
                        Agents</a>
                </div>
            </div>
        </section>

        <!-- ===================== QUICK ACTIONS ===================== -->
        <section class="az-quick">
            <div class="container">
                <div class="az-quick-grid">
                    <a href="#apply" class="az-q-card">
                        <div class="az-q-icon"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></div>
                        <div>
                            <strong>Agent application</strong>
                            <span>Apply online in a few minutes</span>
                        </div>
                    </a>
                    <a href="#campuses" class="az-q-card">
                        <div class="az-q-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                        <div>
                            <strong>Our campuses</strong>
                            <span>Melbourne · Pakenham · Brisbane</span>
                        </div>
                    </a>
                    <a href="#checklist" class="az-q-card">
                        <div class="az-q-icon"><i class="fa fa-check-square-o" aria-hidden="true"></i></div>
                        <div>
                            <strong>Document checklist</strong>
                            <span>What students need to enrol</span>
                        </div>
                    </a>
                    <a href="#contact" class="az-q-card">
                        <div class="az-q-icon"><i class="fa fa-comments-o" aria-hidden="true"></i></div>
                        <div>
                            <strong>Agent support</strong>
                            <span>Fees, intakes &amp; enquiries</span>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- ===================== WHY PARTNER ===================== -->
        <section class="az-section" id="why">
            <div class="container">
                <div class="az-split">
                    <div class="az-split-text">
                        <span class="section-eyebrow">Why SIT</span>
                        <h2>A practical partner for your students</h2>
                        <p class="lead">
                            State Institute of Training is an ASQA-registered RTO delivering hands-on
                            vocational qualifications in engineering, construction and related fields.
                        </p>
                        <p>
                            We work with education agents who value clear communication, realistic
                            pathways and genuine student support — across Melbourne, Pakenham and Brisbane.
                        </p>
                        <div class="fact-row">
                            <div class="fact-pill">
                                <span class="fact-label">Qualifications</span>
                                <span class="fact-val">9 Courses</span>
                            </div>
                            <div class="fact-pill">
                                <span class="fact-label">Campuses</span>
                                <span class="fact-val">3 locations</span>
                            </div>
                            <div class="fact-pill">
                                <span class="fact-label">Focus</span>
                                <span class="fact-val">Trade &amp; engineering</span>
                            </div>
                        </div>
                    </div>
                    <div class="az-split-visual">
                        <img src="<?= BASE_URL ?>/public/imgs/deal3.gif" class="img-fluid"
                            alt="Partnering with State Institute of Training" />
                    </div>
                </div>
            </div>
        </section>

        <!-- ===================== BECOME AN AGENT ===================== -->
        <section class="az-section alt" id="apply">
            <div class="container">
                <div class="apply-banner">
                    <div class="apply-content">
                        <span class="section-eyebrow light">Get started</span>
                        <h2>Become an authorised agent</h2>
                        <p>
                            New to SIT or ready to formalise the partnership? Complete the online
                            agent application form. Our team will review and get back to you.
                        </p>
                        <ul class="apply-points">
                            <li>Quick online form</li>
                            <li>Suitable for new and existing agents</li>
                            <li>We’ll confirm next steps after review</li>
                        </ul>
                        <!-- Replace href with your CMS agent application form URL -->
                        <a href="#" class="btn-sit btn-secondary-sit" id="agent-form-btn">
                            Complete agent application →
                        </a>
                        <p class="apply-note">Already working with us? Use the same form or contact admissions below.
                        </p>
                    </div>
                    <div class="apply-visual">
                        <div class="apply-stat">
                            <span class="stat-num">3</span>
                            <span class="stat-label">Campuses</span>
                        </div>
                        <div class="apply-stat">
                            <span class="stat-num">RTO</span>
                            <span class="stat-label">Registered provider</span>
                        </div>
                        <div class="apply-stat">
                            <span class="stat-num">CRICOS</span>
                            <span class="stat-label">International students</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===================== CAMPUSES ===================== -->
        <section class="az-section" id="campuses">
            <div class="container">
                <div class="section-head">
                    <span class="section-eyebrow">Locations</span>
                    <h2>Our campuses</h2>
                    <p class="section-lead">
                        Three campuses so students can choose the city or regional setting that suits them.
                    </p>
                </div>

                <div class="campus-grid">
                    <article class="campus-card">
                        <div class="campus-img">
                            <img src="https://images.unsplash.com/photo-1506973035872-a4ec16b8e8d9?w=700&q=80"
                                alt="Melbourne city" loading="lazy" />
                            <span class="campus-tag">Victoria</span>
                        </div>
                        <div class="campus-body">
                            <h3>Melbourne Campus</h3>
                            <address>
                                Level 5, 255 William Street<br>
                                Melbourne VIC 3000
                            </address>
                            <p>Central CBD — close to transport, workplaces and city life.</p>
                            <a href="tel:0383834447" class="campus-link">
                                <i class="fa fa-phone" aria-hidden="true"></i> 03 8383 4447
                            </a>
                        </div>
                    </article>

                    <article class="campus-card">
                        <div class="campus-img">
                            <img src="https://images.unsplash.com/photo-1449824913935-59a10b8d2000?w=700&q=80"
                                alt="Pakenham campus area" loading="lazy" />
                            <span class="campus-tag">Victoria</span>
                        </div>
                        <div class="campus-body">
                            <h3>Pakenham Campus</h3>
                            <address>
                                Level 1, 29 James Street<br>
                                Pakenham VIC 3810
                            </address>
                            <p>Growing outer-Melbourne location with good transport links and a calmer pace.</p>
                            <a href="tel:0383834447" class="campus-link">
                                <i class="fa fa-phone" aria-hidden="true"></i> 03 8383 4447
                            </a>
                        </div>
                    </article>

                    <article class="campus-card">
                        <div class="campus-img">
                            <img src="https://images.unsplash.com/photo-1523482580671-a0904aebebf7?w=700&q=80"
                                alt="Brisbane city" loading="lazy" />
                            <span class="campus-tag qld">Queensland</span>
                        </div>
                        <div class="campus-body">
                            <h3>Brisbane Campus</h3>
                            <address>
                                Level 3, 300 Adelaide Street<br>
                                Brisbane QLD 4000
                            </address>
                            <p>Inner-city Brisbane for students who want to train in Queensland’s capital.</p>
                            <a href="tel:0383834447" class="campus-link">
                                <i class="fa fa-phone" aria-hidden="true"></i> 03 8383 4447
                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- ===================== DOCUMENT CHECKLIST ===================== -->
        <section class="az-section alt" id="checklist">
            <div class="container">
                <div class="az-split reverse">
                    <div class="az-split-text">
                        <span class="section-eyebrow">Enrolment</span>
                        <h2>Student admission document checklist</h2>
                        <p class="lead">
                            Help your students submit a complete application the first time.
                            Incomplete documents delay processing.
                        </p>
                        <ul class="check-list">
                            <li>
                                <span class="check-icon"><i class="fa fa-check" aria-hidden="true"></i></span>
                                <div>
                                    <strong>Passport</strong>
                                    <span>Certified copy of the bio-data page</span>
                                </div>
                            </li>
                            <li>
                                <span class="check-icon"><i class="fa fa-check" aria-hidden="true"></i></span>
                                <div>
                                    <strong>Visa (if applicable)</strong>
                                    <span>Current visa grant notice or bridging visa</span>
                                </div>
                            </li>
                            <li>
                                <span class="check-icon"><i class="fa fa-check" aria-hidden="true"></i></span>
                                <div>
                                    <strong>Academic documents</strong>
                                    <span>Certified copies of previous qualifications &amp; transcripts</span>
                                </div>
                            </li>
                            <li>
                                <span class="check-icon"><i class="fa fa-check" aria-hidden="true"></i></span>
                                <div>
                                    <strong>English language evidence</strong>
                                    <span>IELTS, PTE, TOEFL or accepted equivalent (within 2 years)</span>
                                </div>
                            </li>
                            <li>
                                <span class="check-icon"><i class="fa fa-check" aria-hidden="true"></i></span>
                                <div>
                                    <strong>OSHC</strong>
                                    <span>Overseas Student Health Cover (if applicable)</span>
                                </div>
                            </li>
                            <li>
                                <span class="check-icon"><i class="fa fa-check" aria-hidden="true"></i></span>
                                <div>
                                    <strong>Other COEs</strong>
                                    <span>Any current or previous Confirmations of Enrolment</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="az-split-visual">
                        <img src="<?= BASE_URL ?>/public/imgs/Checklist.gif" class="img-fluid"
                            alt="Student admission document checklist" />
                    </div>
                </div>
            </div>
        </section>

        <!-- ===================== COURSES SNAPSHOT ===================== -->
        <section class="az-section" id="courses">
            <div class="container">
                <div class="section-head">
                    <span class="section-eyebrow">Programs</span>
                    <h2>Courses at a glance</h2>
                    <p class="section-lead">
                        Practical, nationally recognised qualifications. Contact us for current fees and intake dates.
                    </p>
                </div>

                <div class="course-snap-grid">
                    <div class="course-snap">
                        <span class="snap-tag">Construction</span>
                        <h3>Certificate III in Solid Plastering</h3>
                        <p>CPC31020 · Trade outcome in solid plastering &amp; rendering</p>
                    </div>
                    <div class="course-snap">
                        <span class="snap-tag">Construction</span>
                        <h3>Certificate III in Wall and Floor Tiling</h3>
                        <p>CPC31320 · Trade qualification for tiling work</p>
                    </div>
                    <div class="course-snap">
                        <span class="snap-tag">Engineering</span>
                        <h3>Certificate III in Engineering – Fabrication</h3>
                        <p>MEM31925 · Fabrication trade pathway</p>
                    </div>
                    <div class="course-snap">
                        <span class="snap-tag">Engineering</span>
                        <h3>Certificate IV in Engineering</h3>
                        <p>MEM40119 · Pathway course into higher engineering study</p>
                    </div>
                    <div class="course-snap">
                        <span class="snap-tag">Engineering</span>
                        <h3>Diploma of Engineering – Technical</h3>
                        <p>MEM50222 · Technical engineering qualification</p>
                    </div>
                    <div class="course-snap">
                        <span class="snap-tag">Engineering</span>
                        <h3>Graduate Diploma of Engineering</h3>
                        <p>MEM80125 · Advanced engineering pathway</p>
                    </div>
                </div>

                <div class="course-snap-foot">
                    <p>Full course details, duration and entry requirements are on each course page.</p>
                    <a href="<?= BASE_URL ?>/courses" class="btn-sit btn-primary-sit">View all courses →</a>
                </div>
            </div>
        </section>

        <!-- ===================== CONTACT / ENQUIRY ===================== -->
        <section class="az-section alt" id="contact">
            <div class="container">
                <div class="contact-banner">
                    <div class="contact-banner-text">
                        <span class="section-eyebrow">Agent support</span>
                        <h2>Fees, intakes &amp; enquiries</h2>
                        <p>
                            Current fee schedules and intake dates change periodically.
                            Contact our admissions team for the latest information or any agent-related query.
                        </p>
                        <div class="contact-methods">
                            <a href="tel:0383834447" class="method">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <div>
                                    <strong>Phone</strong>
                                    <span>03 8383 4447 · Mon–Fri 9am–5pm</span>
                                </div>
                            </a>
                            <a href="mailto:info@sit.vic.edu.au" class="method">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <div>
                                    <strong>Email</strong>
                                    <span>info@sit.vic.edu.au</span>
                                </div>
                            </a>
                            <a href="<?= BASE_URL ?>/contact#query" class="method">
                                <i class="fa fa-comments-o" aria-hidden="true"></i>
                                <div>
                                    <strong>Contact form</strong>
                                    <span>Select “Education Agent” on the form</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="contact-banner-cta">
                        <div class="cta-card">
                            <h3>Ready to talk?</h3>
                            <p>We’re happy to discuss partnership, courses and student applications.</p>
                            <a href="<?= BASE_URL ?>/contact#query" class="btn-sit btn-secondary-sit">Go to contact form
                                →</a>
                            <a href="mailto:info@sit.vic.edu.au" class="cta-mail">or email info@sit.vic.edu.au</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===================== BOTTOM CTA ===================== -->
        <section class="az-cta">
            <div class="container">
                <div class="cta-box">
                    <div class="shape sh1"></div>
                    <div class="shape sh3"></div>
                    <div class="cta-content">
                        <span class="badge"><span class="dot"></span>Partner with SIT</span>
                        <h3>Start your agent application</h3>
                        <p class="lead">
                            Join our network of education agents and help students take the next step
                            in their vocational training.
                        </p>
                        <div class="cta-actions">
                            <a href="#apply" class="btn-sit btn-secondary-sit">Apply now <span
                                    class="arrow">→</span></a>
                            <a href="<?= BASE_URL ?>/contact#query" class="btn-sit btn-secondary-outline-sit">Contact
                                us</a>
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