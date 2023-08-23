<?
    session_start();
?>
<meta charset="utf-8">
<?

/* 추가한 부분*/
// $id = $_POST['id']; 
$userid=$_POST['id']; // post 나 get 으로 값을 받아줘야 한다.
$pass = $_POST['pass'];  
$name = $_POST['name'];
$nick = $_POST['nick'];
$hp = $_POST['hp'];
$email = $_POST['email'];
    
   include "dbconn.php";      
   	     mysqli_query($connect,'set names utf8');  

    $sql = "update join_mem set pass='$pass', name='$name' , ";
    $sql .= "nick='$nick', hp='$hp', email='$email' where id='$_SESSION[userid]'";

//	 $sql .= "nick='$nick', hp='$hp', email='$email', regist_day='$regist_day' where id='$userid'"; 
 
 $result = mysqli_query( $connect,$sql) ;

   mysqli_close($connect);                
   echo "
	   <script>
	    location.href = '../index.html';
	   </script>
	";
?>
