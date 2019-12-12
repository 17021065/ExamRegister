<!DOCTYPE html>
<html>
<head>
	<title>Controller</title>
	<link rel="stylesheet" type="text/css" href="../../term/view/StyleTermList.css">
</head>
<body>	
	<?php  
		include_once '../model/M_Student.php';

		class ManageStudent 
		{
			
			public function invoke()
			{
				if (isset($_GET['stuID'])) {
					$modelStudent = new ModelStudent();
					$student = $modelStudent->getStudentDetail($_GET['stuID']);

					include_once '../view/StudentDetail.html';
				}else{
					$modelStudent = new ModelStudent();
					$studentList = $modelStudent->getAllStudent();

					include_once '../view/StudentList.html';
				};
			}
		}

		$control = new ManageStudent();
		$control->invoke();
	?>

</body>
</html>