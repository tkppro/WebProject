<?php session_start(); 
 
if (isset($_SESSION['username'])){
    unset($_SESSION['username']); // xóa session login
    
}
header('location: http://localhost/WebProject/login.php');

?>
