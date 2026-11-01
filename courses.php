<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Our Courses | State Institute of Training</title>
    <?php include_once('./includes/stylefiles.php') ?>
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/courses.css" />
</head>

<body>
    <?php include_once('./includes/header.php') ?>

    <!-- Hero -->
    <section class=" page-header">
        <div class="page-hero-bg"><img
                src="https://images.pexels.com/photos/8499548/pexels-photo-8499548.jpeg?_gl=1*191jwxw*_ga*NTcwNjI5OTg5LjE3OTMxNDQyOTI.*_ga_8JE65Q40S6*czE3OTMxNDQyOTEkbzEkZzEkdDE3OTMxNDQzMjckajI0JGwwJGgw"
                alt=""></div>

        <div class=" page-header-inner">
            <nav class="crumb" aria-label="Breadcrumb">
                <a href="index.php">Home</a>
                <span class="sep">/</span>
                <span class="crumbactive">About Us</span>
            </nav>

            <h1>our<br>courses.</h1>

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
                <button class="sit-c-filter-btn is-active" data-filter="all">All Courses</button>
                <button class="sit-c-filter-btn" data-filter="building">Building & Construction</button>
                <button class="sit-c-filter-btn" data-filter="engineering">Engineering</button>
                <button class="sit-c-filter-btn" data-filter="business">Business & Management</button>
            </div>

            <!-- Grid -->
            <section class="sit-c-grid" id="coursesGrid">
                <?php
                // Load courses data
                $courses = require __DIR__ . '/data/dbcourses.php';

                // Sort by order
                uasort($courses, function ($a, $b) {
                    return ($a['order'] ?? 99) <=> ($b['order'] ?? 99);
                });
               
                // Category mapping for data-filter + URL
                $categoryMap = [
                    'Building & Construction' => 'building',
                    'Engineering'             => 'engineering',
                    'Business & Management'   => 'business',
                ];

                // Category slug for clean URL
                $categoryUrlMap = [
                    'Building & Construction' => 'building-and-construction',
                    'Engineering'             => 'engineering',
                    'Business & Management'   => 'business-and-management',
                ];

                foreach ($courses as $key => $course) :
                    // Skip inactive courses
                    if (($course['status'] ?? 'active') !== 'active') continue;

                    $catKey     = $categoryMap[$course['category']] ?? 'other';
                    $catUrl     = $categoryUrlMap[$course['category']] ?? 'Courses';
                    $courseUrl  = BASE_URL . '/' . $catUrl . '/' . $course['slug'];
                     $pillClassMap = [
                    'Engineering'           => 'sit-bento-pill-eng',
                    'Business & Management' => 'sit-bento-pill-biz',
                ];
                $pillMod   = $pillClassMap[$course['category']] ?? '';
                $pillClass = trim('sit-bento-pill ' . $pillMod);
                ?>
                <article class="sit-c-card" data-category="<?= htmlspecialchars($catKey) ?>">
                    <!-- Image -->
                    <div class="sit-c-card-img">
                        <img src="https://www.sit.vic.edu.au/assets/img/building/certiv.webp" alt="">
                        <!-- <img src="<?= htmlspecialchars($course['thumbnail'] ?? 'https://www.sit.vic.edu.au/assets/img/building/certiv.webp') ?>"
                            alt="<?= htmlspecialchars($course['code'] . ' ' . $course['title']) ?>" loading="lazy" /> -->
                    </div>

                    <div class="sit-c-card-content">
                        <div class="sit-c-card-top">
                            <span
                                class="<?= htmlspecialchars($pillClass) ?>"><?= htmlspecialchars($course['category']) ?></span>
                        </div>

                        <div class="sit-c-card-body">
                            <div class="sit-c-code">
                                <?= htmlspecialchars($course['code']) ?> · CRICOS
                                <?= htmlspecialchars($course['cricos']) ?>
                            </div>
                            <h3 class="sit-c-title"><?= htmlspecialchars($course['title']) ?></h3>

                            <div class="sit-c-meta">
                                <div class="sit-c-meta-item">
                                    <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <circle cx="12" cy="12" r="10" />
                                        <path d="M12 6v6l4 2" />
                                    </svg>
                                    <?= (int)$course['duration_weeks'] ?> weeks
                                </div>
                            </div>
                        </div>

                        <div class="sit-c-card-footer">
                            <a href="<?= htmlspecialchars($courseUrl) ?>" class="sit-c-link">
                                View course
                                <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
                <?php endforeach; ?>
            </section>

            <div class="sit-c-empty" id="emptyState">
                No courses found in this category.
            </div>
        </div>

        <?php include_once('./includes/footer.php') ?>
    </main>

    <?php include_once('./includes/scriptfiles.php') ?>

    <script>
    // Filter functionality
    const filterBtns = document.querySelectorAll(".sit-c-filter-btn");
    const cards = document.querySelectorAll(".sit-c-card");
    const emptyState = document.getElementById("emptyState");

    filterBtns.forEach((btn) => {
        btn.addEventListener("click", () => {
            // Active state
            filterBtns.forEach((b) => b.classList.remove("is-active"));
            btn.classList.add("is-active");

            const filter = btn.dataset.filter;
            let visible = 0;

            cards.forEach((card) => {
                const match = filter === "all" || card.dataset.category === filter;
                card.style.display = match ? "" : "none";
                if (match) visible++;
            });

            emptyState.style.display = visible === 0 ? "block" : "none";
        });
    });
    </script>
</body>

</html>