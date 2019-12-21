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
				$sql="call sv_dkThi(".$shiftReg['1'].", ".$_SESSION['userID'].", ".$shiftReg['0'].", ".$shiftReg['2'].")";
				$query = mysqli_query($mysqli, $sql);
				echo "registered ".$shiftReg['1']." ".$_SESSION['userID']." ".$shiftReg['0']." ".$shiftReg['2']."";
			}

		}
	}


	$control = new ManageTerm();
	$control->invoke();
	?>

	
</body>
</html>
