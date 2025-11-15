<?php
// Vercel serverless function entry point
// Redirect to main index.php
require __DIR__ . '/../index.php';
require __DIR__ . '/../includes/navigation.php';
require __DIR__ . '/../includes/components/dashboard/sidebar.php';
require __DIR__ . '/../includes/components/dashboard/header.php';
require __DIR__ . '/../includes/pages/dashboard/index.php';
require __DIR__ . '/../includes/pages/auth/login.php';
require __DIR__ . '/../includes/pages/auth/signup.php';
?>