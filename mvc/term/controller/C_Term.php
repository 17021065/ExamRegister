<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
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
				$reg = addslashes($_POST['select']);
				echo "$reg";
			}else{
				echo "register fail!!!!";
			}
		}
	}

	$control = new ManageTerm();
	$control->invoke();
	?>

	
</body>
</html>
