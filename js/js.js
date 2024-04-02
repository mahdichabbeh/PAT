var swiper = new Swiper(".services", {
  slidesPerView: 3,
  slidesPerGroupSkip: 3,
  spacebetween:25,
  fade:true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    clickable:true,
    dynamicbullets:true, 
  }
});

