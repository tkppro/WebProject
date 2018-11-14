<?php session_start();?>
<!DOCTYPE html>
<html>
  <head>
    <title>Home page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/flickity.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="css/styles.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body>
    
   <div class="header-update">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="#">
          <img class="img-logo-home" src="images/logo.png">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="schedule.php">Schedule</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          
        </ul>
      </div>
    </nav>
  </div>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
            <div class="card-header"><h1>Welcome</h1></div>
            <div class="card-body">
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
            </div>
          </div>
      </div>
    </div>
  </div>

  <div class="hero">
    <div class="carousel js-flickity">
      <div class="carousel-cell" style="background-image: url(images/slider1.jpg);">
      </div>
      <div class="carousel-cell" style="background-image: url(images/slider2.jpg);">
      </div>
      <div class="carousel-cell" style="background-image: url(images/slider3.jpg);">
      </div>
    </div>
  </div>

  <!-- Footer -->
  <section id="footer">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
          <ul class="list-unstyled list-inline social text-center">
            <li class="list-inline-item"><a href="https://www.facebook.com/vnuk.edu.vn/"><i class="fa fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="https://www.instagram.com/vnuk_edu_vn/"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
          </ul>
        </div>
        </hr>
      </div>  
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
          <p>Software Project Management | 16CSE Class</p>
          <p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="http://vnuk.udn.vn/" target="_blank">VN-UK Institute</a></p>
        </div>
        </hr>
      </div>  
    </div>
  </section>
  <!-- ./Footer -->

  <!-- add Javasscript file from js file -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script src="js/flickity.pkgd.min.js"></script>
  <script type="text/javascript" src='js/main.js'></script>   
  </body>
</html>