<? 
	session_start(); 

	$table = "free";
	$ripple = "free_ripple";

	include "dbconn.php";

$num=$_GET['num'];
$page=$_GET['page'];
	$mode=$_GET['modify'];

	if (isset($_GET["mode"]))
	$mode = $_GET["mode"];
  else
	$mode = "";


	
	if ($mode=="modify")
	{
		$sql = "select * from $table where num=$num";
		$result = mysqli_query( $connect,$sql);
		//$row = mysqli_fetch_array($result);  
		if ($result){
			while($row = mysqli_fetch_array($result)){     
	
		$item_subject     = $row['subject'];
		$item_content     = $row['content'];
		$item_file_0 = $row['file_name_0'];
		$item_file_1 = $row['file_name_1'];
		$item_file_2 = $row['file_name_2'];

		$copied_file_0 = $row['file_copied_0'];
		$copied_file_1 = $row['file_copied_1'];
		$copied_file_2 = $row['file_copied_2'];
	}

}
}
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
      if (!document.board_form.subject.value)
      {
          alert("제목을 입력해주세요");    
          document.board_form.subject.focus();
          return;
      }

      if (!document.board_form.content.value)
      {
          alert("내용을 입력해주세요");    
          document.board_form.content.focus();
          return;
      }
      document.board_form.submit();
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
	/* font-weight: bold; */
	color: #c97878;
}

#notice p a:hover {
	color: #ba5151;
}

#wrap_1 {display: none;}

@media screen and (min-width:768px) { 

#wrap_1 {display: block;}

#notice {
	display: none;
}

h2 {
		font-size: 2rem;
		font-weight: bold;
		letter-spacing: 1px;
		text-align: center;
	}

	#wrap_1 { 
	width: 55%;
	min-width: 750px;
	/* margin: 0 auto; */
	position: absolute;
	top: 132px;
	left: 50%;
	transform: translateX(-50%);
	height: 130%;
	min-height: 500px;
}

form {
	width: 100%;
}

#write_form {
	width: 100%;
}

	#write_row4, #write_row5 {
	display: flex;
	height: 32px;
	line-height: 32px;
}

#write_row4 {
	margin-bottom: 2px;
	width: 100%;
}

#write_row5 {
	border-bottom: 2px solid #cccccc;
	}

#write_row4 .col1, #write_row5 .col1 {
	width: 30%;
	/* border: 1px solid #000; */
	background: #eeeeee;
}

#write_row4 .col2, #write_row5 .col2 {
	width: 70%;
	/* border: 1px solid blue; */
	text-align: left;
	padding-left: 6px;
}

#write_row4 .col2 input, #write_row5 .col2 input {
	margin-bottom: 4px;
}

textarea {
	text-align: left;
	padding:0;
}
}
</style>

<body>
	<!-- <ul id="skip-menu">
    <li><a href="#wrap_1">&#187; 내용 바로가기</a></li>
    <li><a href="#footer">&#187; 하단 바로가기</a></li>
  </ul> -->

  <header class="cf">
    <!-- 모바일 햄버거 버튼 -->
    <div id="ham-wrap">
      <div class="hamburger">
         <span></span>  <span></span> <span></span> 
      </div> 
  </div>

    <h1><a href="../index.html"><img src="../img/taper-logo.png" alt="logo"></a></h1>
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


<div id="wrap_1">
  <div id="content_1">
	<div id="col2_1">        
		
			<h2>Review</h2>

		<div id="write_form_title">
			<img src="img/write_form_title.gif">
		</div>	
		<?

if($mode=="modify")
{
?>
	<form  name="board_form" method="post" action="insert1.php?mode=modify&num=<?=$num?>&page=<?=$page?>&table=<?=$table?>" enctype="multipart/form-data"> 
<?
}
else
{
?>
	<form  name="board_form" method="post" action="insert1.php?table=<?=$table?>" enctype="multipart/form-data"> 
<?
}
?>
		<div id="write_form"> <!-- 게시판 틀 시작 -->
			<!-- <div class="write_line"></div> -->
			<div id="write_row1">
				<div class="col1"> 아이디 </div>
				<div class="col2"><?=$_SESSION['userid']?></div>

				<?
	if( $userid && ($mode != "modify"))
	{
?>
				<div class="col3"><input type="checkbox" name="html_ok" value="y"> HTML 쓰기</div>
<?
	}
?>			
			</div>
		
			<!-- <div class="write_line sub_top"></div> -->
			<div id="write_row2">
				<div class="col1">제목</div>
			  	<div class="col2">
					<input type="text" name="subject" value="<?=$item_subject?>" >
				</div>
			</div>

			<!-- <div class="write_line"></div> -->
			<div id="write_row3">
				<div class="col1"> 내용 </div>
			    <div class="col2">
					<textarea rows="15" cols="79" name="content"><?=$item_content?></textarea>
				</div>
			</div>
	
			<div id="write_row4"><div class="col1"> 이미지파일1</div>
			                     <div class="col2"><input type="file" name="upfile[]"></div>
			</div>

			<? 	if ($mode=="modify" && $item_file_0)
{
	?>
<div class="delete_ok"> <?=$item_file_0?> 파일이 등록되어 있습니다. <input type="checkbox" name="del_file[]" value="0"> 삭제</div>
			<div class="clear"></div>
<?
	}
?>

<div class="write_line"></div>
			<div id="write_row5"><div class="col1"> 이미지파일2  </div>
			                     <div class="col2"><input type="file" name="upfile[]"></div>
			</div>
<? 	if ($mode=="modify" && $item_file_1)
	{
?>
			<div class="delete_ok"><?=$item_file_1?> 파일이 등록되어 있습니다. <input type="checkbox" name="del_file[]" value="1"> 삭제</div>
			<div class="clear"></div>
<?
	}
?>
		</div> <!-- write_form 끝 -->

		<div id="write_button">
			<a href="#">
				<img src="img/ok.png" onclick="check_input()">
			</a>&nbsp;
			<a href="list.php?table=<?=$table?>&page=<?=$page?>">
				<img src="img/list.png">
			</a>
		</div>
	</form>

	</div> <!-- end of col2 -->
  </div> <!-- end of content -->
</div> <!-- end of wrap -->

<footer>
  <div id="footer"><a href="https://www.instagram.com/taperedcoffee/"
    target="_blank">photo by TAPERED COFFEE INSTAGRAM</a></div>
</footer>
</body>
</html>
