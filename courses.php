<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php require_once __DIR__ . '/config.php'; ?>

    <title>Our Courses | Building, Engineering & Business | State Institute of Training</title>
    <meta name="description"
        content="Browse nationally recognised courses in Building & Construction, Engineering and Business at State Institute of Training. Campuses in Melbourne and Brisbane. RTO 45205 · CRICOS 03948A." />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="<?= BASE_URL ?>/courses" />

    <!-- Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="State Institute of Training" />
    <meta property="og:title" content="Our Courses | Building, Engineering & Business | State Institute of Training" />
    <meta property="og:description"
        content="Browse nationally recognised courses in Building & Construction, Engineering and Business at State Institute of Training. Campuses in Melbourne and Brisbane." />
    <meta property="og:url" content="<?= BASE_URL ?>/courses" />
    <meta property="og:image" content="<?= BASE_URL ?>/img/logo.png" />
    <meta property="og:locale" content="en_AU" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Our Courses | Building, Engineering & Business | State Institute of Training" />
    <meta name="twitter:description"
        content="Browse nationally recognised courses in Building & Construction, Engineering and Business at State Institute of Training." />
    <meta name="twitter:image" content="<?= BASE_URL ?>/img/logo.png" />

    <?php include_once('./includes/stylefiles.php') ?>
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/courses.css" />
</head>

<body>
    <?php include_once('./includes/header.php') ?>

    <!-- Hero -->
    <section class="page-header">
        <div class="page-hero-bg">
            <img src="<?= BASE_URL ?>/public/imgs/page-header/courses.webp"
                alt="Students training at State Institute of Training" />
        </div>

        <div class="page-header-inner">
            <nav class="crumb" aria-label="Breadcrumb">
                <a href="<?= BASE_URL ?>/">Home</a>
                <span class="sep">/</span>
                <span class="crumbactive">Courses</span>
            </nav>

            <h1>our<br>courses</h1>

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

                    $catKey = $categoryMap[$course['category']] ?? 'other';
                    $catUrl = $categoryUrlMap[$course['category']] ?? 'courses';
                    $courseUrl = BASE_URL . '/' . $catUrl . '/' . $course['slug'];

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
                        <img src="<?= BASE_URL ?>/public/imgs/courses/<?= htmlspecialchars($course['thumbnail']) ?>"
                            alt="<?= htmlspecialchars($course['code'] . ' ' . $course['title']) ?>" loading="lazy" />
                    </div>

                    <div class="sit-c-card-content">
                        <div class="sit-c-card-top">
                            <span class="<?= htmlspecialchars($pillClass) ?>">
                                <?= htmlspecialchars($course['category']) ?>
                            </span>
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