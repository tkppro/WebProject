<?php
include 'student.php';
include 'course.php';
session_start();
if (!isset($_SESSION['username']) && !$_SESSION['username'])
{
    header('location: http://localhost/WebProject/login.php');
}

$studentA = new Student(1602, 'Thang', 'Web design', true);
$studentB = new Student(1603, 'Dang', 'Web design', true);
$studentC = new Student(1604, 'Minh', 'Web design', false);
$studentD = new Student(1605, 'Tuan', 'Web design', false);
$studentE = new Student(1606, 'Tung', 'Web design', true);
$studentF = new Student(1607, 'Hoang', 'Web design', true);
$studentG = new Student(1608, 'Anh', 'Web design', true);
$studentH = new Student(1609, 'Hien', 'Web design', true);
$studentJ = new Student(1610, 'Triet', 'Web design', true);
$studentK = new Student(1611, 'Phu', 'Web design', true);

$studentL = new Student(1612, 'Quan', 'Software Development', false);
$studentM = new Student(1613, 'Quang', 'Software Development', true);
$studentN = new Student(1614, 'Ha', 'Software Development', true);

$studentList = [
'1' => $studentA,
'2' => $studentB,
'3' => $studentC,
'4' => $studentD,
'5' => $studentE,
'6' => $studentF,
'7' => $studentG,
'8' => $studentH,
'9' => $studentJ,
'10' => $studentK,
];

$count = 0;
$absenceList = [];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Schedule</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
                    <li class="nav-item ">
                        <a class="nav-link" href="home-page.php">Home></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Schedule<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                </ul>
              </div>
            </nav>
        </div>
        
    <div class="container">
        <table class="table table-hover table-bordered">
            <caption><h2>Danh sách sinh vien</h2></caption>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Id</th>
                    <th>Tên</th>
                    <th>Tên lớp</th>
                    <th>Trạng thái</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($studentList as $index => $student): ?>
                <tr>
                    <td><?php echo $index;?></td>
                    <td><?php echo $student->getId();?></td>
                    <td><?php echo $student->getName();?></td>
                    <td><?php echo $student->getCourseName();?></td>
                    <td>
                        <?php 
                        if ($student->checkIsActivate())
                        {
                            $count++;
                            echo 'Online';
                        }
                        else 
                        {
                            echo 'Offline';
                            array_push($absenceList, $student);
                        }
                        ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table> 
        <?php
        function testfun()
        {
            GLOBAL $count;
            GLOBAL $studentList;
            GLOBAL $absenceList;
            echo 'Student: '. $count . '/' . count($studentList);
            echo '<br>';
            echo 'Missing: ';
            foreach ($absenceList as $student) {
                echo $student->getName().'  ,';
            }
        }

        if(array_key_exists('send',$_POST)){
            testfun();
        }
        ?> 
        <form method="post">
            <input class="btn btn-primary" type = "submit" id = "submit" name="send" value = "Submit"/>
        </form>
    </div>
</body>
</html>