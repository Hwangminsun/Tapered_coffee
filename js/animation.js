$(function() {

  //pc버전 wp

  $(".wp1").waypoint(function() {
    $(".wp1").addClass('animated fadeIn'); //pc, tablet 큰 로고~ 회원가입 버튼
  }, {
    offset: '75%'
  });

  $(".wp2").waypoint(function() {
    $(".wp2").addClass('animated fadeInOut'); //pc, tablet 메인 이미지 슬릭
  }, {
    offset: '75%'
  });

  $(".wp3").waypoint(function() {
    $(".wp3").addClass('animated fadeInLeft'); // pc, tablet 두번째 화면 시작하는 브랜드 문구
  }, {
    offset: '75%'
  });

    $(".wp4").waypoint(function() {
      $(".wp4").addClass('animated fadeInOut'); //pc, tablet 갤러리 한줄 씩 (delay 추가), 모든 화면 contact us (delay 추가)
    }, {
      offset: '75%'
    });

    $(".wp5").waypoint(function() {
      $(".wp5").addClass('animated fadeInLeft'); //pc, tablet 메뉴 슬릭 위 브랜드 문구
    }, {
      offset: '75%'
    });

       $(".wp6").waypoint(function() {
      $(".wp6").addClass('animated fadeInUp'); // pc, tablet location
    }, {
      offset: '75%'
    });

    $(".wp7").waypoint(function() { // pc 화면 cupping ok
      $(".wp7").addClass('animated fadeInUp');
    }, {
      offset: '75%'
    });
    //pc, tablet 화면 wp 끝

  
    //모바일 wp
  $(".ab1").waypoint(function() {
    $(".ab1").addClass('animated fadeIn');
  }, {
    offset: '75%'
  });
  
    $(".ab2").waypoint(function() {
      $(".ab2").addClass('animated fadeIn');
    }, {
      offset: '75%'
    });

    $(".ab3").waypoint(function() {
      $(".ab3").addClass('animated fadeInLeft');
    }, {
      offset: '75%'
    });

    $(".ab4").waypoint(function() {
      $(".ab4").addClass('animated fadeInOut');
    }, {
      offset: '75%'
    });

    $(".ab5").waypoint(function() {
      $(".ab5").addClass('animated fadeInUp');
    }, {
      offset: '75%'
    });

    $(".ab7").waypoint(function() {
      $(".ab7").addClass('animated fadeIn');
    }, {
      offset: '75%'
    });

    // $(".ab6").waypoint(function() {
    //   $(".ab6").addClass('animated fadeInLeft');
    // }, {
    //   offset: '75%'
    // });
 //모바일 wp 끝

});