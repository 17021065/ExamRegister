<?php 

	echo "<p>Mã học phần: <b>".$term->code."</b></p>";
	echo "<p>Tên học phần: <b>".$term->name."</b></p>";

	include '../../core/Connector.php';
	if (!isset($_SESSION['username'])) {
		echo 'Bạn phải đăng nhập để sử dụng chức năng này';
	}else{
		$sql='call xuatLichThi('.$_SESSION['userID'].", '".$term->id."')";
		$query = mysqli_query($mysqli, $sql);
		if (mysqli_num_rows($query)==0) {
			echo "Bạn không đăng kí học phần này";
		}else{
			echo "<p>Danh sách ca thi<p>";
			echo "<form action='../controller/C_Term.php' method='POST'>";
			for($i=1; $i < count($listOfShifts); $i++){
				echo "<p>".$i." | ".$listOfShifts[$i]->nameShift." | "
				.$listOfShifts[$i]->nameRoom." | "
				.$listOfShifts[$i]->time." | "
				.$listOfShifts[$i]->date." | "
				.$listOfShifts[$i]->semester."<input type='radio' name='select' 
																	id='".$listOfShifts[$i]->idShift."/"			.$listOfShifts[$i]->idRoom.
																	"' value='".$term->id."/"
																	.$listOfShifts[$i]->idShift."/"
																	.$listOfShifts[$i]->idRoom."'></p>";
			}
			$row=mysqli_fetch_assoc($query);
			echo '<script type="text/javascript">
	                  	$(document).ready(function(){
	                    	document.getElementById("'.$row['cathi_id'].'/'.$row['phongthi_id'].'").checked = true;
	                  	});
	                </script>';
			
			echo "<input type='submit' name='register' value='Đăng kí'>
			</form><br>";
		}
	}

	
	include 'TermDetail.html';
?>
