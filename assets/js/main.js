var swiper = new Swiper(".swiper-main", {
    initialSlide: 1,
    loop: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false
    },
    pagination: {
        el: ".swiper-pagination",
    }
});