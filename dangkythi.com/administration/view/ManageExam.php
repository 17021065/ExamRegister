<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Quản lí kỳ thi</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="../../core/script.js"></script>
</head>
<body>
	<label><button onclick="GotoHomePage()">Về trang chủ</button></label>

	<br>
	<br>

	<form action="../controller/C_Admin.php" method="POST">
		<label><input type="text" name="semester" placeholder="Kì thi"></label>
		<label><input type="text" name="code" placeholder="Mã học phần"></label>
		<label><input type="text" name="term" placeholder="Học phần"></label>
		<label><input type="text" name="date" placeholder="Ngày thi"></label>
		<label><input type="text" name="shift" placeholder="Ca thi"></label>
		<label><input type="text" name="room" placeholder="Phòng thi"></label>
		<label><input type="text" name="num" placeholder="Số máy"></label>

		<br>
		<br>

		<input type="submit" name="add" value="Thêm">
	</form>
	<br>
	<?php
		include '../model/M_Admin.php';
		$adminShift = new ModelAdmin();
		$adminShift->showAllShift();
	?>
</body>
</html>