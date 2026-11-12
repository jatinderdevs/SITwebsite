<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us | State Institute of Training | SIT Melbourne & Brisbane</title>
    <meta name="description"
        content="Get in touch with State Institute of Training. Contact our Melbourne or Brisbane campus for course enquiries, applications, student support or agent queries." />

    <?php include_once('./includes/stylefiles.php') ?>
    <link rel="stylesheet" href="public/css/contact.css" />
</head>

<body>
    <main>
        <?php include_once('./includes/header.php') ?>

        <!-- ===================== PAGE HEADER ===================== -->
        <section class="page-header">
            <div class="page-hero-bg"><img
                    src="https://images.pexels.com/photos/8499548/pexels-photo-8499548.jpeg?_gl=1*191jwxw*_ga*NTcwNjI5OTg5LjE3OTMxNDQyOTI.*_ga_8JE65Q40S6*czE3OTMxNDQyOTEkbzEkZzEkdDE3OTMxNDQzMjckajI0JGwwJGgw"
                    alt=""></div>

            <div class="page-header-inner">
                <nav class="crumb" aria-label="Breadcrumb">
                    <a href="index.php">Home</a>
                    <span class="sep">/</span>
                    <span class="crumbactive">Contact Us</span>
                </nav>
                <span class="sit-c-eyebrow">Contact</span>
                <h1>Get in touch with our team</h1>
                <p>
                    Questions about courses, enrolments, campuses or agent partnerships?
                    We’re here to help — Melbourne and Brisbane campuses.
                </p>
            </div>
        </section>

        <!-- ===================== CONTACT SECTION ===================== -->
        <section class="contact-section">
            <div class="container">
                <div class="contact-grid">

                    <!-- LEFT: Info + Campuses -->
                    <div class="contact-info">
                        <span class="contact-eyebrow">CONTACT US</span>
                        <h2>We’re ready when you are</h2>
                        <p class="contact-lead">
                            Fill out the form and our team will get back to you within 1–2 business days.
                            Prefer to talk? Call or visit us at either campus.
                        </p>

                        <div class="info-cards">
                            <div class="info-card">
                                <div class="info-icon">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <h4>Call Centre</h4>
                                    <a href="tel:0383834447">03 8383 4447</a>
                                    <span class="info-meta">Mon – Fri · 9:00 am – 5:00 pm</span>
                                </div>
                            </div>

                            <div class="info-card">
                                <div class="info-icon">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <h4>Email</h4>
                                    <a href="mailto:info@sit.vic.edu.au">info@sit.vic.edu.au</a>
                                    <span class="info-meta">We reply within 1–2 business days</span>
                                </div>
                            </div>

                            <div class="info-card">
                                <div class="info-icon">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <h4>Working Hours</h4>
                                    <span>Monday – Friday</span>
                                    <span class="info-meta">9:00 am – 5:00 pm (AEST)</span>
                                </div>
                            </div>
                        </div>

                        <!-- Campus cards -->
                        <div class="campus-cards">
                            <div class="campus-card">
                                <div class="campus-badge">Melbourne</div>
                                <h3>Melbourne Campus</h3>
                                <address>
                                    Level 5, 255 William Street<br />
                                    Melbourne VIC 3000
                                </address>
                                <a href="tel:0383834447" class="campus-link">
                                    <i class="fa fa-phone" aria-hidden="true"></i> 03 8383 4447
                                </a>
                                <a href="mailto:info@sit.vic.edu.au" class="campus-link">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i> info@sit.vic.edu.au
                                </a>
                            </div>

                            <div class="campus-card">
                                <div class="campus-badge brisbane">Brisbane</div>
                                <h3>Brisbane Campus</h3>
                                <address>
                                    Level 3, 300 Adelaide Street<br />
                                    Brisbane QLD 4000
                                </address>
                                <a href="tel:0383834447" class="campus-link">
                                    <i class="fa fa-phone" aria-hidden="true"></i> 03 8383 4447
                                </a>
                                <a href="mailto:info@sit.vic.edu.au" class="campus-link">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i> info@sit.vic.edu.au
                                </a>
                            </div>

                            <div class="campus-card">
                                <div class="campus-badge">Pakenham</div>
                                <h3>Pakenham Campus</h3>
                                <address>
                                    Level 1, 29 James Street<br />
                                    Pakenham VIC 3810
                                </address>
                                <a href="tel:0383834447" class="campus-link">
                                    <i class="fa fa-phone" aria-hidden="true"></i> 03 8383 4447
                                </a>
                                <a href="mailto:info@sit.vic.edu.au" class="campus-link">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i> info@sit.vic.edu.au
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- RIGHT: Form -->
                    <div class="contact-form-wrap">
                        <form class="contact-form" id="contactForm" action="#" method="post" novalidate>
                            <div class="form-header">
                                <h3>Send us a message</h3>
                                <p>All fields marked with * are required.</p>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="firstName">Full Name <span class="req">*</span></label>
                                    <input type="text" id="fullName" name="fullName" placeholder="Enter full name"
                                        required />
                                </div>
                                <div class="form-group">
                                    <label for="lastName">Student ID Number (optional) </label>
                                    <input type="text" id="studentid" name="studentid"
                                        placeholder="Enter student id number" />
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="email">Email Address <span class="req">*</span></label>
                                    <input type="email" id="email" name="email" placeholder="Enter your email"
                                        required />
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <div class="phone-input">
                                        <span class="phone-prefix">+61</span>
                                        <input type="tel" id="phone" name="phone" placeholder="Enter phone number" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="enquiryType">I am a <span class="req">*</span></label>
                                <select id="enquiryType" name="enquiryType" required>
                                    <option value="" disabled selected>Select one</option>
                                    <option value="student">Student / Prospective Student</option>
                                    <option value="agent">Education Agent</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>

                            <!-- <div class="form-group">
                                <label for="reason">Reason for contact <span class="req">*</span></label>
                                <select id="reason" name="reason" required>
                                    <option value="" disabled selected>Select reason</option>
                                    <option value="query">General Query / Question</option>
                                    <option value="feedback">Feedback</option>
                                    <option value="complaint">Complaint</option>
                                    <option value="application">Course Application / Enrolment</option>
                                    <option value="other">Other</option>
                                </select>
                            </div> -->

                            <div class="form-group">
                                <label for="message">Message <span class="req">*</span></label>
                                <textarea id="message" name="message" rows="5" placeholder="Tell us how we can help..."
                                    required></textarea>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" id="privacy" name="privacy" required />
                                <label for="privacy">
                                    I agree to the <a href="#">Privacy Policy</a> and consent to State Institute of
                                    Training contacting me about my enquiry.
                                </label>
                            </div>

                            <button type="submit" class="btn-sit btn-primary-sit btn-submit">
                                Submit Enquiry <span class="arrow">→</span>
                            </button>

                            <p class="form-note">
                                RTO No. 45205 · CRICOS 03948A · We respect your privacy.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===================== CAMPUS MAPS ===================== -->
        <section class="maps-section">
            <div class="container">
                <div class="maps-header">
                    <span class="contact-eyebrow">OUR LOCATIONS</span>
                    <h2>Find our campuses</h2>
                    <p>Visit us in Melbourne, Pakenham or Brisbane — all campuses are easy to reach by public transport.
                    </p>
                </div>

                <!-- Campus switcher -->
                <div class="map-switcher" role="tablist" aria-label="Select campus">
                    <button type="button" class="map-tab active" data-campus="melbourne" role="tab"
                        aria-selected="true">
                        <span class="map-tab-dot"></span>
                        Melbourne
                    </button>
                    <button type="button" class="map-tab" data-campus="pakenham" role="tab" aria-selected="false">
                        <span class="map-tab-dot"></span>
                        Pakenham
                    </button>
                    <button type="button" class="map-tab" data-campus="brisbane" role="tab" aria-selected="false">
                        <span class="map-tab-dot brisbane"></span>
                        Brisbane
                    </button>
                </div>

                <div class="map-stage">
                    <!-- Map iframe container -->
                    <div class="map-frame-wrap">
                        <div class="map-frame" id="mapFrame">
                            <!-- Melbourne embed (default) -->
                            <iframe id="campusMap" title="State Institute of Training – Melbourne Campus"
                                src="https://www.google.com/maps?q=Level+5,+255+William+Street,+Melbourne+VIC+3000&output=embed&z=16"
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
                        </div>

                        <!-- Floating location card -->
                        <div class="map-float-card" id="mapFloatCard">
                            <div class="float-badge" id="floatBadge">Melbourne</div>
                            <h3 id="floatTitle">Melbourne Campus</h3>
                            <address id="floatAddress">
                                Level 5, 255 William Street<br />
                                Melbourne VIC 3000
                            </address>
                            <div class="float-actions">
                                <a href="https://www.google.com/maps/dir/?api=1&destination=Level+5,+255+William+Street,+Melbourne+VIC+3000"
                                    target="_blank" rel="noopener" class="btn-sit btn-primary-sit float-btn">
                                    Get directions
                                </a>
                                <a href="tel:0383834447" class="float-call">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===================== FAQ ACCORDION ===================== -->
        <section class="faq-section">
            <div class="container">
                <div class="faq-header">
                    <span class="contact-eyebrow">FAQs</span>
                    <h2>Frequently asked questions</h2>
                    <p>Quick answers about contacting us, campus visits and enquiries.</p>
                </div>

                <div class="faq-list" id="faqList">
                    <div class="faq-item active">
                        <button type="button" class="faq-question" aria-expanded="true">
                            <span>How quickly will you respond to my enquiry?</span>
                            <span class="faq-icon" aria-hidden="true"></span>
                        </button>
                        <div class="faq-answer">
                            <p>We aim to reply to all enquiries within 1–2 business days. For urgent matters, please
                                call us on <a href="tel:0383834447">03 8383 4447</a> during office hours (Mon–Fri,
                                9am–5pm AEST).</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button type="button" class="faq-question" aria-expanded="false">
                            <span>Can I visit a campus before enrolling?</span>
                            <span class="faq-icon" aria-hidden="true"></span>
                        </button>
                        <div class="faq-answer">
                            <p>Yes. You’re welcome to visit our Melbourne, Pakenham or Brisbane campus. We recommend
                                booking a time so a course advisor can show you around the workshops and answer your
                                questions. Use the form above or call us to arrange a visit.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button type="button" class="faq-question" aria-expanded="false">
                            <span>How do I make a complaint or give feedback?</span>
                            <span class="faq-icon" aria-hidden="true"></span>
                        </button>
                        <div class="faq-answer">
                            <p>Select “Complaint” or “Feedback” as the reason on the contact form. All complaints are
                                handled in line with our Complaints &amp; Appeals Policy. You can also email <a
                                    href="mailto:info@sit.vic.edu.au">info@sit.vic.edu.au</a> or speak with Student
                                Support at either campus.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button type="button" class="faq-question" aria-expanded="false">
                            <span>I’m an education agent — how do I get in touch?</span>
                            <span class="faq-icon" aria-hidden="true"></span>
                        </button>
                        <div class="faq-answer">
                            <p>Select “Education Agent” on the form and let us know how we can help with partnership
                                information, application forms or student support. You can also visit our Agents Zone or
                                email us directly at <a href="mailto:info@sit.vic.edu.au">info@sit.vic.edu.au</a>.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button type="button" class="faq-question" aria-expanded="false">
                            <span>What are the campus opening hours?</span>
                            <span class="faq-icon" aria-hidden="true"></span>
                        </button>
                        <div class="faq-answer">
                            <p>Both campuses operate Monday to Friday, 9:00 am – 5:00 pm (AEST). Reception and student
                                support are available during these hours. Class times may vary by course — check your
                                timetable or ask Student Support for details.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button type="button" class="faq-question" aria-expanded="false">
                            <span>Do you offer support for international students?</span>
                            <span class="faq-icon" aria-hidden="true"></span>
                        </button>
                        <div class="faq-answer">
                            <p>Yes. We support both domestic and international students. Our team can help with course
                                advice, enrolment, orientation and ongoing student support. Select the relevant option
                                on the form or call us for personalised guidance.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===================== QUICK HELP ===================== -->
        <section class="quick-help">
            <div class="container">
                <div class="quick-help-inner">
                    <div class="qh-item">
                        <div class="qh-icon"><i class="fa fa-book" aria-hidden="true"></i></div>
                        <h4>Browse Courses</h4>
                        <p>Explore nationally recognised qualifications in construction, engineering and business.</p>
                        <a href="<?= BASE_URL ?>/courses.php" class="qh-link">View all courses <span>→</span></a>
                    </div>
                    <div class="qh-item">
                        <div class="qh-icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                        <h4>Student Support</h4>
                        <p>Need help with enrolment, USI, fees or campus life? Our team is ready to assist.</p>
                        <a href="<?= BASE_URL ?>/student-support" class="qh-link">Student support <span>→</span></a>
                    </div>
                    <div class="qh-item">
                        <div class="qh-icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                        <h4>Agents Zone</h4>
                        <p>Education agents — access resources, application forms and partnership information.</p>
                        <a href="<?= BASE_URL ?>/agent-zone" class="qh-link">Agents zone <span>→</span></a>
                    </div>
                </div>
            </div>
        </section>

        <?php include_once('./includes/footer.php') ?>
    </main>

    <?php include_once('./includes/scriptfiles.php') ?>

    <script>
    // ----- Contact form feedback -----
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const form = this;
        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }
        const btn = form.querySelector('.btn-submit');
        const original = btn.innerHTML;
        btn.innerHTML = 'Sending…';
        btn.disabled = true;
        setTimeout(function() {
            btn.innerHTML = 'Message sent ✓';
            btn.style.background = 'var(--lime-green)';
            btn.style.color = 'var(--primary-blue)';
            btn.style.borderColor = 'var(--lime-green)';
            form.reset();
            setTimeout(function() {
                btn.innerHTML = original;
                btn.disabled = false;
                btn.style.background = '';
                btn.style.color = '';
                btn.style.borderColor = '';
            }, 2500);
        }, 900);
    });

    // ----- Campus map switcher -----
    const campusData = {
        melbourne: {
            title: 'Melbourne Campus',
            badge: 'Melbourne',
            address: 'Level 5, 255 William Street<br />Melbourne VIC 3000',
            mapSrc: 'https://www.google.com/maps?q=Level+5,+255+William+Street,+Melbourne+VIC+3000&output=embed&z=16',
            directions: 'https://www.google.com/maps/dir/?api=1&destination=Level+5,+255+William+Street,+Melbourne+VIC+3000',
            mapTitle: 'State Institute of Training – Melbourne Campus'
        },
        pakenham: {
            title: 'Pakenham Campus',
            badge: 'Pakenham',
            address: 'Level 1, 29 James Street<br />Pakenham VIC 3810',
            mapSrc: 'https://www.google.com/maps?q=29+James+Street,+Pakenham+VIC+3810&output=embed&z=16',
            directions: 'https://www.google.com/maps/dir/?api=1&destination=29+James+Street,+Pakenham+VIC+3810',
            mapTitle: 'State Institute of Training – Pakenham Campus'
        },
        brisbane: {
            title: 'Brisbane Campus',
            badge: 'Brisbane',
            address: 'Level 3, 300 Adelaide Street<br />Brisbane QLD 4000',
            mapSrc: 'https://www.google.com/maps?q=Level+3,+300+Adelaide+Street,+Brisbane+QLD+4000&output=embed&z=16',
            directions: 'https://www.google.com/maps/dir/?api=1&destination=Level+3,+300+Adelaide+Street,+Brisbane+QLD+4000',
            mapTitle: 'State Institute of Training – Brisbane Campus'
        }
    };

    const mapIframe = document.getElementById('campusMap');
    const floatBadge = document.getElementById('floatBadge');
    const floatTitle = document.getElementById('floatTitle');
    const floatAddress = document.getElementById('floatAddress');
    const floatCard = document.getElementById('mapFloatCard');
    const floatDirBtn = floatCard.querySelector('.float-btn');

    document.querySelectorAll('.map-tab').forEach(function(tab) {
        tab.addEventListener('click', function() {
            const campus = this.getAttribute('data-campus');
            const data = campusData[campus];
            if (!data) return;

            // Update tabs
            document.querySelectorAll('.map-tab').forEach(function(t) {
                t.classList.remove('active');
                t.setAttribute('aria-selected', 'false');
            });
            this.classList.add('active');
            this.setAttribute('aria-selected', 'true');

            // Fade map slightly while swapping
            mapIframe.style.opacity = '0.4';
            setTimeout(function() {
                mapIframe.src = data.mapSrc;
                mapIframe.title = data.mapTitle;
                mapIframe.style.opacity = '1';
            }, 180);

            // Update floating card
            floatBadge.textContent = data.badge;
            floatBadge.classList.toggle('brisbane', campus === 'brisbane');
            floatTitle.textContent = data.title;
            floatAddress.innerHTML = data.address;
            floatDirBtn.href = data.directions;
        });
    });

    // ----- FAQ accordion -----
    document.querySelectorAll('.faq-question').forEach(function(btn) {
        btn.addEventListener('click', function() {
            const item = this.closest('.faq-item');
            const isOpen = item.classList.contains('active');

            // Close all
            document.querySelectorAll('.faq-item').forEach(function(el) {
                el.classList.remove('active');
                el.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
            });

            // Open clicked if it was closed
            if (!isOpen) {
                item.classList.add('active');
                this.setAttribute('aria-expanded', 'true');
            }
        });
    });
    </script>
</body>

</html>