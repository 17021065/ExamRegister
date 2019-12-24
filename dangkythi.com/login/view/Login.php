<?php
	session_start();
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Đăng nhập</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="../../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="../../css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="../../css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="../../css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="../../css/jquery-ui.css"> 
<!-- jQuery -->
<script src="../../js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link rel="stylesheet" href="../../css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
	<div class="main-wthree">
	<div class="container">
	<div class="sin-w3-agile">
		<h2>Đăng nhập</h2>
		<?php if(isset($_SESSION['fault'])){echo $_SESSION['fault'];} ?>
		<form action="../controller/c_login.php" method="POST">
			<div class="username">
				<span class="username">Tài Khoản:</span>
				<input type="text" name="username" class="name" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
			<div class="password-agileits">
				<span class="username">Mật Khẩu:</span>
				<input type="password" name="password" class="password" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
			<div class="rem-for-agile">
				<a href="#">Quên mật khẩu?</a><br>
			</div>
			<div class="login-w3">
					<input type="submit" name="submit" class="login" value="Đăng nhập">
			</div>
			<div class="clearfix"></div>
		</form>
			<!--<div class="back">
					<a href="index.html">Về trang chủ</a>
				</div>
			-->
	</div>
	</div>
	</div>
</body>
</html>