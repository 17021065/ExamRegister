<?php session_start(); 
 
if (isset($_SESSION['username'])){
    session_unset();
    session_destroy();
}
?>
<a href="../../index.php">Về trang chủ</a>
