<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Home page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body>
    <?php 
    if (isset($_SESSION['username']) && $_SESSION['username']){
      echo 'Bạn đã đăng nhập với tên là '.$_SESSION['username']."<br/>";
      echo 'Click vào đây để <a href="update.php">Update</a>';
      echo 'Click vào đây để <a href="logout.php">Logout</a>';
   }
    else{
      echo 'Bạn chưa đăng nhập <a href="login.php">Login</a>';
   }
   ?>
    <img class="img-logo-home" src="images/logo.png">
    <div class="topnav">
      <a href="#" class="active">Home</a>
      <a href="#">Scheduel</a>
      <a href="#">Information</a>
    </div>

  <div><h1>Teacher</h1></div>
  
  <!-- add Javasscript file from js file -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src='js/main.js'></script>   
  </body>
</html>