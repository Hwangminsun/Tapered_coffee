<?

//쿠키는 서버에 저장하지 안하고, 사용자 컴퓨터에만 저장되서 약간 위험이 있어서, 세션을 활용한다
//로그아웃을 안한 상황에서 계속 유지가 되야해서 세션을 사용한다

  if(!$_SESSION['username'] ) 
  {
?>
        <!--index.html 의 모바일 로그인 화면-->
        <li><a href="login_form.php" class="current"><i class="fa-solid fa-arrow-right-to-bracket"></i></a></li>
      <li><a class="map" href="javascript:void(0)"><i class="fa-solid fa-map"></i></a></li>
      <li><a href="javascript:void(0)"><i class="fa-solid fa-file-pen"></i></a></li>
        <li><a href="login_form.php">Login</a></li>
        <li><a href="javascript:void(0)">Location</a></li>
      <li><a href="javascript:void(0)">Service</a></li>
        
        
<?
  }
  else
  {
?>
        <!-- 로그인이 되면 보여지는 항목 -->
        <li><a href="php/logout.php" class="current"><i class="fas fa-user"></i></a></li>
      <li><a class="map" href="#cafeloca"><i class="fa-solid fa-map"></i></a></li>
      <li><a href="#contact"><i class="fa-solid fa-file-pen"></i></a></li>
        <li><a href="php/logout.php">Logout</a></li>
        <li><a href="javascript:void(0)">Location</a></li>
      <li><a href="javascript:void(0)">Service</a></li>
<?
  }
?>