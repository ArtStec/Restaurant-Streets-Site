<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
                    <li class="nav-link"><a href="/privacy.php">Privacy</a></li>
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
                <a href="/" class="mobile-profile-wrapper">
                    <div class="left-container">
                        <div class="avatar-wrapper">
                            <img src="/assets/images/card-image-1.png" alt="Profile avatar">
                        </div>
                        <div class="name-wrapper">
                            <span>John</span>
                        </div>
                    </div>
                    <div class="right-container">
                        <button class="button blue" type="button blue">
                            <svg width="25" height="25" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M29.0566 9.76172C29.2441 10.2715 29.0859 10.8398 28.6817 11.2031L26.1445 13.5117C26.209 13.9981 26.2442 14.4961 26.2442 15C26.2442 15.5039 26.209 16.002 26.1445 16.4883L28.6817 18.7969C29.0859 19.1602 29.2441 19.7285 29.0566 20.2383C28.7988 20.9356 28.4883 21.6035 28.1309 22.2481L27.8555 22.7227C27.4688 23.3672 27.0352 23.9766 26.5606 24.5508C26.2149 24.9727 25.6406 25.1133 25.125 24.9492L21.8613 23.9121C21.0762 24.5156 20.209 25.0195 19.2832 25.4004L18.5508 28.7461C18.4336 29.2793 18.0234 29.7012 17.4844 29.7891C16.6758 29.9238 15.8438 29.9941 14.9942 29.9941C14.1445 29.9941 13.3125 29.9238 12.5039 29.7891C11.9649 29.7012 11.5547 29.2793 11.4375 28.7461L10.7051 25.4004C9.77931 25.0195 8.91212 24.5156 8.12697 23.9121L4.86915 24.9551C4.35353 25.1191 3.77931 24.9727 3.43361 24.5566C2.959 23.9824 2.52541 23.3731 2.13869 22.7285L1.8633 22.2539C1.50587 21.6094 1.19533 20.9414 0.937515 20.2441C0.750015 19.7344 0.908218 19.166 1.31251 18.8027L3.84962 16.4941C3.78517 16.002 3.75001 15.5039 3.75001 15C3.75001 14.4961 3.78517 13.9981 3.84962 13.5117L1.31251 11.2031C0.908218 10.8398 0.750015 10.2715 0.937515 9.76172C1.19533 9.06446 1.50587 8.39649 1.8633 7.75196L2.13869 7.27735C2.52541 6.63281 2.959 6.02344 3.43361 5.44922C3.77931 5.02735 4.35353 4.88672 4.86915 5.05078L8.13283 6.08789C8.91798 5.48438 9.78517 4.98047 10.7109 4.59961L11.4434 1.25391C11.5606 0.720703 11.9707 0.298828 12.5098 0.210938C13.3184 0.0703125 14.1504 0 15 0C15.8496 0 16.6817 0.0703125 17.4902 0.205078C18.0293 0.292969 18.4395 0.714844 18.5567 1.24805L19.2891 4.59375C20.2149 4.97461 21.082 5.47852 21.8672 6.08203L25.1309 5.04492C25.6465 4.88086 26.2207 5.02735 26.5664 5.44336C27.041 6.01758 27.4746 6.62695 27.8613 7.27149L28.1367 7.7461C28.4942 8.39063 28.8047 9.0586 29.0625 9.75586L29.0566 9.76172ZM15 19.6875C16.2432 19.6875 17.4355 19.1936 18.3146 18.3146C19.1937 17.4355 19.6875 16.2432 19.6875 15C19.6875 13.7568 19.1937 12.5645 18.3146 11.6854C17.4355 10.8064 16.2432 10.3125 15 10.3125C13.7568 10.3125 12.5645 10.8064 11.6854 11.6854C10.8064 12.5645 10.3125 13.7568 10.3125 15C10.3125 16.2432 10.8064 17.4355 11.6854 18.3146C12.5645 19.1936 13.7568 19.6875 15 19.6875Z" fill="#FFF8E7"/>
                            </svg>
                        </button>
                    </div>
                </a>
                <div class="mobile-nav-wrapper">
                    <ul>
                        <li class="nav-link"><a href="/">Home</a></li>
                        <li class="nav-link"><a href="/sample.php">Sample</a></li>
                        <li class="nav-link active"><a href="/search.php">Search</a></li>
                        <li class="nav-link"><a href="/privacy.php">Privacy</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <?php require_once __DIR__ . '/modal-signup.php'; ?>
        <?php require_once __DIR__ . '/modal-login.php'; ?>
        <?php require_once __DIR__ . '/modal-profile.php'; ?>