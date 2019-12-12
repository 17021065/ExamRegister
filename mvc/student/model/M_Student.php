<!DOCTYPE html>
<html>
<body>
	<?php  
		include_once 'Student.php';

		class ModelStudent
		{
			
			function __construct()
			{}

			public function getAllStudent()
			{
				# code...
				return array(
					"1" => new Student(1, "Nguyen Van A", 18, "K62IE1"),
					"2" => new Student(2, "Dang Van B", 19, "K62IE2"),
					"3" => new Student(3, "Tran Van C", 20, "K62IE3"),
				);
			}

			public function getStudentDetail($stuID)
			{
				# code...
				$allStudent = $this->getAllStudent();
				return $allStudent[$stuID];
			}
		}
	?>
</body>
</html>