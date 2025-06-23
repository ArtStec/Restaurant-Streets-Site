<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <title>Restaurant Streets</title>
        
        <link rel="icon" href="/assets/images/favicon.ico" type="image/png">

        <link rel="stylesheet" href="/assets/css/default.css?<?php echo time(); ?>">
        <link rel="stylesheet" href="/assets/css/fonts.css">
        <link rel="stylesheet" href="/assets/css/styles.css?<?php echo time(); ?>">
        <link rel="stylesheet" href="/assets/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="/assets/css/select2.min.css">
        <link rel="stylesheet" href="/assets/libs/fontawesome/css/fontawesome.css">
        <link rel="stylesheet" href="/assets/libs/fontawesome/css/brands.css">
        <link rel="stylesheet" href="/assets/libs/fontawesome/css/solid.css">
    </head>
    <body>
        <header data-location="header">
            <a href="/" class="logo-container">
                <img src="/assets/images/logo.png" alt="Restaurant Streets">
            </a>
            <div class="nav-container">
                <ul>
                    <li class="nav-link"><a href="/">Home</a></li>
                    <li class="nav-link"><a href="/sample.php">Sample</a></li>
                    <li class="nav-link active"><a href="/search.php">Search</a></li>
                    <li class="nav-link"><a href="/friends.php">Friends</a></li>
                    <li class="nav-link"><a href="/privacy.php">Privacy</a></li>
                    <li class="nav-link"><a href="/game.php">Game</a></li>
                </ul>
            </div>
            <div class="buttons-container">
                <button class="button yellow buttonModalOpen" data-target=".modalLogin" type="button">Log In</button>
                <button class="button yellow buttonModalOpen" data-target=".modalSignup" type="button">Sign Up</button>
            </div>
            <button class="button-mobile-menu buttonMobileMenuOpen" type="button">
                <i class="fa-solid fa-bars"></i>
            </button>
        </header>
        <section class="main-section mobileMenuContainer" data-location="mobile-menu">
            <div class="mobile-nav-container">
                <div href="/" class="mobile-profile-wrapper">
                    <button class="button yellow buttonModalOpen" data-target=".modalLogin" type="button">Log In</button>
                    <button class="button yellow buttonModalOpen" data-target=".modalSignup" type="button">Sign Up</button>
                </div>
                <div class="mobile-nav-wrapper">
                    <ul>
                        <li class="nav-link"><a href="/">Home</a></li>
                        <li class="nav-link"><a href="/sample.php">Sample</a></li>
                        <li class="nav-link active"><a href="/search.php">Search</a></li>
                        <li class="nav-link"><a href="/friends.php">Friends</a></li>
                        <li class="nav-link"><a href="/privacy.php">Privacy</a></li>
                        <li class="nav-link"><a href="/game.php">Game</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <?php require_once __DIR__ . '/modal-signup.php'; ?>
        <?php require_once __DIR__ . '/modal-login.php'; ?>
        <?php require_once __DIR__ . '/modal-profile.php'; ?>