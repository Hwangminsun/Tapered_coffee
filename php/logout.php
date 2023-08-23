<?
  session_start();
  unset($_SESSION['userid']); //unset 은 로그아웃 한다는 뜻
  unset($_SESSION['username']);
 
  // 로그아웃 후 index.html 로 이동
  echo("
       <script>
       alert('로그아웃되었습니다.');
       location.href = '../index.html'; 
         </script>
       ");
?>