<?php require_once __DIR__ . '/elements/header-auth.php'; ?>  

<main class="page-content">
    <div class="texture-bg"></div>
    <section class="main-section" data-location="home-slider">
        <div class="swiper swiper-main" >
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-content">
                        <div class="text-wrapper">
                            <h2 class="title" data-text="Feed your friends. Lorem Ipsum is simply dummy">Feed your friends. Lorem Ipsum is simply dummy</h2>
                        </div>
                        <button class="button yellow" type="button">Play now</button>
                    </div>
                    <img src="/assets/images/main-slider-slide-1.png" alt="Slide 1">
                </div>
                <div class="swiper-slide">
                    <div class="slide-content">
                        <div class="text-wrapper">
                            <h2 class="title" data-text="It is a long established fact that a reader will be distracted">It is a long established fact that a reader will be distracted</h2>
                        </div>
                        <a class="button yellow" href="#">Play now</a>
                    </div>
                    <img src="/assets/images/main-slider-slide-1.png" alt="Slide 2">
                </div>
                <div class="swiper-slide">
                    <div class="slide-content">
                        <div class="text-wrapper">
                            <h2 class="title" data-text="Build your dream restaurant">Build your dream restaurant</h2>
                        </div>
                        <a class="button yellow" href="#">Play now</a>
                    </div>
                    <img src="/assets/images/main-slider-slide-1.png" alt="Slide 3">
                </div>
            </div>
            <div class="slider-button-next">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>
            </div>
            <div class="slider-button-prev">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/></svg>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section class="main-section info-cards" data-location="home-infocards">
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
</main>

<?php require_once __DIR__ . '/elements/footer.php'; ?>