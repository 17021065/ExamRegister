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
	include_once '../model/m_term.php';

	class ManageTerm{
		public function invoke(){
			
			if (isset($_GET['code'])) {
				$modelTerm = new ModelTerm();
				$term = $modelTerm->getSelectedTerm($_GET['code']);
				
				$shiftList = $modelTerm->getExamShift($_GET['code']);

				include_once '../view/termdtl.php';
			}else{
				$modelTerm = new ModelTerm();
				$termList = $modelTerm->getAllTerm();

				include_once '../view/termlst.php';
			}

			if (isset($_POST['register'])) {
				$reginfo = explode("/", $_POST['select']);
				include '../../core/Connector.php';
				$sql1="call inDsThiSinh('".$reginfo['1']."', '".$reginfo['2']."', '".$reginfo['0']."')";
				$query1=mysqli_query($mysqli, $sql1);
				$recent=mysqli_num_rows($query1);

				include '../../core/Connector.php';	
				$sql2= "SELECT `number_computer` FROM `phongthi` WHERE id = ".$reginfo['2']."";
				$query2=mysqli_query($mysqli, $sql2);
				$max=mysqli_fetch_assoc($query2);

				if ($recent>=$max['number_computer']) {
					$url="Location: cterm.php?code=".$reginfo['3']."&result=fail";
					header($url); 
				}else{
					$sql3="call sv_dkThi(".$reginfo['1'].", ".$_SESSION['userID'].", ".$reginfo['0'].", ".$reginfo['2'].")";
					mysqli_query($mysqli, $sql3);

					$url="Location: cterm.php?code=".$reginfo['3']."&result=success";
					header($url); 
				}
	
			}

			if (isset($_GET['result'])){
				if ($_GET['result'] == "fail") {
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
				}
			}

		}
	}


	$control = new ManageTerm();
	$control->invoke();
	?>
</body>
</html>
