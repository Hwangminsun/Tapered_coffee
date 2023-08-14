<?
   include "dbconn.php";

   $sql = "delete from memo where num = $num";
   mysqli_query( $connect,$sql);

   mysqli_close($connect);

   echo "
	   <script>
	    location.href = 'memo.php';
	   </script>
	";
?>

