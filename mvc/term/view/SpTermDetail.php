<?php 
	session_start();

	echo "<p>Mã học phần: <b>".$term->code."</b></p>";
	echo "<p>Tên học phần: <b>".$term->name."</b></p>";

	echo "<p>Danh sách ca thi<p>";
	echo "<form action='../controller/C_Term.php' method='POST'>";
	for($i=1; $i < count($listOfShifts); $i++){
			echo "<p>".$i." | ".$listOfShifts[$i]->name." | "
			.$listOfShifts[$i]->time." | "
			.$listOfShifts[$i]->date." | "
			.$listOfShifts[$i]->semester."<input type='checkbox' name='select'></p>";
		}
	echo "<input type='submit' name='register' value='be registered'>
	</form>";	

	
	echo $_SESSION['check'];
	include 'TermDetail.html';
?>
