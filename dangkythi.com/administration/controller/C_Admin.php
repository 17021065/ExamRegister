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

	<?php
		if (isset($_POST['add'])) {
			include '../../core/Connector.php';
			include '../../core/Validation.php';

			$code= test_input($_POST['code']);
			$term= test_input($_POST['term']);
			$date= test_input($_POST['date']);
			$shift= test_input($_POST['shift']);
			$room= test_input($_POST['room']);
			$num= test_input($_POST['num']);


			$sql1 = "call admin_addMonthi('".$code."', '".$term."', '".$date."')";
			$sql2 = "call admin_addPhongThi('".$room."', '".$num."', '".$shift."')";
			$sql3 = "call admin_add_caThi_monThi('".$term."', '".$shift."')";

			mysqli_query($mysqli, $sql1);
			mysqli_query($mysqli, $sql2);
			mysqli_query($mysqli, $sql3);

			header("Location: ../view/ManageExam.php");
		}
	?>
</body>
</html>