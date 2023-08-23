<?
		session_start();
?>

<!doctype html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>TAPERED COFFEE</title>
	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/member_form.css">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
	<script src="../js/jquery-1.11.2.min.js"></script>
  	<script src="../js/menu.js"></script>
	<script src="https://kit.fontawesome.com/dbb7afa741.js" crossorigin="anonymous"></script>
  	<script src="../js/bottomnav.js"></script>
<script>

//let reg_pw2 = /(?=.*[a-zA-ZS])(?=.*?[#?!@$%^&*-]).{6,24}/; // 문자와 특수문자 조합의 6~24 자리
// const re1 = /^[a-zA-Z0-9]{4,12}$/ ;  //가능하다
//const re1 =/^(?=.*[a-zA-Z])(?=.*[!@#$%^*+=-])(?=.*[0-9]).{6,10}$/;
//const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//const re=/^[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,3}$/;

// id 중복확인
function check_id()
	{
		window.open("check_id.php?id=" + document.member_form.id.value,
				"IDcheck",
				"left=200,top=200,width=200,height=60,scrollbars=no,resizable=yes");
	}

	// 회원가입 정보 순서대로 확인 시작
	function check_input()
	{

		// 아이디, 비밀번호 형식 지정
		const re1 =/^(?=.*[a-zA-Z])(?=.*[!@#$%^*+=-])(?=.*[0-9]).{6,10}$/;
		
		// 회원가입 폼의 name=id 값 지정
		const id = document.member_form.id.value;
		
		if (!document.member_form.id.value)
			{
				alert("아이디를 입력하세요");
				document.member_form.id.focus();
				return;

	} else if (!re1.test(id)){
						alert("6~10자의 영문자, 숫자, 특수기호 혼합해서 사용할 수 있습니다");
						document.member_form.id.focus();
						return;
	}

	if (!document.member_form.pass.value)
	{
			alert("비밀번호를 입력하세요");
			document.member_form.pass.focus(); //해당 칸에 커서 위치
			return;
	}

	if (!document.member_form.pass_confirm.value)
	{
		alert("비밀번호확인을 입력하세요");
		document.member_form.pass_confirm.focus();
		return;
	}

	if (!document.member_form.name.value)
	{
		alert("이름을 입력하세요");
		document.member_form.name.focus();
		return;
	}

	if (!document.member_form.hp.value)
	{
		alert("휴대폰번호를 입력하세요");
		document.member_form.hp.focus();
		return;
	}

	if (!document.member_form.email.value)
	{
		alert("이메일을 입력하세요");
		document.member_form.email.focus();
		return;
	}

	if (document.member_form.pass.value !=
			document.member_form.pass_confirm.value)
	{
		alert("비밀번호가 일치하지 않습니다.\n다시 입력해주세요.");
		document.member_form.pass.focus();
		document.member_form.pass.select();
		return;
	}

	const hp1=document.member_form.hp.value;

	const re2=/^01([0|1|6|7|9])?([0-9]{3,4})?([0-9]{4})$/;

// 하이픈 제거 코드
// const replaceHyphen = function(hp1) {

// return re2.toString().replace(/-/gi, "");


	if (!re2.test(hp1)) {
			alert('휴대전화번호를 다시 입력해주세요.');
			document.member_form.hp.focus();
			return false;
	}

	const email = document.member_form.email.value;

	const re=/^[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,3}$/;

	if (!re.test(email)) {
			alert("@를 포함해서 입력해주세요");
		return false;
		}

		document.member_form.submit();
}

</script>		
</head>

<body>
<div id="skip-menu">
    <a href="#menu_wrap">&#187; 메뉴 바로가기</a>
    <a href="#group">&#187; 내용 바로가기</a>
  </div>

  <!-- header -->
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
        <li><a href="login_form.php"><i class="fa-solid fa-arrow-right-to-bracket"></i></a></li>
        <li><a href="login_form.php">Login</a></li>
        <li><a href="javascript:void(0)"><i class="fa-solid fa-file-pen"></i></li>
        <li><a href="#contact">Service</a></li>
        <li><a href="javascript:void(0)"><i class="fa-solid fa-map"></i></a></li>
        <li><a href="#cafe_resize">Location</a></li>
    </ul>
  </header>

  <!-- 모바일 버전 사용 -->
  <div class="bottomNav" id="usp_sell">
    <ul>
      <li><a href="login_form.php"><i class="fa-solid fa-arrow-right-to-bracket"></i></a></li>
      <li><a class="map" href="#cafeloca"><i class="fa-solid fa-map"></i></a></li>
      <li><a href="#contact"><i class="fa-solid fa-file-pen"></i></a></li>
      <li><a href="login_form.php">Login</a></li>
      <li><a href="javascript:void(0)">Location</a></li>
      <li><a href="javascript:void(0)">Service</a></li>
    </ul>
  </div>

  <nav id="menu-wrap"> <!--메뉴 전체-->
      <ul class="menu">
        <li><a href="#" onclick="return false;">Menu</a></li>
        <li><a href="#" onclick="return false;">Store</a></li>
        <li><a href="#" onclick="return false;">Brand</a></li>
      </ul>   
  </nav>

  <aside>
    <div class="go-top"></div>
  </aside>
  <!-- header 끝 -->

<section>
	<h2>JOIN US &nbsp;| &nbsp;회원가입</h1>
	
	<div id="join_mem">
		<form name="member_form" method="post" action="insert.php">
			<div id="form_join">
				
				<div id="join1">
					<ul>
						<li>
							<div id="id1">
								<input type="text" name="id" placeholder="*아이디">
							</div>
							<div id="id2">
									<button type="button" onclick="check_id()">
								중복확인</button>
							</div>
						</li>
						<li><input type="password" name="pass" placeholder="*비밀번호"></li>
						<li><input type="password" name="pass_confirm" placeholder="*비밀번호 확인"></li>
						<li><input type="text" name="name" placeholder="*이름"></li>
						<li><input type="tel" class="hp" name="hp" placeholder="*휴대폰		- 없이 입력해주세요."></li>
						<li><input type="email" class="email1" name="email" placeholder="*Email		 @ 를 포함하여 입력해주세요."></li>
					</ul>
				</div>

				<div id="must"> * 는 필수 입력항목입니다.</div>
			</div>
			
			<div id="button">
				<button onclick="check_input()">가입하기</button>
			</div>
		</form>
	</div>
</section>

<footer>
  <div id="footer"><a href="https://www.instagram.com/taperedcoffee/"
    target="_blank">photo by TAPERED COFFEE INSTAGRAM</a></div>
</footer>

</body>
</html>