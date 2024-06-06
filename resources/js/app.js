import './bootstrap';
import 'bootstrap';
import 'swiper/css/bundle';
// import './evento-scroll';
// import './carosello';

var swiper = new Swiper(".mySwiper", {
    pagination: {
        el: ".swiper-pagination",
        type: "fraction",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
