<!DOCTYPE html>
<html>
<body>
	<?php  
		include_once 'Record.php';

		class ModelExam
		{
			
			function __construct()
			{}

			public function getExamSchedule($id)
			{
				include '../../core/Connector.php';
				$sql= "call inDsThi(".$id.")";
				$query = mysqli_query($mysqli, $sql);

				$examSchedule = array("0" => "");

				while ($row = mysqli_fetch_assoc($query)) {
				    $record = new Record($row['Mã môn học'], $row['Tên môn học'], $row['Ngày Thi'], $row['cathi'], $row['giờ thi'], $row['Phòng Thi']);
				    array_push($examSchedule, $record); 
				}

				return $examSchedule;
			}

		}
	?>
</body>
</html>