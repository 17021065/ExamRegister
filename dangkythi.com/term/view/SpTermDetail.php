<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<?php 

	echo "<p>Mã học phần: <b>".$term->code."</b></p>";
	echo "<p>Tên học phần: <b>".$term->name."</b></p>";

	include '../../core/Connector.php';
	if (!isset($_SESSION['username'])) {
		echo 'Bạn phải đăng nhập để sử dụng chức năng này';
	}else{
		$sql='call kiemTraMonHoc('.$term->id.", ".$_SESSION['userID'].")";
		$query = mysqli_query($mysqli, $sql);
		$row = mysqli_fetch_assoc($query);
		if (mysqli_num_rows($query)==0) {
			echo "Bạn không đăng kí học phần này";
		}else if (mysqli_num_rows($query)==1) {
			if ($row['check_']==0) {
				echo "Bạn không đủ điều kiện dự thi";
			}else if ($row['check_']==1){
				echo "<p>Danh sách ca thi<p>";
				echo "<form action='../controller/C_Term.php' method='POST'>";
				for($i=1; $i < count($listOfShifts); $i++){
					include '../../core/Connector.php';
					$sql1="call inDsThiSinh(".$listOfShifts[$i]->idShift.", ".$listOfShifts[$i]->idRoom.", ".$term->id.")";	
					$query1 = mysqli_query($mysqli, $sql1);
					$numRow = mysqli_num_rows($query1);
					echo "<p>".$i." | ".$listOfShifts[$i]->nameShift." | "
					.$listOfShifts[$i]->nameRoom." | "
					.$listOfShifts[$i]->time." | "
					.$listOfShifts[$i]->date." | "
					.$listOfShifts[$i]->semester." | "
					.$numRow."<input type='radio' name='select' id='".$listOfShifts[$i]->idShift."/" 													 .$listOfShifts[$i]->idRoom.
																	"' value='".$term->id."/"
																	 .$listOfShifts[$i]->idShift."/"
																	 .$listOfShifts[$i]->idRoom."'></p>";
				}

				include '../../core/Connector.php';

				$sql2='call xuatLichThi('.$_SESSION['userID'].", ".$term->id.")";
				$query2 = mysqli_query($mysqli, $sql2);
				$row2 = mysqli_fetch_assoc($query2);
				echo '<script type="text/javascript">
		                  	$(document).ready(function(){
		                    	document.getElementById("'.$row2['cathi_id'].'/'.$row2['phongthi_id'].'").checked = true;
		                  	});
		                </script>';
				
				echo "<input type='submit' name='register' value='Đăng kí'>
				</form><br>";
			}else {echo 'Có lỗi xảy ra';}
		}else{echo 'Có lỗi xảy ra';}
	}
	
	include 'TermDetail.html';
?>

</body>
</html>

