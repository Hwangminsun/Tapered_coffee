## 반응형 웹 - 테이퍼드 커피 (Tapered Coffee)
### URL : http:/maysun7.dothome.co.kr
![taper_cap_size_down](https://github.com/Hwangminsun/tapered_coffee/assets/127732251/8965dd51-88a1-4f38-b5f0-b2463dd857e3)
![tapered_gallery_mobile_cap_size_down](https://github.com/Hwangminsun/tapered_coffee/assets/127732251/510f560a-848e-4031-b750-88358694157f)

----------------------
### 기획 의도
>   테이퍼드 커피는 최근 몇 년 사이에 생겨난 새로운 브랜드로,  
> 합리적인 가격대안에서 테이퍼드만의 밸런스를 갖춘 커피와 베이커리를 선보이고 있다.       
> 심플하면서도 톡톡 튀는 블루 컬러의 브랜드 로고와 깔끔하고 절제된 세련미가 있는  
> 테이퍼드 커피만의 분위기가 느껴지는 인테리어 또한 매장 이용에 큰 만족감을 주고 있으나,  
> 인스타그램과 매장을 방문한 고객의 리뷰 외에는 브랜드에 대한 정보를 접하는데 어려움이 있다.  
> 따라서 홈페이지 제작을 통해 잠재적인 고객들의 정보 접근성을 높이고  
> 브랜드 이미지를 부각 및 상승시키는 효과를 얻고자 한다.
### Skill : HTML, CSS, Javascript, Jquery, php  
> - 웹 접근성 : skip-menu (내용 바로가기, 하단 바로가기) 적용   
> - W3C 유효성 검사 완료
> - HTML5 시맨틱 태그 적용
> - 크로스브라우징 (크롬, 엣지, 파이어폭스) test 완료
### 주요 구현기능
-----------------------
 1. Main page
  >  - Waypoint 애니메이션  
  >  - 메뉴 toggle slide
  >  - header 메뉴 클릭 시 해당 섹션으로 스크롤 
  >  - Slick 슬라이드 
  >  - 마우스 hover 시 오버레이
 2.  Sub - Gallery
  > - Slick 슬라이드 2개 연동 - 갤러리 기능 구현
  > - 모바일 -> 태블릿으로 브라우저 사이즈 변경 시, slick 해제 후 다시 slick 작동하도록 jquery 작성
 3. Sub - Review (게시판)
  > - MySQL DB 테이블 설계, php 코드 작성
  > - 로그인 후 글 작성 가능하도록 설정, 이미지 첨부 기능, 글 검색, 수정, 삭제 기능 구현
 4. Sub - 회원가입, 로그인
  > - MySQL DB 테이블 설계, php 코드 작성
  > - 회원가입 - 회원정보 입력 시 유효한 조건 확인하는 if 문 작성
  > - 로그인 - 아이디 찾기, 비밀번호 찾기 php 작성
