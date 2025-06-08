<?php require_once('sample.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?= $siteName; ?></title>
        
        <link rel="icon" href="/assets/images/favicon.ico" type="image/png">

        <link rel="stylesheet" href="/assets/css/default.css">
        <link rel="stylesheet" href="/assets/css/fonts.css">
        <link rel="stylesheet" href="/assets/css/styles.css">
        <link rel="stylesheet" href="/assets/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="/assets/libs/fontawesome/css/fontawesome.css">
        <link rel="stylesheet" href="/assets/libs/fontawesome/css/brands.css">
        <link rel="stylesheet" href="/assets/libs/fontawesome/css/solid.css">
    </head>
    <body>
        <header data-location="header">
            <div class="logo-container">
                <img src="/assets/images/logo.png" alt="<?= $siteName; ?>">
            </div>
            <div class="navigation-container">
                <ul>
                    <li><a href="#" class="nav-link">Home</a></li>
                    <li><a href="#" class="nav-link">News</a></li>
                    <li><a href="#" class="nav-link">Rules</a></li>
                    <li><a href="#" class="nav-link">Privacy</a></li>
                </ul>
            </div>
            <div class="buttons-container">
                <button class="button" type="button">Log In</button>
                <button class="button" type="button">Sign Up</button>
            </div>
            <button class="button-mobile-menu mobileMenuButton" type="button">
                <i class="fa-solid fa-bars"></i>
            </button>
        </header>
        
        <div class="page-content">
            <section class="modal modal-login" data-location="modal-login" style="display: none;">
                <div class="modal-container">
                    <div class="modal-header">
                        <h2 class="modal-title">Log In</h2>
                    </div>
                </div>
            </section>

            <section class="main-section" data-location="main-slider">
                <div class="swiper swiper-main" >
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="slide-content">
                                <div class="text-wrapper">
                                    <h1 class="title" data-text="Feed your friends. Lorem Ipsum is simply dummy">Feed your friends. Lorem Ipsum is simply dummy</h1>
                                </div>
                                <button class="button" type="button">Play now</button>
                            </div>
                            <img src="/assets/images/main-slider-slide-1.png" alt="Slide 1">
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-content">
                                <div class="text-wrapper">
                                    <h1 class="title" data-text="It is a long established fact that a reader will be distracted">It is a long established fact that a reader will be distracted</h1>
                                </div>
                                <a class="button" href="#">Play now</a>
                            </div>
                            <img src="/assets/images/main-slider-slide-1.png" alt="Slide 2">
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-content">
                                <div class="text-wrapper">
                                    <h1 class="title" data-text="Build your dream restaurant">Build your dream restaurant</h1>
                                </div>
                                <a class="button" href="#">Play now</a>
                            </div>
                            <img src="/assets/images/main-slider-slide-1.png" alt="Slide 3">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </section>

            <section class="main-section info-cards" data-location="main-infocards">
                <div class="info-cards">
                    <div class="info-cards-item">
                        <div class="content">
                            <div class="image-wrapper">
                                <img src="/assets/images/card-image-1.png" alt="Card 1">
                            </div>
                            <div class="text-wrapper">
                                <h3 class="text-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="info-cards-item">
                        <div class="content">
                            <div class="image-wrapper">
                                <img src="/assets/images/card-image-2.jpg" alt="Card 2">
                            </div>
                            <div class="text-wrapper">
                                <h3 class="text-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="info-cards-item">
                        <div class="content">
                            <div class="image-wrapper">
                                <img src="/assets/images/card-image-1.png" alt="Card 3">
                            </div>
                            <div class="text-wrapper">
                                <h3 class="text-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="info-cards-item">
                        <div class="content">
                            <div class="image-wrapper">
                                <img src="/assets/images/card-image-2.jpg" alt="Card 4">
                            </div>
                            <div class="text-wrapper">
                                <h3 class="text-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <footer data-location="footer">
            <div class="social-buttons">
                <a class="link-item" href="#">
                    <i class="fa-brands fa-square-facebook"></i>
                </a>
                <a class="link-item" href="#">
                    <i class="fa-brands fa-square-x-twitter"></i>
                </a>
                <a class="link-item" href="#">
                    <i class="fa-brands fa-square-instagram"></i>
                </a>
            </div>
            <div class="copyright-wrapper">
                <span>&copy;2016-<?= date('Y'); ?> <a href="/"><?= $siteName; ?></a>.<br>All rights reserved.</span>
            </div>                
        </footer>

        <script type="text/javascript" src="/assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="/assets/js/swiper-bundle.min.js"></script>
        <script type="text/javascript" src="/assets/js/main.js"></script>
    </body>
</html>