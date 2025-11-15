<?php
    include('includes/header.php');
    include('includes/navigation.php');
?>

<?php
    $request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    switch ($request_uri) {
        case '/':
            require __DIR__ . '/pages/index.php';
            break;

        case '/login':
            require __DIR__ . '/form/form-login.php';
            break;

        case '/register':
            require __DIR__ . '/form/form-register.php';
            break;

        case '/dashboard':
            require __DIR__ . '/pages/dashboard/index.php';
            break;

        case '/dashboard/tasks':
            require __DIR__ . '/pages/dashboard/tasks.php';
            break;
        
        case '/about':
            require __DIR__ . '/pages/about.php';
            break;

        case '/register-handler':
            require __DIR__ . '/register-handler.php';
            break;
        

        default:
            http_response_code(404);
            echo '404 - Halaman tidak ditemukan';
            break;
    }
?>

<main>
    <?php
        include('includes/components/hero.php');
        include('includes/components/features.php');
        include('includes/components/solutions.php');
        include('includes/components/testimonial.php');
        include('includes/components/plans.php');
        include('includes/components/resources.php');
        // include('includes/newsletter.php');
        include('includes/components/floatingThemeSwitch.php');
        include('includes/footer.php');
    ?>
</main>