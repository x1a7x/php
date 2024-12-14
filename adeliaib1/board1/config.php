<?php

declare(strict_types=1);

// config.php - Board-specific configuration

$board_name = basename(__DIR__); // e.g., "board1"
$db_file = __DIR__ . '/database.sqlite';
$upload_dir = __DIR__ . '/uploads/';
$threads_dir = __DIR__ . '/threads/';

$posts_per_page = 20; // Can be changed as needed

$allowed_exts = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'mp4'];

// Path to store a global CSRF token
$csrf_file = __DIR__ . '/csrf_secret.txt';

// Admin password (plain text for now)
$admin_password = 'a888'; // Change this to a secure password
