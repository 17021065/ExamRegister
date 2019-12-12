<?php 
  session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Trang chủ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <?php   
    if (isset($_SESSION['username']) && $_SESSION['username']){
          echo 'Bạn đã đăng nhập với tên là '.$_SESSION['username']."<br/>";
          echo 'Click vào đây để <a href="login/model/M_Logout.php">Đăng xuất</a>';
          $_SESSION['check'] = "uncheck";
      }
      else{
          echo 'Bạn chưa đăng nhập';
      }

    

    include_once 'index.html';
  ?>
</body>
</html>
