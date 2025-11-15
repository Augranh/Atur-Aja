<?php
// Vercel serverless function entry point
$request_uri = $_SERVER['REQUEST_URI'];
$script_name = $_SERVER['SCRIPT_NAME'];

// Parse the request path
$path = parse_url($request_uri, PHP_URL_PATH);

// Route to appropriate file
if ($path === '/' || $path === '') {
    require __DIR__ . '/../index.php';
} elseif (preg_match('#^/pages/dashboard/?(.*)$#', $path, $matches)) {
    $page = $matches[1] ?: 'index';
    $file = __DIR__ . '/../pages/dashboard/' . ($page === 'index' ? 'index.php' : $page . '.php');
    if (file_exists($file)) {
        require $file;
    } else {
        require __DIR__ . '/../pages/dashboard/index.php';
    }
} elseif (preg_match('#^/pages/auth/(login|signup)$#', $path, $matches)) {
    $file = __DIR__ . '/../pages/auth/' . $matches[1] . '.php';
    if (file_exists($file)) {
        require $file;
    } else {
        http_response_code(404);
        echo '404 - Page Not Found';
    }
} else {
    // Default to main index
    require __DIR__ . '/../index.php';
}
?>