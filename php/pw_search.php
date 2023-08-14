<?
  session_start(); //받는 작업을 하기 때문에 세션을 적어준다
?>
<meta charset="utf-8">
<?

include "dbconn.php";
mysqli_query($connect,'set names utf8');

$id=$_POST['id_search'];
// $hp=$_POST['hp'];

$sql = "select * from member where id='$id'";
$result = mysqli_query( $connect,$sql);
$num_match = mysqli_fetch_array($result);

if(!empty($num_match)){
    echo "<script>alert('회원님의 비밀번호는 $num_match[pass]입니다.');
    location.href='login_form.php';</script>";
}
else{
    echo "<script>alert('비밀번호 찾기 실패 : 등록되지 않은 아이디입니다.');
    location.href='pw_screen.php';</script>";
    }
mysqli_close($connect);
?>