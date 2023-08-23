<? 
	session_start(); 

	include "dbconn.php";
	$table = "free";

  	$num=$_GET['num'];
	$id=$_POST['id'];
	$page=$_GET['page'];
	$subject=$_POST['item_subject'];
	$content=$_POST['content'];
	$mode = $_GET['modify'];


	if (isset($_GET["mode"]))
	 	$mode = $_GET["mode"];
   	else
	 	$mode = "";

	$sql = "select * from $table where num=$num";
	$result = mysqli_query( $connect,$sql);      
	
		if ($result) {
			while ($row = mysqli_fetch_array($result)) {

	$item_num = $row['num'];
	$item_id = $row['id'];
	$item_name = $row['name'];
	$item_hit = $row['hit'];

	$image_name[0] = $row['file_name_0'];
	$image_name[1] = $row['file_name_1'];
	$image_copied[0] = $row['file_copied_0'];
	$image_copied[1] = $row['file_copied_1'];

  	$item_date = $row['regist_day'];
	$item_subject = str_replace(" ", "&nbsp;", $row['subject']);
	$item_content = $row['content'];
	$is_html = $row['is_html'];

	if ($is_html!="y")
	{
		$item_content = str_replace(" ", "&nbsp;", $item_content);
		$item_content = str_replace("\n", "<br>", $item_content);
	}	

	for ($i=0; $i<2; $i++)
	{
		if ($image_copied[$i]) 
		{
			$imageinfo = GetImageSize("./data/".$image_copied[$i]);
			$image_width[$i] = $imageinfo[0];
			$image_height[$i] = $imageinfo[1];
			$image_type[$i]  = $imageinfo[2];

			if ($image_width[$i] > 785)
				$image_width[$i] = 785;
		}
		else
		{
			$image_width[$i] = "";
			$image_height[$i] = "";
			$image_type[$i]  = "";
		}
	}

	$new_hit = $item_hit + 1;
	$sql = "update $table set hit=$new_hit where num=$num";   // 글 조회수 증가시킴
}
}

	mysqli_query( $connect,$sql);
?>
<!doctype html>
<html lang="ko">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>TAPERED COFFEE</title>
		<link rel="stylesheet" href="../css/reset.css">
		<link rel="stylesheet" href="css/list.css">
		<link rel="stylesheet" href="css/greet.css">
		<script src="https://kit.fontawesome.com/dbb7afa741.js" crossorigin="anonymous"></script>
  		<script src="../js/jquery-1.11.2.min.js"></script>
		<script src="../js/menu.js"></script>
  		<script src="../js/bottomnav.js"></script>

<script>
	function check_input()
	{
		if (!document.ripple_form.ripple_content.value)
		{
			alert("내용을 입력하세요!");    
			document.ripple_form.ripple_content.focus();
			return;
		}
		document.ripple_form.submit();
    }

    function del(href) 
    {
        if(confirm("한번 삭제한 자료는 복구할 방법이 없습니다.\n\n정말 삭제하시겠습니까?")) {
                document.location.href = href;
        }
    }
</script>
</head>

<style>
#notice {
	width: 350px;
	height: 250px;
	padding-top: 65px;
	text-align: center;
	font-size: 0.9rem;
	border: 2px solid lightslategray;
	background: rgba(119, 136, 153, .1);
	position: absolute;
	top: 135px;
	left: 50%;
	transform: translateX(-50%);
}

#notice p {
	padding: 7px;
	color: #333;
	font-size: 0.9rem;
	letter-spacing: 1px;
}

#notice p a {
	color: #c97878;
}

#notice p a:hover {
	color: #ba5151;
}

#wrap {display: none;}

@media screen and (min-width:768px) { 

#notice {
	display: none;
}

#wrap {
	display: block;
}

h2 {
	font-size: 2rem;
	font-weight: bold;
	letter-spacing: 1px;
	text-align: center;
	}

