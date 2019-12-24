<!DOCTYPE html>
<html>
<body>
	<?php  
		include_once 'record.php';

		class ModelExam
		{
			
			function __construct()
			{}

			public function getExamSchedule($id)
			{
				include '../../core/Connector.php';
				$sql1= "call inDsThi(".$id.")";
				$query1 = mysqli_query($mysqli, $sql1);

				$examSchedule = array("0" => "");

				while ($row = mysqli_fetch_assoc($query1)) {
					include '../../core/Connector.php';
					$sql2= "call inDsThiSinh(".$row['cathi_id'].",".$row['phongthi_id'].",".$row['hocphan_id'].")";
					$query2 = mysqli_query($mysqli, $sql2);

					for ($i = 1; $i <= mysqli_num_rows($query2) ; $i++) {
						$row2=mysqli_fetch_assoc($query2);
						if ($row2['idSinhVien']==$id) {
							$sbd=$i;
						}
					}
				    $record = new Record($row['Mã môn học'], $row['Tên môn học'], $row['Ngày Thi'], $row['cathi'], $row['giờ thi'], $row['Phòng Thi'], $sbd);
				    array_push($examSchedule, $record); 
				}

				return $examSchedule;
			}

		}
	?>
</body>
</html>