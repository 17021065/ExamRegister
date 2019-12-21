<!DOCTYPE html>
<html>
<body>
	<?php

	//Khai báo sử dụng session
	session_start();
	 
	//Khai báo utf-8 để hiển thị được tiếng việt
	header('Content-Type: text/html; charset=UTF-8');

	include '../model/M_Login.php';
	 
	//Xử lý đăng nhập
	if (isset($_POST['submit'])) 
	{
	    include '../../core/Validation.php';
	     
	    //Lấy dữ liệu nhập vào
	    $username = test_input($_POST['username']);
	    $password = test_input($_POST['password']);

	    $checker = new LoginChecker();
	    $checker->Check($username, $password);
	}
	
	?>
</body>
</html>