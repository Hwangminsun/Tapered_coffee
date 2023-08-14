$(function(){

// 모바일 위쪽 슬릭
  $('.slick1').slick({
    infinite: true,
    slidesToShow: 2,   
    slidesToScroll: 1, 
    focusOnSelect: true,
    dots:true,
    asNavFor: '.slick2',
});

// 모바일 아래쪽 슬릭 
$('.slick2').slick({
  infinite: true,
  fade: true,
  slidesToShow: 1,   
  slidesToScroll: 1, 
});  

// 
const slider1=$('.slick1');
const slider2=$('.slick2');

// 모바일 슬릭 2개 > 화면 768px 보다 크면 슬릭 해제 - 시작

// 모바일 위쪽 슬릭 속성 변수 선언
const slickOptions1= {
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1, 
    focusOnSelect: true,
    dots:true,
    asNavFor: '.slick2'
}

// 모바일 아래쪽 슬릭 속성 변수 선언
const slickOptions2= {
  infinite: true,
  fade: true,
  slidesToShow: 1, 
  slidesToScroll: 1
}

// 화면 768px 보다 크면 슬릭 해제, 768px 이하에서 슬릭 실행
$(window).on('load resize', function() {
	if($(window).width()>767) {
	slider1.slick('unslick');
	}else{
	slider.not('.slick-initialized').slick(slickOptions1);
	} 
});
// 화면 768px 보다 크면 슬릭 해제, 768px 이하에서 슬릭 실행
$(window).on('load resize', function() {
	if($(window).width()>767) {
	slider2.slick('unslick');
	}else{
	slider.not('.slick-initialized').slick(slickOptions2);
	} 
});
// 모바일 슬릭 2개 끝

// tablet slick
// 태블릿 size 에서 실행할 슬릭의 속성 변수로 선언

const slider3=$('.slick1_tab');
const slider4=$('.slick2_tab');

const slickOptions3= {
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 2,
  vertical: true,
  verticalSwiping: true,
  focusOnSelect: true,
  dots:false,
  asNavFor: '.slick2_tab'
}

const slickOptions4= {
  infinite: true,
  // fade: true,
  swipe: true,
  slidesToShow: 1,   
  slidesToScroll: 1, 
}

// 윈도우 768px 이상이면 slickOptions3 속성으로 슬릭 실행
$(window).on('load resize', function() {
	if($(window).width()>767)
    slider3.slick(slickOptions3);
});

// 윈도우 768px 이상이면 slickOptions4 속성으로 슬릭 실행
$(window).on('load resize', function() {
	if($(window).width()>767)
    slider4.slick(slickOptions4);
});

// pc 버전 슬릭의 속성 변수로 선언
const slickOptions5= {
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 2,
  vertical: true,
  verticalSwiping: true,
  focusOnSelect: true,
  dots:false,
  asNavFor: '.slick2_tab'
}

/* 윈도우 1150px 이상이면 unslick 후 
slickOptions5 속성으로 슬릭 실행 */

$(window).on('load resize', function() {
	if($(window).width()>1149)
    slider3.slick('unslick');
    slider3.not('.slick-initialized').slick(slickOptions5);    
});

// .btn 누르면 이전 페이지로
$('.btn').click(function(){
  history.go(-1);
  });

/*  */

$('#gallery .bar2:before').click(function(){
  $('.slick2_tab li img').scale('1.2');

});

});