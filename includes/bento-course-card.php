<?php
/**
 * includes/bento-course-card.php
 *
 * Renders a single course card for the sit-bento grid.
 *
 * Required before include:
 *   $courseKey  (string)  – key from data/dbcourses.php  e.g. 'cpc31020'
 *   $cardStyle  (string)  – 'feature' for large card, '' or anything else for default
 *
 * Optional (if not already loaded):
 *   $courses    – full courses array (will be loaded if missing)
 */

if (!isset($courses) || !is_array($courses)) {
    $courses = require ROOT_PATH . '/data/dbcourses.php';
}

if (empty($courseKey) || !isset($courses[$courseKey])) {
    return; // silently skip invalid / missing course
}

$course = $courses[$courseKey];

// Skip inactive
if (($course['status'] ?? 'active') !== 'active') {
    return;
}

// Category → URL slug + pill modifier
$categoryUrlMap = [
    'Building & Construction' => 'building-and-construction',
    'Engineering'             => 'engineering',
    'Business & Management'   => 'business-and-management',
];

$pillClassMap = [
    'Engineering'           => 'sit-bento-pill-eng',
    'Business & Management' => 'sit-bento-pill-biz',
];

$catUrl     = $categoryUrlMap[$course['category']] ?? 'Courses';
$courseUrl  = BASE_URL . '/' . $catUrl . '/' . $course['slug'];
$pillMod    = $pillClassMap[$course['category']] ?? '';
$pillClass  = trim('sit-bento-pill ' . $pillMod);

$isFeature  = ($cardStyle ?? '') === 'feature';
$cardClasses = 'sit-bento-card' . ($isFeature ? ' sit-bento-feature' : '');

// Locations display
$locations = $course['locations'] ?? [];
$locText   = !empty($locations) ? implode(' + ', $locations) : '';
?>
<article class="<?= htmlspecialchars($cardClasses) ?>">
    <div class="sit-bento-image">
        <img src="<?= BASE_URL ?>/public/imgs/courses/<?= htmlspecialchars($course['thumbnail'])?>"
            alt="<?= htmlspecialchars($course['code'] . ' ' . $course['title']) ?>" loading="lazy" />
    </div>
    <div class="sit-bento-body">
        <span class="<?= htmlspecialchars($pillClass) ?>"><?= htmlspecialchars($course['category']) ?></span>
        <h3><?= htmlspecialchars($course['title']) ?></h3>

        <?php if ($isFeature && !empty($course['short_desc'])): ?>
        <p><?= htmlspecialchars($course['short_desc']) ?></p>
        <?php endif; ?>

        <div class="sit-bento-meta">
            <span><?= htmlspecialchars($course['code']) ?></span>
            <span><?= (int)$course['duration_weeks'] ?> weeks</span>
            <?php if ($locText): ?>
            <span><?= htmlspecialchars($locText) ?></span>
            <?php endif; ?>
        </div>

        <a href="<?= htmlspecialchars($courseUrl) ?>" class="sit-bento-link">View course <span>→</span></a>
    </div>
</article>