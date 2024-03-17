jQuery(function ($) {
  let = topSlider = new Swiper(".p-top__mv-slider", {
    autoplay: true,
    effect: "fade",
    fadeEffect: {
      crossFade: true,
    },
    loop: true,
    speed: 1500,
  });
  let slider = new Swiper(".p-top-mission__slider", {
    autoplay: true,
    loop: true,
    spaceBetween: 56,
    slidesPerView: 1,
    speed: 800,
    breakpoints: {
      768: {
        slidesPerView: 2,
      },
    },
    navigation: {
      prevEl: ".swiper-button-prev",
      nextEl: ".swiper-button-next",
    },
  });
});
