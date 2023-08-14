 <?
    if(!$_SESSION['username'] )
	{
?>
        <li>
					<a href="php/login_form.php">
						<i class="fa-solid fa-arrow-right-to-bracket"></i>
					</a>
				</li>
        <li>
					<a href="php/login_form.php">Login</a>
				</li>
<?
	}
	else
	{
?>

				<li>
					<a href="php/member_form_modify.php">
					id: <?=$_SESSION['userid']?> |</a>
				</li>
        <li>
					<a href="php/logout.php">Logout</a>
				</li>
<?
	}
?>