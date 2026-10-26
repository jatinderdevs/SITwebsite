<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>State Institute of Technology | SIT MELBOURNE | BRISBANE</title>
    <?php include_once('./includes/stylefiles.php') ?>

    <link rel="stylesheet" href="public/css/courses.css" />
</head>

<body>
    <!-- Hero -->
    <?php include_once('./includes/header.php') ?>
    <section class="sit-c-hero page-header">
        <div class="sit-c-hero-inner">
            <span class="sit-c-eyebrow">RTO 45205 · CRICOS 03948A</span>
            <h1>Our Courses</h1>
            <p>
                Industry-focused qualifications designed for real careers in Building,
                Engineering and Business.
            </p>
        </div>
    </section>

    <!-- Main -->
    <main class="sit-c-main">
        <div class="container">
            <!-- Filters -->
            <div class="sit-c-filters" role="tablist">
                <button class="sit-c-filter-btn is-active" data-filter="all">
                    All Courses
                </button>
                <button class="sit-c-filter-btn" data-filter="building">
                    Building & Construction
                </button>
                <button class="sit-c-filter-btn" data-filter="engineering">
                    Engineering
                </button>
                <button class="sit-c-filter-btn" data-filter="business">
                    Business & Management
                </button>
            </div>

            <!-- Grid -->
            <section class="sit-c-grid" id="coursesGrid">
                <!-- ===== Building ===== -->
                <article class="sit-c-card" data-category="building">
                    <!-- Image -->
                    <div class="sit-c-card-img">
                        <img src="https://www.sit.vic.edu.au/assets/img/building/plaster.webp"
                            alt="Certificate III in Solid Plastering" loading="lazy" />
                    </div>

                    <div class="sit-c-card-content">
                        <div class="sit-c-card-top">
                            <span class="sit-c-tag">Building & Construction</span>
                        </div>

                        <div class="sit-c-card-body">
                            <div class="sit-c-code">CPC31020 · CRICOS 119339G</div>
                            <h3 class="sit-c-title">Certificate III in Solid Plastering</h3>

                            <div class="sit-c-meta">
                                <div class="sit-c-meta-item">
                                    <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <circle cx="12" cy="12" r="10" />
                                        <path d="M12 6v6l4 2" />
                                    </svg>
                                    52 weeks
                                </div>
                            </div>
                        </div>

                        <div class="sit-c-card-footer">
                            <a href="certificate-iii-in-solid-plastering.php" class="sit-c-link">
                                View course
                                <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- (repeat the same structure for the other 9 cards) -->
                <!-- Just change: data-category, tag class (is-eng / is-biz), code, title, duration, href -->
            </section>

            <div class="sit-c-empty" id="emptyState">
                No courses found in this category.
            </div>
        </div>

        <?php include_once('./includes/footer.php') ?>
    </main>
    <?php include_once('./includes/scriptfiles.php') ?>
    <script>
    const filterBtns = document.querySelectorAll(".filter-btn");
    const cards = document.querySelectorAll(".course-card");
    const emptyState = document.getElementById("emptyState");

    filterBtns.forEach((btn) => {
        btn.addEventListener("click", () => {
            // Active state
            filterBtns.forEach((b) => b.classList.remove("active"));
            btn.classList.add("active");

            const filter = btn.dataset.filter;
            let visible = 0;

            cards.forEach((card) => {
                const match = filter === "all" || card.dataset.category === filter;
                card.hidden = !match;
                if (match) visible++;
            });

            emptyState.classList.toggle("show", visible === 0);
        });
    });
    </script>
    <script src="public/js/courses.js"></script>
</body>

</html>