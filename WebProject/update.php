<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Trang cập nhật thông tin</title>
</head>
<body>
    <img class="img-logo-home" src="images/logo.png">

    <div class="body-container home">
        
        <div class="home-image">
            <img src="images/avatar.jpg">
            <button>Change Image</button>
        </div>
    
        <form action="handle-update.php" method="POST">           
            <input type="text" name="fullName" value="Full name"><br>
            <input type="text" name="email" value="Email"><br>
            <input type="date" name="birthday" ><br>          
            <select name="gender">
                <option value=""></option>
                <option value="Nam">Nam</option>
                <option value="Nu">Nữ</option>
            </select>
            <select name="position">
                <option value=""></option>
                <option value="1">Giáo viên</option>
                <option value="0">Học sinh</option>
            </select>      
            <input type="submit" name="update-btn" value="Cập nhật" />
            <input type="reset" value="Nhập lại" />
        </form>
    </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src='js/main.js'></script>
</body>
</html>