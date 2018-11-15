<?php
//Khai báo sử dụng session
session_start();
include('connection.php');
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');

$username = $password = '';
// $query = mysqli_query($conn, "SELECT * FROM account WHERE account_name = '$username'");
// $row = mysqli_fetch_assoc($query);

if(isset($_SESSION['username']) && $_SESSION['username'])
{
    header('location: http://localhost/WebProject/home-page.php');
}

//Xử lý đăng nhập
if (isset($_POST['dangnhap'])) 
{
    unset($_SESSION['errLogin']);
    //Kết nối tới database
    
     
    //Lấy dữ liệu nhập vào
    $username = addslashes($_POST['userName']);
    $password = addslashes($_POST['password']);
     
    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$username || !$password) {
        //echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        //exit;
    }
     
    // mã hóa pasword
    $password = hash('sha512', $password);
     
    //Kiểm tra tên đăng nhập có tồn tại không
    $query = mysqli_query($conn, "SELECT account_name, account_password FROM account WHERE account_name='$username'");
    if (mysqli_num_rows($query) == 0) {
        //echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        //exit;
    }
     
    //Lấy mật khẩu trong database ra
    $row = mysqli_fetch_assoc($query);
    
    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($password != $row['account_password']) {
        //echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        //exit;
    }

    $checkQuery = mysqli_query($conn, "SELECT account_name, account_password FROM account WHERE account_name='$username' AND account_password = '$password'");
    
    if(mysqli_num_rows($checkQuery) > 0) 
    {
        $_SESSION['username'] = $username;
        $query = mysqli_query($conn, "SELECT * FROM account WHERE account_name = '$username'");
        $row = mysqli_fetch_assoc($query);
        if ($row['email'] == '')
        {
            $_SESSION['firstLogin'] = 'Chào mừng bạn đến trang cập nhật thông tin vì đây là lần đăng nhập đầu tiên của bạn.';
            header('location: http://localhost/WebProject/update.php');
        }
        // if ($row['position'] == 1)
        // {
        else
            header('location: http://localhost/WebProject/home-page.php');
        // }
            
    }//Lưu tên đăng nhập
    else
        header('location: http://localhost/WebProject/login.php?error=1');
    die();
    mysqli_close($conn);
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/main1.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <header class="header-login">
            <img class="img-logo" src="images/logo.png">
        </header>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                        <?php 
                            if (isset($_SESSION['errLogin']))
                                echo '<font color="#FF0000"><p align="center">' . $_SESSION['errLogin'] . '</p></font>';
                        ?>    
                        </div>

                        <div class="card-body">
                            <form method="POST" action="login.php">
                                <div class="form-group row">
                                    <label for="userName" class="col-sm-4 col-form-label text-md-right">User name</label>

                                    <div class="col-md-6">
                                        <input id="userName" type="userName" class="form-control" name="userName" value="" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required>
                                    </div>
                                </div>
                                <?php
                                if (isset($_GET['error']) == true)
                                    echo '<font color="#FF0000"><p align="center">Username or Password does not match</p></font>';
                                ?>
                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary" name="dangnhap">
                                            Login
                                        </button>

                                        <a class="btn btn-link" href="register.php">
                                            Register
                                        </a>
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