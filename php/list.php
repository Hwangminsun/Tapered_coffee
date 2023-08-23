<? 
	session_start(); 
	$table = "free";
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

#wrap {display: none;}

@media screen and (min-width:768px) { 

#notice {
	display: none;
}

#wrap {display: block;}

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
	height: 130%;
	min-height: 500px;	
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

    <h1><a href="../index.html"><img src="../img/taper-logo.png" alt="logo"></a></h1>
    <!-- 태블릿, pc 버전 사용 -->
    <ul class="right">
      <? include "top_login3.php"; ?>
        <li><a href="javascript:void(0)"><i class="fa-solid fa-file-pen"></i></li>
        <li><a href="javascript:void(0)">Service</a></li>
        <li><a href="javascript:void(0)"><i class="fa-solid fa-map"></i></a></li>
        <li><a href="javascript:void(0)">Location</a></li>
    </ul>
  </header>

  <!-- 모바일 버전 사용 -->
  <div class="bottomNav" id="usp_sell">
    <ul>
	<? include "top_login4.php"; ?>
    </ul>
  </div>

  <nav id="menu-wrap"> <!--메뉴 전체-->
      <ul class="menu">
        <li><a href="#" onclick="return false;">Menu</a></li>
        <li><a href="#" onclick="return false;">Store</a></li>
        <li><a href="#" onclick="return false;">Brand</a></li>
      </ul>   
  </nav>	
  
<?
	include "dbconn.php";

	$mode = $_GET['search'];
	$page = $_GET['page'];
 	$num = $_GET['num'];
 	$id = $_POST['id'];
	$find = $_POST['find'];
	$search = $_POST['search'];

   if (isset($_GET["mode"]))
   		$mode = $_GET["mode"];

	else
   		$mode = "";
			$scale=10;			// 한 화면에 표시되는 글 수

    if ($mode=="search")
	{
		if(!$search)
		{
			echo("
				<script>
				 window.alert('검색할 단어를 입력해 주세요!');
			     history.go(-1);
				</script>
			");
			exit;
		}
		$sql = "select * from $table where $find like '%$search%' order by num desc";
	}
	else
	{
		$sql = "select * from $table order by num desc";
	}

	$result = mysqli_query( $connect,$sql);
	$total_record = mysqli_num_rows($result); // 전체 글 수

	// 전체 페이지 수($total_page) 계산 
	if ($total_record % $scale == 0)     
		$total_page = floor($total_record/$scale);      
	else
		$total_page = floor($total_record/$scale) + 1; 
 
	if (!$page)                 // 페이지번호($page)가 0 일 때
		$page = 1;              // 페이지 번호를 1로 초기화
 
	// 표시할 페이지($page)에 따라 $start 계산  
	$start = ($page - 1) * $scale;      
	$number = $total_record - $start;
?>

<div id="notice">
	<p>리뷰 게시판은 태블릿, PC 환경에서</p>
	<p>이용 가능합니다. 감사합니다 <i class="fa-regular fa-face-smile"></i></p>
	<br>
	<p><a href="../index.html"><strong>메인으로 가기</strong></a></p>
</div>

<div id="wrap">
  <div id="content">
		<div id="col2">        
			<h2>Review</h2>
			
			<form  name="board_form" method="post" action="list.php?table=<?=$table?>&mode=search"> 
			
				<div id="list_search"> <!-- h2 제목 아래 한줄 -->
					<div id="list_search1">
						총  <?= $total_record ?>  개의 게시물이 있습니다.
					</div>
					<!-- <div id="list_search2">
						<img src="img/select_search.gif">
					</div> -->

					<div id="list_search3">
						<select name="find">
              				<option value='subject'>제목</option>
              				<option value='content'>내용</option>
              				<option value='id'>아이디</option>
              				<!-- <option value='name'>이름</option> -->
						</select>
					</div>

					<div id="list_search4">
						<input type="text" name="search">
					</div>

					<div id="list_search5">
						<input type="image" src="img/list_search_button.gif">
					</div>
				</div> <!-- 한줄 끝 -->
			</form>
			<!-- <div class="clear"></div> -->

		<div id="list_top_title"> <!-- 게시판 목록 제목 -->
			<ul>
				<li id="list_title1"><img src="img/list_title1.gif"></li>
				<li id="list_title2"><img src="img/list_title2.gif"></li>
				<li id="list_title3"><img src="img/list_title3.gif"></li>
				<li id="list_title4"><img src="img/list_title4.gif"></li>
				<li id="list_title5"><img src="img/list_title5.gif"></li>
			</ul>		
		</div> <!-- 제목 끝 -->

		<div id="list_content"> <!-- 실제 리스트 목록 -->
<?		
   for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)                    
   {
      mysqli_data_seek($result, $i);     // 포인터 이동        
      $row = mysqli_fetch_array($result); // 하나의 레코드 가져오기	      
      
	  $item_num     = $row['num'];
	  $item_id      = $row['id'];
	  $item_name    = $row['name'];
	
	  $item_hit     = $row['hit'];
      $item_date    = $row['regist_day'];
	  $item_date = substr($item_date, 0, 10);  
	  $item_subject = str_replace(" ", "&nbsp;", $row['subject']);
?>
			<div id="list_item">
				<div id="list_item1"><?= $number ?></div> <!-- 게시판 목록 번호 -->
				<div id="list_item2"> <!-- 게시판 글 제목 -->
					<a href="view.php?table=<?=$table?>&num=<?=$item_num?>&page=<?=$page?>"><?= $item_subject ?></a>
				</div>
				<div id="list_item3"><?= $item_id ?></div> <!-- 작성자 아이디 -->
				<div id="list_item4"><?= $item_date ?></div> <!-- 작성일 -->
				<div id="list_item5"><?= $item_hit ?></div> <!-- 글 조회수 -->
			</div> <!-- list_item 끝 -->
<?
   	   $number--;
   }
?>
			<div id="page_button">
				<div id="page_num"> ◀ 이전 &nbsp;&nbsp;&nbsp;&nbsp; 
<?
   // 게시판 목록 하단에 페이지 링크 번호 출력
   for ($i=1; $i<=$total_page; $i++)
   {
		if ($page == $i)     // 현재 페이지 번호 링크 안함
		{
			echo "<b> $i </b>";
		}
		else
		{ 
			echo "<a href='list.php?table=$table&page=$i'> $i </a>";
		}      
   }
?>			
			&nbsp;&nbsp;&nbsp;&nbsp;다음 ▶
				</div>
				<div id="button">
					<a href="list.php?table=<?=$table?>&page=<?=$page?>">
						<img src="img/list.png"> <!-- 목록 아이콘 -->
					</a>&nbsp;
<? 
	// if($userid)
	if($_SESSION['userid'] )
	{
?>
		<a href="write_form.php?table=<?=$table?>">
			<img src="img/write.png"> <!-- 글쓰기 아이콘 -->
		</a>
<?
	}
?>
				</div>
			</div> <!-- page_button -->		
    </div> <!-- list content -->
	<div class="clear"></div>

	</div> <!-- end of col2 -->
  </div> <!-- end of content -->
</div> <!-- end of wrap -->

<footer>
  <div id="footer"><a href="https://www.instagram.com/taperedcoffee/"
    target="_blank">photo by TAPERED COFFEE INSTAGRAM</a></div>
</footer>

</body>
</html>