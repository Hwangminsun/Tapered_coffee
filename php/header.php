<?
	session_start();
?>
<!doctype html>
<html lang="ko">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>html5문서</title>
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/base.css">
		<link rel="stylesheet" href="css/condition.css">

		<style>
		#header {height:100px;}
		#top_login span {padding:0 10px;}
		#top_login {float:right;margin:10px 10px 0 0;}
		#menu {width:100%; height:50px;line-height:50px; background:#000;}
		#menu ul {display:flex; text-align:center; width:50%; margin:0 auto;}
		#menu ul li {width:33.33%;}
		#menu ul li a {color:#fff;display:inline-block;}
		

		</style>
			
	</head>
	<body>
	<div id="header">
    <? include "top_login1.php"; ?>
	</div>  
	<nav id="menu">
	<ul class="menu">
	<li><a href="#">MENU1</a></li>
		<li><a href="#">MENU2</a></li>
			<li><a href="#">MENU3</a></li>
				<li><a href="board.html">Q&amp;A</a></li>
	</ul>
	</nav>
	
  

</body>
</html>