<?php
include 'student.php';
include 'course.php';

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
    <title>Web Project</title>
<style>

    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
</style>
</head>
<body>
    <table border="0">
        <caption><h2>Danh sách sinh vien</h2></caption>
        <tr>
            <th>STT</th>
            <th>Id</th>
            <th>Tên</th>
            <th>Tên lớp</th>
            <th>Trạng thái</th>
        </tr>
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
            echo $student->getName().'  ';
        }
    }

    if(array_key_exists('send',$_POST)){
        testfun();
    }
    ?>   
    <form method="post">
    <input type = "submit" id = "submit" name="send" value = "Submit"/>
   </form>
</body>
</html>