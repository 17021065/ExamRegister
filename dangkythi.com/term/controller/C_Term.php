<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
	<?php  
	include_once '../model/M_Term.php';

	class ManageTerm{
		public function invoke(){
			
			if (isset($_GET['termCode'])) {
				$modelTerm = new ModelTerm();
				$term = $modelTerm->getTermDetail($_GET['termCode']);
				
				$listOfShifts = $modelTerm->getExamShift($_GET['termCode']);

				include_once '../view/SpTermDetail.php';
			}else{
				$modelTerm = new ModelTerm();
				$listOfTerms = $modelTerm->getAllTerm();

				include_once '../view/SpTermList.php';
			}

			if (isset($_POST['register'])) {
				$shiftReg = explode("/", $_POST['select']);
				include '../../core/Connector.php';
				$sql1="call inDsThiSinh('".$shiftReg['1']."', '".$shiftReg['2']."', '".$shiftReg['0']."')";
				$query1=mysqli_query($mysqli, $sql1);
				$recent=mysqli_num_rows($query1);

				include '../../core/Connector.php';	
				$sql2= "SELECT `number_computer` FROM `phongthi` WHERE id = ".$shiftReg['2']."";
				$query2=mysqli_query($mysqli, $sql2);
				$row=mysqli_fetch_assoc($query2);

				echo $recent;
				echo $row['number_computer'];

				if ($recent>=$row['number_computer']) {
					echo '<script>
						$(document).ready(function(){
  							alert("Ca thi đã đầy");
						});
					</script>';
				}else{
					echo '<script>
						$(document).ready(function(){
  							alert("Đăng ký thành công");
						});
					</script>';
					$sql="call sv_dkThi(".$shiftReg['1'].", ".$_SESSION['userID'].", ".$shiftReg['0'].", ".$shiftReg['2'].")";
					mysqli_query($mysqli, $sql);
				}
	
			}

		}
	}


	$control = new ManageTerm();
	$control->invoke();
	?>
</body>
</html>
