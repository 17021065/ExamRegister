<!DOCTYPE html>
<html>
<body>
	<?php

		class LoginChecker
		{

		    public function __construct()
		    {}

		    public function Check($username, $password){		

			    /*
			    if (!$username || !$password) 
			    {
			        $_SESSION['fault'] = '<script>
						$(document).ready(function(){
  							alert("Chưa nhập đủ thông tin tài khoản");
						});
					</script>';
			        header("Location: ../view/Login.php");
			        exit;
			    } 
			    */

			    //Mã hóa pasword
			    $password = md5($password);

			    include '../../core/Connector.php';
			     
			    $sql="SELECT * FROM user WHERE user_name='$username'";
			    $query = mysqli_query($mysqli, $sql);

			    if (mysqli_num_rows($query) == 0) 
			    {
			       	$_SESSION['fault'] = '<script>
						$(document).ready(function(){
  							alert("Tài khoản không tồn tại");
						});
					</script>';
			        header("Location: ../view/Login.php");
			        exit;
			    }

			    $row = mysqli_fetch_array($query);
			    if ($password != md5($row['pass_word'])) 
			   	{
			    	$_SESSION['fault'] = '<script>
						$(document).ready(function(){
  							alert("Sai mật khẩu");
						});
					</script>';
				    header("Location: ../view/Login.php");
				    exit;
		    	}
			     
			    if ($row['role']=='sinh vien') {

			    	$sql2="SELECT * FROM user join sinhvien on user.id = sinhvien.user_id WHERE user_name='$username'";

			    	$query2 = mysqli_query($mysqli, $sql2);
			    	$row2 = mysqli_fetch_assoc($query2);
			    	$_SESSION['username'] = $username;
					$_SESSION['userID'] = $row2['id'];
					$_SESSION['fullname'] = $row2['name'];
					$_SESSION['role'] = $row2['role'];
					header("Location: ../../index.php");
			    	
			    }else if ($row['role'] == 'admin') {

			    	$_SESSION['username'] = $username;
					$_SESSION['userID'] = $row['id'];
					$_SESSION['fullname'] = $row['name'];
					$_SESSION['role'] = $row['role'];
					header("Location: ../../index.php");
				   
			    }
			     
			    
		    }

		}
	?>
</body>
</html>