<?php

/**
 * Courses Db file important to load courses
 */


$courses = require __DIR__ . '/data/dbcourses.php';
/**
 * SIT Site Configuration
 * Edit only the values below when moving between local / live
 */

$isLocal = in_array($_SERVER['HTTP_HOST'] ?? '', [
    'localhost',
    'localhost:80',
    'localhost:8080',
    '127.0.0.1'
], true);

// ===================== PATHS =====================
// Local folder name (change if your local folder is different)
if (!defined('BASE_PATH')) {
    define('BASE_PATH', $isLocal ? '/state-institute-of-college' : '');   // ← change '/sit' to your actual local folder name
}

// Full base URL
if (!defined('BASE_URL')) {
    define(
        'BASE_URL',
        $isLocal
            ? 'http://localhost' . BASE_PATH
            : 'https://phpstack-1679659-6758869.cloudwaysapps.com'           // ← change to https://sit.vic.edu.au once on actual domainif live domain is different
    );
}

// Absolute filesystem path to project root
if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', __DIR__);
}

// Optional: load env.php if it exists
$envFile = __DIR__ . '/env.php';
if (file_exists($envFile)) {
    $env = require $envFile;
    if (is_array($env)) {
        foreach ($env as $key => $value) {
            if (!defined($key)) {
                define($key, $value);
            }
        }
    }
}