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

		if (isset($_POST['add2'])) {
			include '../../core/Connector.php';
			include '../../core/Validation.php';

			$stu= test_input($_POST['stu']);
			$term= test_input($_POST['term']);
			$_condition= test_input($_POST['condition']);

			if ($_condition == "Đạt") {
				$condition= 1;
			}else{
				$condition= 0;
			}

			$sql1 = "call admin_addSV_HP('".$stu."', '".$term."', ".$condition.")";

			mysqli_query($mysqli, $sql1);

			header("Location: ../view/m_student_term.php");
		}	

		if (isset($_POST['add3'])) {
			include '../../core/Connector.php';
			include '../../core/Validation.php';

			$mssv= test_input($_POST['mssv']);
			$name= test_input($_POST['name']);
			$class= test_input($_POST['class']);
			$date= test_input($_POST['date']);
			//$shift= test_input($_POST['shift']);
			//$room= test_input($_POST['room']);
			//$num= test_input($_POST['num']);

			$sql1 = "call admin_add_Tk('".$mssv."', '".$class."', '".$date."', '".$name."')";

			mysqli_query($mysqli, $sql1);
			//mysqli_query($mysqli, $sql2);
			//mysqli_query($mysqli, $sql3);

			header("Location: ../view/m_acc.php");
		}	
	?>
</body>
</html>