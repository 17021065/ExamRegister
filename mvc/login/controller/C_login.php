<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<h2>Đăng nhập</h2><br>
	<form action="../model/M_LogIn.php" method="POST">
		<label><input type="text" name="username" size="50" placeholder="Mã số sinh viên"></label><br>
		<label><input type="password" name="password" size="50" placeholder="Mật khẩu"></label><br>

		<input type="submit" name="submit" value="Đăng nhập"><br>
	</form>
	<a href="../../index.php">Về trang chủ</a>
	
</body>
</html>