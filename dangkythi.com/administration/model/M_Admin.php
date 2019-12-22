<?php 

	class ModelAdmin
	{
	
	    public function __construct()
	    {}

	    public function showAllShift(){
	    	include '../../core/Connector.php';
	    	$sql= "call allShiftOfSemester()";
	    	$query = mysqli_query($mysqli, $sql);

	    	while ($row = mysqli_fetch_assoc($query)) {
	    	    echo "<p>".$row['tenKiThi']." | "
	    	    	.$row['maHocPhan']." | "
	    	    	.$row['tenMonThi']." | "
	    	    	.$row['ngay_thi']." | "
	    	    	.$row['tenCaThi']." | "
	    	    	.$row['gio_thi']." | "
	    	    	.$row['Ten phong']."</p>";
	    	}
	    }

	    public function showRoomList(){
	    	include '../../core/Connector.php';
	    	$sql= "call allShiftOfSemester()";
	    	$query = mysqli_query($mysqli, $sql);
	    	while ($row = mysqli_fetch_assoc($query)) {
	    	    echo "<p><a href='Room.php?shift=".$row['cathi_id']."/".$row['phongthi_id']."/".$row['hocphan_id']."'>".$row['tenKiThi']." | "
	    	    	.$row['maHocPhan']." | "
	    	    	.$row['tenMonThi']." | "
	    	    	.$row['ngay_thi']." | "
	    	    	.$row['tenCaThi']." | "
	    	    	.$row['gio_thi']." | "
	    	    	.$row['Ten phong']."</a></p>";
	    	}
	    }
	}
?>