<!DOCTYPE html>
<html>
<head>
	<title>Danh sách môn học</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="StyleTermList.css">
</head>
<body>
	<?php 
		for($i=0; $i < count($termList); $i++){
			echo "<p><a href='?code=".$termList[$i]->code."'> [".$termList[$i]->code."] ".$termList[$i]->name."</a></p>";
		}
	?>

	<br>
	<p><a href="../../index.php">Trang chủ</a></p>

</body>
</html>
