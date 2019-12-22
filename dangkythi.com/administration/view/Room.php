<!DOCTYPE html>
<html>
<head>
	<title>Danh sách thí sinh</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<?php  
			include '../../core/Connector.php';
			$shift=explode("/", $_GET['shift']);
			$sql="call inDsThiSinh('".$shift['0']."', '".$shift['1']."', '".$shift['2']."')";
			$query = mysqli_query($mysqli, $sql);
			$i = 1;
			while ($row = mysqli_fetch_assoc($query)) {
	    	    echo "<p>".$i." | "
	    	    	.$row['mssv']." | "
	    	    	.$row['Ten Sv']."</p>";
	    	    $i++;
	    	}	
	?>
	<a href="ManageRoom.php">Quay lại</a>
</body>
</html>