<?
           session_start();
?>
<meta charset="utf-8">
<?
  $id=$_POST['id'];
  $pass=$_POST['pass'];
  $name=$_POST['name'];
  $hp = $_POST['hp'];
  $email = $_POST['email'];

  $ip = $REMOTE_ADDR;

  include "dbconn.php";       
  mysqli_query($connect,'set names utf8');  

  $sql = "select * from member where id='$id'";
  $result = mysqli_query( $connect,$sql);
  $exist_id = mysqli_num_rows($result);

  if($exist_id) {
    echo("
          <script>
            window.alert('해당 아이디가 존재합니다.')
            history.go(-1)
          </script>
        ");
        exit;
  }
  else{
    $sql = "insert into member(id, pass, name, hp, email) ";
    $sql .= "values('$id', '$pass', '$name', '$hp', '$email')";
    mysqli_query( $connect,$sql); 
  }
  mysqli_close($connect);  

  echo "
  <script>
  alert('회원가입이 정상적으로 완료되었습니다. 반갑습니다^^');
   location.href = '../index.html';
  </script>
";
?>

