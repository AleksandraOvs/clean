const swiper = new Swiper('.hero-slider', {
  slidesPerView: 1, // this
  //slidesPerColumn: 1, 
  loop: true,
  effect: 'fade',
  //spaceBetween: 20,
  //centeredSlides: true,
  grabCursor: true,
  navigation: {
    nextEl: '.hero-slider__button-next',
    prevEl: '.hero-slider__button-prev',
  },
});

const swiperWorks = new Swiper('.works-slider', {
  slidesPerView: 1, // this
  centeredSlides: true,
  initialSlide: 1,
  navigation: {
    nextEl: '.works-slider__button-next',
    prevEl: '.works-slider__button-prev',
  },
  breakpoints: {
    768: {
      slidesPerView: 3,
      spaceBetween: 20,
      watchSlidesProgress: true,
      grabCursor: true,
    },
  }
});

const swiperClients = new Swiper('.ourClients-slider', {
  slidesPerView: 1, // this
  loop: true,
  spaceBetween: 20,
  // centeredSlides: true,
  // initialSlide: '.today',
  //watchSlidesProgress: true,
  grabCursor: true,
  navigation: {
    nextEl: '.ourClients-slider__button-next',
    prevEl: '.ourClients-slider__button-prev',
  },

  breakpoints: {
    768: {
      slidesPerView: 4,
      spaceBetween: 20,
      watchSlidesProgress: true,
      grabCursor: true,
      speed: 15000,
      autoplay: {
        enabled: true,
        delay: 1,
      },
      grid: {
        rows: 1
      },
    },

    375: {
      slidesPerView: 2, // this
      //centeredSlides: true,
      autoplay: false,
      grid: {
        rows: 2
      },
    }

  }
});

const swiperFeedback = new Swiper('.feedback-slider', {
  slidesPerView: 1, // this
  centeredSlides: true,
  initialSlide: 1,
  navigation: {
    nextEl: '.fdb-slider__button-next',
    prevEl: '.fdb-slider__button-prev',
  },
  breakpoints: {
    768: {
      slidesPerView: 3,
      spaceBetween: 20,
      watchSlidesProgress: true,
      grabCursor: true,
    },
  }
});

const swiperOurTrainers = new Swiper('.our-trainers-slider', {
  slidesPerView: "auto", // this
  //loop: true,
  spaceBetween: 20,
  // centeredSlides: true,
  // initialSlide: '.today',
  //watchSlidesProgress: true,
  grabCursor: true,
  navigation: {
    nextEl: '.trainers-slider__button-next',
    prevEl: '.trainers-slider__button-prev',
  },
});

