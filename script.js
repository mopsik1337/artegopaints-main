const swiper = new Swiper(".swiper", {
    // Optional parameters
    direction: "horizontal",
    loop: true,
  
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    // Navigation arrows
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: ".swiper-scrollbar"
    }
  });