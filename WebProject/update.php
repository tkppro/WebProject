<?php
include('connection.php');
session_start();
if (!isset($_SESSION['username']) && !$_SESSION['username'])
{
    header('location: http://localhost/WebProject/login.php');
    $_SESSION['errLogin'] = 'Bạn cần đăng nhập trước!';
}

$query = mysqli_query($conn, "SELECT * FROM account WHERE account_name = '{$_SESSION['username']}'");
$row = mysqli_fetch_assoc($query);
$fullName = $row['full_name'];
$email = $row['email'];

$birthday = $row['birthday'];
$gender = $row['gender'];
$position = $row['position'];


mysqli_close($conn);
?>



<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/main1.css">
        <title>Trang cập nhật thông tin</title>
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
                            <a class="nav-link" href="/WebProject/home-page.php">Home <span class="sr-only">(current)</span></a>
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
                        <div class="card-header">Update Information</div>
                        <?php 
                        if(isset($_SESSION['firstLogin']))
                            echo '<font color="#17b217"><p align="center">' . $_SESSION['firstLogin'] . '</p></font>';?>
                        <div class="card-body">
                            <form method="POST" action="handle-update.php">
                                <div class="form-group row">
                                    <label for="fullName" class="col-sm-4 col-form-label text-md-right">Full Name</label>

                                    <div class="col-md-6">
                                        <input id="fullName" type="text" class="form-control" name="fullName" 
                                        value="<?php echo $fullName;?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-sm-4 col-form-label text-md-right">Email</label>

                                    <div class="col-md-6">
                                        <input id="email" aria-describedby="emailHelp" placeholder="Enter email" class="form-control" type="email" class="form-control" name="email" value="<?php echo $email;?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="birthday" class="col-sm-4 col-form-label text-md-right">Birthday</label>

                                    <div class="col-md-6">
                                        <input id="birthday" type="date" class="form-control " name="birthday" 
                                        value="<?php echo $birthday;?>">
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label for="gender" class="col-sm-4 col-form-label text-md-right">Gender</label>

                                    <div class="col-md-6">
                                        <select id="gender" name="gender" class="form-control">
                                            <option value="Nam">Male</option>
                                            <option value="Nữ">Female</option>
                                        </select>
                                        
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label for="position" class="col-sm-4 col-form-label text-md-right">Position</label>

                                    <div class="col-md-6">
                                        <select id="position" name="position" class="form-control">
                                            <option value="0">Student</option>
                                            <option value="1">Teacher</option>
                                        </select>
                                        
                                    </div>

                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary" name="update-btn">Save</button>
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