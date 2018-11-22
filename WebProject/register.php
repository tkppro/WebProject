<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Trang đăng ký</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
        <img class="img-logo" src="images/logo.png">
    </header>

   <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="card-header"></div>

                        <div class="card-body">
                            <form method="POST" action="handle-register.php">
                                <div class="form-group row">
                                    <label for="userName" class="col-sm-4 col-form-label text-md-right">User name</label>

                                    <div class="col-md-6">
                                        <input id="userName" type="userName" class="form-control" name="userName" value="" required autofocus>
                                        <!-- <?php if (isset($_SESSION['errLengthUsername']))
                                            echo '<font color="#FF0000"><p align="center">' . $_SESSION['errLengthUsername'] . '</p></font>';
                                        ?> -->
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required>
                                    </div>
                                </div>

                                 <div class="form-group row">
                                    <label for="rePassword" class="col-md-4 col-form-label text-md-right">Re-Password</label>

                                    <div class="col-md-6">
                                        <input id="rePassword" type="password" class="form-control" name="rePassword" required>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary" name="">
                                            Register
                                        </button>
                                        <a class="btn btn-success" href="login.php">
                                            Login
                                        </a>
                                        <!-- <?php 
                                        if (isset($_SESSION['errBlankReg']))
                                            echo '<font color="#FF0000"><p align="center">' . $_SESSION['errBlankReg'] . '</p></font>';
                                        ?> -->
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src='js/main.js'></script>
</body>
</html>