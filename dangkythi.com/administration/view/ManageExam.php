<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Quản lí</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
	<label><button onclick="goBack()">Về trang chủ</button></label>

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
	<script>
		function goBack() {
  			window.history.back();
		}
	</script>
</body>
</html>