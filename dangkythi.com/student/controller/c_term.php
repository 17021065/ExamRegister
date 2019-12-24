<?php session_start(); ?>

	<?php

	class ManageTerm{
		public function invoke(){
			
			if (isset($_GET['code'])) {
				echo 'code';
				$url = "Location: ../view/termdtl.php?code=".$_GET['code']."&result=no";
				header($url);
			}else{
				header("Location: ../view/termlst.php");
				echo 'nocode';
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
					$url="Location: ../view/termdtl.php?code=".$reginfo['3']."&result=fail";
					header($url); 
				}else{
					$sql3="call sv_dkThi(".$reginfo['1'].", ".$_SESSION['userID'].", ".$reginfo['0'].", ".$reginfo['2'].")";
					mysqli_query($mysqli, $sql3);

					$url="Location: ../view/termdtl.php?code=".$reginfo['3']."&result=success";
					header($url); 
				}
	
			}
		}
	}


	$control = new ManageTerm();
	$control->invoke();
	?>
