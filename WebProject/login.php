<?php
//Khai báo sử dụng session
session_start();
 
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
 
//Xử lý đăng nhập
if (isset($_POST['dangnhap'])) 
{
    //Kết nối tới database
    include('connection.php');
     
    //Lấy dữ liệu nhập vào
    $username = addslashes($_POST['userName']);
    $password = addslashes($_POST['password']);
     
    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$username || !$password) {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    // mã hóa pasword
    $password = $conn->real_escape_string($password);
     
    //Kiểm tra tên đăng nhập có tồn tại không
    $query = mysqli_query($conn, "SELECT account_name, account_password FROM account WHERE account_name='$username'");
    if (mysqli_num_rows($query) == 0) {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    //Lấy mật khẩu trong database ra
    $row = mysqli_fetch_assoc($query);
    
    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($password != $row['account_password']) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    //Lưu tên đăng nhập
    $_SESSION['username'] = $username;
    $checkQuery = mysqli_query($conn, "SELECT email, full_name, birthday FROM account WHERE account_name='$username'");
    if (mysqli_num_rows($query) != 0)
    {
        header('location: http://localhost/WebProject/update.php');
    }
    else 
    {
        header('location: http://localhost/WebProject/home-page.php');
    }
    die();
    mysqli_close($conn);
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <header>
            <img class="img-logo" src="images/logo1.png">
        </header>
        <div class="body-container">
            <form action='login.php' method='POST'>
                <p>Username<br></p>
                <input type="text" name="userName"><br> 
                <p>Password<br></p>
                <input type="password" name="password"><br>          
                <button class="button-login" type="submit" name="dangnhap">Login</button>
                <button type="button" class="button-login"><a href='register.php'>Register</a></button>
            </form>

        <button class="button-google">
            <img class="img-button" src="images/buttonG+.png">
        </button>

        <div class = "register-link">
            <a href="register.php">Don't have an account ?</a>
        </div>

        <div class = "forgot-link">
            <a href="#">Forgot password </a>
        </div>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src='js/main.js'></script>
    </body>
</html>