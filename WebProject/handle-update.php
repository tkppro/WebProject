<?php
session_start();
include 'connection.php';

if (!isset($_SESSION['username']))
{
    echo 'bạn chưa đăng nhập';
    //sleep(10);
    header('location: http://localhost/WebProject/login.php');
    die('');
}

if (isset($_POST["update-btn"]))
{
    // if (!$email || !$fullName || !$birthDay || !$gender || !$position)
    // {
    //     echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
    //     exit;
    // }
    
    $email = addslashes($_POST['email']);
    $fullName = addslashes($_POST['fullName']);
    $birthday = addslashes($_POST['birthday']);
    $gender = addslashes($_POST['gender']);
    $position = addslashes($_POST['position']);

    if (!$email || !$fullName || !$birthday || !$gender || !$position)
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    //Kiểm tra email có đúng định dạng hay không
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        echo "Email này không hợp lệ. Vui long nhập email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
    //Kiểm tra email đã có người dùng chưa
    if (mysqli_num_rows(mysqli_query($conn, "SELECT email FROM account WHERE email='$email'")) > 0)
    {
        echo "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    //Kiểm tra dạng nhập vào của ngày sinh
    if (!preg_match('/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/', $birthday))
    {
        echo "Ngày tháng năm sinh không hợp lệ. Vui long nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
}



$sql = "UPDATE account SET email = '$email', full_name = '$fullName', birthday = '$birthday', gender = '$gender', position = '$position' WHERE account_name = '{$_SESSION['username']}'"; 
$updateMember = mysqli_query($conn, $sql);

if ($updateMember)
        echo "Quá trình cập nhật thành công. <a href='home-page.php'>Về trang chủ</a>";
    else
        echo "Có lỗi xảy ra trong quá trình cập nhật. <a href='logout.php'>Thử lại</a>";
mysqli_close($conn);
?>
