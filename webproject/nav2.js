var swiper1 = new Swiper(".slide-content", {
    slidesPerView: 2,
    spaceBetween: 30,
    slidesPerGroup: 3,
    centerSlide:'true',
    loop: true,
   fade:'true',
   grabCursor:'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets:true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints:{
        0:{
            slidesPerView:1,
            slidesPerGroup:1,
        },
        520:{
            slidesPerView:2,
            slidesPerGroup:2, 
        },
        950:{
            slidesPerView:3,
            slidesPerGroup:3,
        }
    },
  });