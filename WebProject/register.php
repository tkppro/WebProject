<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Trang đăng ký</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main1.css">
</head>
<body>
    <header>
        <img class="img-logo" src="images/logo.png">
    </header>

   <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"></div>

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

                                 <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Re-Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary" name="dangnhap">
                                            Register
                                        </button>
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