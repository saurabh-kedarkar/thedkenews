
  new Swiper('.mySwiper', {
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    },
    autoplay: {
      delay: 3000,
    },
  });
new Swiper('.editors-choice-swiper', {
  slidesPerView: 1.1,
  spaceBetween: 20,
  loop: false,
  navigation: {
    nextEl: '.editors-choice-next',
    prevEl: '.editors-choice-prev',
  },
  breakpoints: {
    576: {
      slidesPerView: 1.3,
    },
    768: {
      slidesPerView: 2,
    },
    992: {
      slidesPerView: 3,
    }
  }
});
