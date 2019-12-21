<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		.error {color: #FF0000;}
	</style>
</head>
<body>
	<h1>Đăng nhập</h1>
	<span class="error"><?php if(isset($_SESSION['fault'])){echo $_SESSION['fault'];} ?></span>
	<form action="../controller/C_Login.php" method="POST">
		<label><input type="text" name="username" placeholder="Mã số sinh viên"></label><br>
		<label><input type="password" name="password" placeholder="Mật khẩu"></label><br>

		<input type="submit" name="submit" value="Đăng nhập"><br>
	</form>
</body>
</html>