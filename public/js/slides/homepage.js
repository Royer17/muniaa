const initSwipers = () => {
  const commonSwiperOpts = {
    direction: "horizontal",
    loop: true,
    autoplay: {
      delay: 5000,
    },
    autoHeight: true,
    navigation: {
      nextEl: ".button-next",
      prevEl: ".button-prev",
    },
  };

  const swiperThumbsOpts = {
    spaceBetween: 0,
    slidesPerView: 3,
    direction: "vertical",
    scrollbar: {
      el: ".swiper-scrollbar",
      draggable: true,
    },
  };

  const linksSwiperOpts = {
    ...commonSwiperOpts,
    slidesPerView: 4,
    spaceBetween: 10,
    breakpoints: {
      320: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      480: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      640: {
        slidesPerView: 4,
        spaceBetween: 40,
      },
    },
  };

  new Swiper(".main-swiper", commonSwiperOpts);

  const newsThumbSwiper = new Swiper(".news-thumb-swiper", swiperThumbsOpts);
  new Swiper(".news-swiper", {
    ...commonSwiperOpts,
    thumbs: {
      swiper: newsThumbSwiper,
    },
  });

  const worksThumbSwiper = new Swiper(".works-thumb-swiper", swiperThumbsOpts);
  new Swiper(".works-swiper", {
    ...commonSwiperOpts,
    thumbs: {
      swiper: worksThumbSwiper,
    },
  });

  new Swiper(".photo-gallery-swiper", commonSwiperOpts);
  new Swiper(".links-swiper", linksSwiperOpts);
};

(() => {
  initSwipers();
})();