#wrap {
	width: 65%;
	min-width: 750px;
	position: absolute;
	top: 132px;
	left: 50%;
	transform: translateX(-50%);
	min-height: 500px;	
	padding-bottom: 100px;
}

footer {
	position: fixed;
	bottom: 0;
	left: 0;
	width: 100%;
	}
}
</style>

<body>
  <header class="cf">
    <!-- 모바일 햄버거 버튼 -->
    <div id="ham-wrap">
      <div class="hamburger">
         <span></span>  <span></span> <span></span> 
      </div> 
  </div>

    <h1><a href="./index.html"><img src="../img/taper-logo.png" alt="logo"></a></h1>
    <!-- 태블릿, pc 버전 사용 -->
    <ul class="right">
      <? include "top_login2.php"; ?>
        <li><a href="javascript:void(0)"><i class="fa-solid fa-file-pen"></i></li>
        <li><a href="javascript:void(0)">Service</a></li>
        <li><a href="javascript:void(0)"><i class="fa-solid fa-map"></i></a></li>
        <li><a href="javascript:void(0)">Location</a></li>
    </ul>
  </header>

  <!-- 모바일 버전 사용 -->
  <div class="bottomNav" id="usp_sell">
    <ul>
	<? include "top_login1.php"; ?>
    </ul>
  </div>

  <nav id="menu-wrap"> <!--메뉴 전체-->
      <ul class="menu">
        <li><a href="#" onclick="return false;">Menu</a></li>
        <li><a href="#" onclick="return false;">Store</a></li>
        <li><a href="#" onclick="return false;">Brand</a></li>
      </ul>   
  </nav>	

  <div id="notice">
	<p>리뷰 게시판은 태블릿, PC 환경에서</p>
	<p>이용 가능합니다. 감사합니다 <i class="fa-regular fa-face-smile"></i></p>
	<br>
	<p><a href="../index.html"><strong>메인으로 가기</strong></a></p>
</div>

<div id="wrap">
 
  <div id="content">

	<div id="col2">        
		<div id="title">
			<h2>Review</h2>
		</div>
		<div id="view_title">
			<div id="view_title1"><?= $item_subject ?></div>
			<div id="view_title2">글쓴이 : <?= $item_id ?> | 조회 : <?= $item_hit ?> | 작성일 : <?= $item_date ?> </div>	
		</div>

		<div id="view_content">

<?
	for ($i=0; $i<3; $i++) {

		if ($image_copied[$i]) {

			$img_name = $image_copied[$i];
			$img_name = "./data/".$img_name;
			$img_width = $image_width[$i];
			
			echo "<img src='$img_name' width='$img_width'>"."<br><br>";

		}
	}
?>
			<?= $item_content ?>
			
		</div>

		<div id="view_button">
			<a href="list.php?table=<?=$table?>&page=<?=$page?>">
				<img src="img/list.png">
			</a>&nbsp;

<? 
//$_SESSION['userid'] 
$userid=$_SESSION['userid'];
$item_id=$_SESSION['userid'];
	
if ($userid && ($userid==$item_id))	{

?>
			<a href="write_form.php?table=<?=$table?>&mode=modify&num=<?=$num?>&page=<?=$page?>">
				<img src="img/modify.png">
			</a>&nbsp;
			<a href="javascript:del('delete2.php?table=<?=$table?>&num=<?=$num?>')">
				<img src="img/delete.png">
			</a>&nbsp;
<?
	}
?>

<? 
	if($userid)	{
?>
			<a href="write_form.php?table=<?=$table?>"><img src="img/write.png"></a>
<?
	}
?>
		</div>
	</div> <!-- end of col2 -->
  </div> <!-- end of content -->
</div> <!-- end of wrap -->

<footer>
  <div id="footer"><a href="https://www.instagram.com/taperedcoffee/"
    target="_blank">photo by TAPERED COFFEE INSTAGRAM</a></div>
</footer>
</body>
</html>
