<?php 
	session_start()
?>
<!DOCTYPE html>
<html>
<head>
	<title>Controller</title>
	<link rel="stylesheet" type="text/css" href="../view/FormatDSsthi.css">
</head>
<body>	
	<?php  
		include_once '../model/M_ExamSchedule.php';

		class ManageSchedule 
		{
			
			public function invoke()
			{
				if (isset($_SESSION['username'])) {
					$_schedule = new ModelExam();
					$schedule = $_schedule->getExamSchedule($_SESSION['userID']);

					include_once '../view/Schedule.php';
				}else{
					echo 'Bạn chưa đăng nhập';
				}
				
			}
		}

		$control = new ManageSchedule();
		$control->invoke();
	?>

</body>
</html>