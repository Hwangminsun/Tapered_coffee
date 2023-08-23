$(function(){
    
        // index.html
    $(function(){
        $('.slide').slick({
            autoplay: true,
            infinite: true,
            autoplaySpeed: 2000,
            slidesToShow: 2,   //한 화면에 보여줄 아이템수
            slidesToScroll: 1, // 한번에 슬라이드 시킬 아이템수
            arrows:false,
            dots:false,
        });   
      });

      $(function(){
        $('#img>ul').slick({
            autoplay: true,
            infinite: true,
            autoplaySpeed: 2000,
            slidesToShow: 2,   //한 화면에 보여줄 아이템수
            slidesToScroll: 1, // 한번에 슬라이드 시킬 아이템수
            arrows:false,
            dots:true,
        });   
      });


      // index.css  - menu slick
      $(function(){
    $('.menu_slick').slick({
        dots:false, /* 인디케이트 */
        arrows:true,
        autoplay: true,
        infinite: true,
        autoplaySpeed: 1800,
        slidesToShow: 2,   //한 화면에 보여줄 아이템수
        slidesToScroll: 1 // 한번에 슬라이드 시킬 아이템수
      
    });   
});

      

});