<?php  
	include_once 'Term.php';
	include 'Shift.php';

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

		public function getTermDetail($code){
			$termDetail= $this->getAllTerm();
			return $termDetail[$code];
		}

		public function getExamShift($code){
			$term = $this->getTermDetail($code);
			include('../../core/Connector.php');

			$shiftList = array("0" => '');

			$sql= 'call cathi_hk("HK1 2017-2018")';
			$query= mysqli_query($mysqli, $sql);
			while ($row= mysqli_fetch_assoc($query)) {
				$shift = new Shift($row['tenCaThi'], $row['tenCaThi'], $row['ngay_thi'], $row['kiThi']);
				array_push($shiftList, $shift);
			}

			return $shiftList;
		}

	}
?>