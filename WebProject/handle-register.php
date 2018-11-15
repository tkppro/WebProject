<?php
 
// Nếu không phải là sự kiện đăng ký thì không xử lý
if (!isset($_POST['userName'])) {
    die('');
}
//Nhúng file kết nối với database
include('connection.php');

      
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
      
//Lấy dữ liệu từ file dangky.php
$username   = addslashes($_POST['userName']);
$password   = addslashes($_POST['password']);
$rePassword = addslashes($_POST['rePassword']);

// $email      = addslashes($_POST['txtEmail']);
// $fullname   = addslashes($_POST['txtFullname']);
// $birthday   = addslashes($_POST['txtBirthday']);
// $sex        = addslashes($_POST['txtSex']);
// $position = 0;
// $status = 1;
//Kiểm tra người dùng đã nhập liệu đầy đủ chưa
if (!$username || !$password || !$rePassword)
{
    echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}
     
if (strlen($username) < 6 || strlen($username) > 32)
{
    echo "Độ dài hợp lệ của tên đăng nhập từ 6-32 kí tự.<a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}

if (!preg_match('/^[a-zA-Z0-9@_]*$/',$username))  
{
    echo "Sai định dạng tên đăng nhập. Chỉ cho phép chữ cái, số và không có khoảng trống.<a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}

if (strlen($password) < 6 || strlen($password) > 32)
{
    echo "Độ dài hợp lệ của mật khẩu từ 6-32 kí tự.<a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}

if (!preg_match('/^[a-zA-Z0-9@_]*$/',$password))
{
    echo "Sai định dạng mật khẩu. Chỉ cho phép chữ cái, số và không có khoảng trống.<a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}

if ($password != $rePassword)
{
    echo "Phải nhập lại password đúng!. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}

// Mã khóa mật khẩu
// $password = mysqli_real_escape_string($conn,$password);
$password = hash('sha512', $password);
//Kiểm tra tên đăng nhập này đã có người dùng chưa
if (mysqli_num_rows(mysqli_query($conn, "SELECT account_name FROM account WHERE account_name='$username'")) > 0){
    echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}
      
//Lưu thông tin thành viên vào bảng
@$addmember = mysqli_query($conn, "
    INSERT INTO account (
        account_name,
        account_password
        -- email,
        -- full_name,
        -- birthday,
        -- gender,
        -- position,
        -- status
    )
    VALUE (
        '{$username}',
        '{$password}'
        -- '{$email}',
        -- '{$fullname}',
        -- '{$birthday}',
        -- '{$sex}',
        -- '{$position}',
        -- '{$status}'
    )
");
                      
//Thông báo quá trình lưu
if ($addmember)
    echo "Quá trình đăng ký thành công. <a href='login.php'>Về trang chủ</a>";
else
    echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='register.php'>Thử lại</a>";
mysqli_close($conn);
?>
