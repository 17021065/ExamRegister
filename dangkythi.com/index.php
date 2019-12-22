<?php 
  session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Trang chủ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
</head>
<body>

  <?php   
    if (isset($_SESSION['username']) && $_SESSION['username']){
          if ($_SESSION['userrole'] == 'sinh vien') {
              echo 'Xin chào '.$_SESSION['fullnameUser']." ";
              echo '<a href="login/controller/C_Logout.php">Đăng xuất</a>';

              echo '<h3><a href="student/controller/C_ExamSchedule.php">Lịch thi</a></h3>
                    <h3><a href="term/controller/cterm.php">Đăng kí thi</a></h3>';
          }else if ($_SESSION['userrole'] == 'admin') {
              echo 'Bạn đang đăng nhập với tư cách quản trị viên ';
              echo '<a href="login/controller/C_Logout.php">Đăng xuất</a>';

              echo '<h3 id="admin"><a href="administration/view/ManageExam.php">Quản lý kì thi</a></h3>';
              echo '<h3 id="admin"><a href="administration/view/ManageRoom.php">Quản lý phòng thi</a></h3>';
          }else {
              echo 'Có lỗi xảy ra';
          }
      }
      else{
          header("Location: login/view/Login.php"); 
      }
    
  ?>
</body>
</html>
