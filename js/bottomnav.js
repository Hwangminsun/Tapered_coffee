$(function(){

    var lastKnownScrollY = 0;
    var currentScrollY = 0;
    var ticking = false;
    var idOfHeader = 'usp_sell';
    var eleHeader = null;

    const classes = {
        pinned: 'bottomNav-pin',
        unpinned: 'bottomNav-unpin',
      };

      function onScroll() {
        currentScrollY = window.pageYOffset;
        requestTick();
      }

      function requestTick() {
        if (!ticking) {
          requestAnimationFrame(update);
        }
        ticking = true;
      }

      function update() {
        if (currentScrollY < lastKnownScrollY) {
          pin();
        } else if (currentScrollY > lastKnownScrollY) {
          unpin();
        }
        lastKnownScrollY = currentScrollY;
        ticking = false;
      }

      function pin() {
        if (eleHeader.classList.contains(classes.unpinned)) {
          eleHeader.classList.remove(classes.unpinned);
          eleHeader.classList.add(classes.pinned);
        }
      }

      function unpin() {
        if (eleHeader.classList.contains(classes.pinned) || !eleHeader.classList.contains(classes.unpinned)) {
          eleHeader.classList.remove(classes.pinned);
          eleHeader.classList.add(classes.unpinned);
        }
      }

      window.onload = function() {
        eleHeader = document.getElementById(idOfHeader);
        document.addEventListener('scroll', onScroll, false);
      }


// 기존코드    // 
    // var lastScrollTop = 0;
    // var delta = 5; //양수값을 주면 일단은 적용 다 되는듯
    // var fixBox = document.querySelector('.bottomNav');
    // var fixBoxHeight = fixBox.offsetHeight;
    // var didScroll;
  
    // window.onscroll = function(e) {
    //     didScroll = true; //스크롤을 감지, true: 스크롤이 되고있다는 것
    // };
  
    // setInterval(function(){
    //     if(didScroll){
    //         hasScrolled();
    //         didScroll = false; //부하를 막기 위해 넣어줌
    //     }
    //  }, 250); //0.25초마다 스크롤이 되냐 안되냐를 감지하고
  
    //  function hasScrolled(){
    //     var nowScrollTop = window.scrollY; //순수 자바스크립트, 세로 스크롤 한 길이
    //        if(Math.abs(lastScrollTop - nowScrollTop) <= delta){
    //             return; //델타보다 작으면 멈추도록
    //        }
    //        if(nowScrollTop > lastScrollTop && nowScrollTop > fixBoxHeight){
    //                fixBox.classList.remove('show'); //숨어지는 부분이 이 부분
    //        }else{ //else if 를 하면 윗줄의 그냥 반대라는 뜻이어서, 결과가 안나옴
    //         //위의 if에 대한 else 이고, else이면 안에 if를 또 비교한느 것
    //          if(nowScrollTop + window.innerHeight < document.body.offsetHeight){
    //                fixBox.classList.add('show'); //클래스를 붙였다 뗐다 하는 것
    //          }
    //       }
    //                lastScrollTop = nowScrollTop;
    //  }
    // });
     /*
  clientHeight : 요소의 내부 높이. 패딩 값은 포함되며, 스크롤바, 테두리, 마진은 제외됨.
  offsetHeight : 요소의 높이. 패딩, 스크롤 바, 테두리(Border)가 포함딤. 마진은 제외됨.
  scrollHeight  : 요소에 들어있는 컨텐츠의 전체 높이. 패딩과 테두리가 포함딤. 마진은 제외됨.
     */

    });