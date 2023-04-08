//--------------------- NAVBAR //---------------------
const menubar = document.querySelector(".menu-bar");
const menunav = document.querySelector(".menu");
menubar.addEventListener("click", () => {
    menunav.classList.toggle("menu-active");
});

const navbar = document.querySelector(".navbar");
window.addEventListener("scroll", () => {
    console.log(window.scrollY);
    const windowPosition = window.scrollY > 0;
    navbar.classList.toggle("scrolling-active", windowPosition);
});

//--------------------- CAROUSEL //---------------------
const swiper = new Swiper(".swiper", {
    // Optional parameters
    autoplay: {
        delay: 9000,
        disableOnInteraction: false,
    },
    loop: true,
    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    // Navigation arrows
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
//--------------------- CAROUSEL //---------------------
