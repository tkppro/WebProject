<?php session_start();?>
<!DOCTYPE html>
<html>
  <head>
    <title>Home page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
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
                  <a class="nav-link" href="#">Features</a>
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
                        <div class="card-header"><h1>Teacher</h1></div>

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
  
  <!-- add Javasscript file from js file -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src='js/main.js'></script>   
  </body>
</html>