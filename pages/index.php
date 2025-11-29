<?php
    // Router menggunakan PHP switch statement
    $content = "";
    $mod = "";

    if(isset($_GET['page'])) $mod = $_GET['page'];

    switch ($mod) {
        case "contacts" : $content = "contacts.php"; break;
        case "about"    : $content = "about.php"; break;
        case "login"    : $content = "auth/login.php"; break;
        case "register" : $content = "auth/signup.php"; break;
        default         : $content = "home.php";
    }

    include('../includes/header.php');
    include('../includes/navigation.php');
?>

<main>
    <?php
        include($content);
        include('../includes/components/floatingThemeSwitch.php');
        include('../includes/footer.php');
    ?>
</main>