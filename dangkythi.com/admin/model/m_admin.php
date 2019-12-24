<?php 

	class ModelAdmin
	{
	
	    public function __construct()
	    {}

	    public function showAllShift(){
	    	include '../../core/Connector.php';
	    	$sql= "call allShiftOfSemester()";
	    	$query = mysqli_query($mysqli, $sql);
	    	return $query;
	    }

	    public function showRoomList(){
	    	include '../../core/Connector.php';
	    	$sql= "call allShiftOfSemester()";
	    	$query = mysqli_query($mysqli, $sql);
	    	return $query;
	    }

	    public function showStuTerm(){
	    	include '../../core/Connector.php';
	    	$sql= "call admin_in_SVPH()";
	    	$query = mysqli_query($mysqli, $sql);
	    	return $query;
	    }

	}
?>