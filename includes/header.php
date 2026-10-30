<header class="site-header">
    <div class="container-stop">
        <nav class="navbar navbar-expand-lg navbar-light sticky-top">
            <div class="container-fluid p-0">
                <!-- LEFT: LOGO -->
                <a class="navbar-brand" href="<?= BASE_URL ?>/">
                    <img src="<?= BASE_URL ?>/img/logo.png" class="img-fluid" width="130"
                        alt="State Institute of Training" />
                </a>

                <!-- Mobile toggle -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sitNavbar"
                    aria-controls="sitNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- COLLAPSIBLE CONTENT -->
                <div class="collapse navbar-collapse" id="sitNavbar">
                    <!-- CENTER: NAV LINKS -->
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_URL ?>/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_URL ?>/courses.php">Courses</a>
                        </li>

                        <!-- Student Support MEGA MENU -->
                        <li class="nav-item dropdown mega-dropdown">
                            <a class="nav-link dropdown-toggle" href="<?= BASE_URL ?>/student-support.php"
                                id="studentSupportDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Student Support
                            </a>

                            <div class="dropdown-menu mega-menu" aria-labelledby="studentSupportDropdown">
                                <div class="row">
                                    <!-- Col 1: Support sections -->
                                    <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
                                        <h6>Student support</h6>
                                        <a href="<?= BASE_URL ?>/student-support.php#forms" class="mega-menu-item">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            <div>
                                                <span class="title">Forms & downloads</span>
                                                <span class="desc">Application, refund, complaints</span>
                                            </div>
                                        </a>
                                        <a href="<?= BASE_URL ?>/student-support.php#policies" class="mega-menu-item">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            <div>
                                                <span class="title">Policies</span>
                                                <span class="desc">Attendance, fees, transfers, RPL</span>
                                            </div>
                                        </a>
                                        <a href="<?= BASE_URL ?>/student-support.php#orientation"
                                            class="mega-menu-item">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            <div>
                                                <span class="title">Orientation</span>
                                                <span class="desc">What to expect when you start</span>
                                            </div>
                                        </a>
                                        <a href="<?= BASE_URL ?>/student-support.php#support-services"
                                            class="mega-menu-item">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            <div>
                                                <span class="title">Support & helplines</span>
                                                <span class="desc">Wellbeing and external services</span>
                                            </div>
                                        </a>
                                    </div>

                                    <!-- Col 2: Applying & studying -->
                                    <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
                                        <h6>Applying & studying</h6>
                                        <a href="<?= BASE_URL ?>/contact.php#maps" class="mega-menu-item">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            <div>
                                                <span class="title">Our campuses</span>
                                                <span class="desc">Melbourne & Brisbane</span>
                                            </div>
                                        </a>
                                        <a href="https://www.usi.gov.au/" class="mega-menu-item" target="_blank"
                                            rel="noopener">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            <div>
                                                <span class="title">USI number</span>
                                                <span class="desc">Create or find your USI</span>
                                            </div>
                                        </a>
                                        <a href="<?= BASE_URL ?>/student-support.php#policies" class="mega-menu-item">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            <div>
                                                <span class="title">Fees & refunds</span>
                                                <span class="desc">Fees, charges and refund policy</span>
                                            </div>
                                        </a>
                                        <a href="<?= BASE_URL ?>/student-support.php#policies" class="mega-menu-item">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            <div>
                                                <span class="title">RPL & credit transfer</span>
                                                <span class="desc">Recognition of prior learning</span>
                                            </div>
                                        </a>
                                    </div>

                                    <!-- Col 3: Courses & quick links -->
                                    <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
                                        <h6>Courses</h6>
                                        <a href="<?= BASE_URL ?>/courses.php" class="mega-menu-item">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            <div>
                                                <span class="title">Building & Construction</span>
                                                <span class="desc">Plastering, tiling, building</span>
                                            </div>
                                        </a>
                                        <a href="<?= BASE_URL ?>/courses.php" class="mega-menu-item">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            <div>
                                                <span class="title">Engineering</span>
                                                <span class="desc">Fabrication to graduate diploma</span>
                                            </div>
                                        </a>
                                        <a href="<?= BASE_URL ?>/courses.php" class="mega-menu-item">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            <div>
                                                <span class="title">Business & Management</span>
                                                <span class="desc">Project management & more</span>
                                            </div>
                                        </a>
                                        <a href="<?= BASE_URL ?>/courses.php" class="mega-menu-item">
                                            <i class="fa fa-link" aria-hidden="true"></i>
                                            <div>
                                                <span class="title">View all courses →</span>
                                            </div>
                                        </a>

                                    </div>

                                    <!-- Col 4: Promo + contact -->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="p-3 promobanner text-white">
                                            <span class="badge badge-warning mb-2"
                                                style="background: var(--lime-green); color: var(--primary-blue);">
                                                2026 Intake Open
                                            </span>
                                            <h5 style="font-family: var(--font-heading)" class="mb-1">
                                                Need Course Advice?
                                            </h5>
                                            <p>
                                                Talk to our career advisors today to choose the right qualification.
                                            </p>
                                            <a href="<?= BASE_URL ?>/contact.php"
                                                class="btn btn-sm btn-light font-weight-bold btn-block"
                                                style="color: var(--primary-blue)">
                                                <i class="fa fa-phone mr-1"></i> Book Free Consultation
                                            </a>
                                        </div>
                                        <div class="contact_head">
                                            <a href="tel:+61383834447" class="mega-menu-item">
                                                <i class="fa fa-phone-square" aria-hidden="true"></i>
                                                <div><span class="title">03 8383 4447</span></div>
                                            </a>
                                            <a href="mailto:info@sit.vic.edu.au" class="mega-menu-item">
                                                <i class="fa fa-envelope-open-o" aria-hidden="true"></i>
                                                <div><span class="title">info@sit.vic.edu.au</span></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_URL ?>/about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_URL ?>/agent-zone.php">Agents Zone</a>
                        </li>
                    </ul>

                    <!-- RIGHT: BUTTONS -->
                    <div class="navbar-buttons d-flex align-items-center">
                        <a href="<?= BASE_URL ?>/contact.php" class="btn btn_custom btn_custom_blue">Apply Online</a>
                        <a href="<?= BASE_URL ?>/contact.php" class="ml-2 btn btn_custom btn_custom_highlight">Contact
                            us</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>