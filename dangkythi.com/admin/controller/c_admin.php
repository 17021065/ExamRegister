<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
		if (isset($_POST['add'])) {
			include '../../core/Connector.php';
			include '../../core/Validation.php';

			$semester= test_input($_POST['semester']);
			$code= test_input($_POST['code']);
			$term= test_input($_POST['term']);
			$date= test_input($_POST['date']);
			$shift= test_input($_POST['shift']);
			$room= test_input($_POST['room']);
			$num= test_input($_POST['num']);

			$sql1 = "call admin_addHK('".$semester."')";
			$sql2 = "call admin_addMonthi('".$code."', '".$term."', '".$date."')";
			$sql3 = "call admin_addPhongThi('".$room."', '".$num."', '".$shift."')";
			$sql4 = "call admin_add_caThi_monThi('".$term."', '".$shift."')";

			mysqli_query($mysqli, $sql1);
			mysqli_query($mysqli, $sql2);
			mysqli_query($mysqli, $sql3);
			mysqli_query($mysqli, $sql4);

			header("Location: ../view/m_exam.php");
		}else{
			echo 'fail';
		}
	?>
</body>
</html>