<?php  
	include_once 'term.php';
	include 'shift.php';

	class ModelTerm
	{
		
		function __construct()
		{}

		public function getAllTerm(){
			include('../../core/Connector.php');

			$termList = array();

			$sql= 'SELECT * FROM hocphan';
			$query= mysqli_query($mysqli, $sql);
			while ($row= mysqli_fetch_assoc($query)) {
				$term = new Term($row['id'], $row['code'], $row['name']);
				array_push($termList, $term);
			}

			return $termList;
		}

		public function getSelectedTerm($code){
			$termSelected = $this->getAllTerm();
			for ($i=0; $i < count($termSelected) ; $i++) { 
				if ($termSelected[$i]->code == $code) {
					return $termSelected[$i];
				}
			}
		}

		public function getExamShift($num){
			$term = $this->getSelectedTerm($num);
			include('../../core/Connector.php');

			$shiftList = array("0" => '');

			$sql= 'CALL `cathi_hk`("'.$term->name.'")';
			$query = mysqli_query($mysqli, $sql);
			while ($row= mysqli_fetch_array($query)) {
				$shift = new Shift($row['cathi_id'], $row['tenCaThi'], $row['phongthi_id'], $row['Ten phong'], $row['gio_thi'], $row['ngay_thi'], $row['tenKiThi']);
				array_push($shiftList, $shift);
			}

			return $shiftList;
		}

	}
?>