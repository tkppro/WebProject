<?php
$date = $_POST['date'];

echo $date;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

    <header>
        <img class="img-logo" src="images/logo1.png">
    </header>

    <div class="body-container">
        <form action="test.php" method="post">
            <input type="text" name="username" value="Full name"><br>

            <input type="text" name="email" value="Email"><br>

            <input type="date" name="date" ><br>

            <input type="text" name="position" value="Position"><br>

            <input type="text" name="gender" value="Gender"><br>

            <input type="submit" value="Add">
        </form>

        
    </div>

    <div class = "register-link">
        <a href="register.html">Don't have an account ?</a>
    </div>

    <div class = "forgot-link">
        <a href="#">Forgot password </a>
    </div>




    <!-- add Javasscript file from js file -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src='js/main.js'></script>
</body>
</html>