<!DOCTYPE html>
<html>
<head>
	<title>Quản lí phòng thi</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../core/Script.js"></script>
</head>
<body>
		<label><button onclick="GotoHomePage()">Về trang chủ</button></label>

	<br>
	<br>

	<?php
		include '../model/M_Admin.php';
		$adminShift = new ModelAdmin();
		$adminShift->showRoomList();
	?>
</body>
</html>