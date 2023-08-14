$(function(){

    $(function(){
      const swiper = new Swiper('.swiper-container', { 
        slidesPerView: 2, 
        spaceBetween: 0, 
        loop: true,
        loopAdditionalSlides : 1,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        autoplay: 5000,
        autoplayDisableOnInteraction: false,
        slideToClickedSlide: true,
        breakpoints: {
          1149: {
            slidesPerView:2,
            spaceBetween: 10,
            loop: true,
            autoplay: 2000,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
          },
    
          767: {
            slidesPerView:1,
            spaceBetween: 10,
            loop: true,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
          },
          }// breakpoint 종료 
        });
      });
    });
  