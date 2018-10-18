<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Trang đăng ký</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    <header>
        <img class="img-logo" src="images/logo1.png">
    </header>

    <div class="body-container">
        <form action="handle-register.php" method="POST">
            <p>Username<br></p>
            <input type="text" name="userName"><br> 
            <p>Password<br></p>
            <input type="password" name="password"><br>
            <p>Re-Pass<br></p>
            <input type="password" name="rePassword"><br>
            <button type="submit" class="button-register">Register</button>
            <button type="reset" class="button-register">Reset</button>

        </form>
        <div class = "register-link">
            <a href="login.php">Already have an account ?</a>
        </div>
    </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src='js/main.js'></script>
</body>
</html>