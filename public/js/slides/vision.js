const initSwipers = () => {
  const commonSwiperOpts = {
    direction: "horizontal",
    loop: true,
    autoHeight: true,
    navigation: {
      nextEl: ".button-next",
      prevEl: ".button-prev",
    },
  };

  const linksSwiperOpts = {
    ...commonSwiperOpts,
    slidesPerView: 4,
    spaceBetween: 2,
  };

  new Swiper(".links-swiper", linksSwiperOpts);
  new Swiper(".photo-gallery-swiper", commonSwiperOpts);
};

(() => {
  initSwipers();
})();
