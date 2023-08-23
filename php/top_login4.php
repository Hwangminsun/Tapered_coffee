<?

  if(!$_SESSION['username'] ) {

?>
      <!--index.html 의 로그인 화면-->
      <li><a href="login_form.php" class="current"><i class="fa-solid fa-arrow-right-to-bracket"></i></a></li>
      <li><a class="map" href="javascript:void(0)"><i class="fa-solid fa-map"></i></a></li>
      <li><a href="javascript:void(0)"><i class="fa-solid fa-file-pen"></i></a></li>
      <li><a href="login_form.php">Login</a></li>
      <li><a href="javascript:void(0)">Location</a></li>
      <li><a href="javascript:void(0)">Service</a></li>
        
<?

  }

  else {

?>
      <!-- 로그인 후 보여지는 항목 -->
      <li><a href="php/logout.php" class="current"><i class="fas fa-user"></i></a></li>
      <li><a class="map" href="#cafeloca"><i class="fa-solid fa-map"></i></a></li>
      <li><a href="#contact"><i class="fa-solid fa-file-pen"></i></a></li>
      <li><a href="php/logout.php">Logout</a></li>
      <li><a href="javascript:void(0)">Location</a></li>
      <li><a href="javascript:void(0)">Service</a></li>
<?

  }

?>