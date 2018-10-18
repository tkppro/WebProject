<?php
// include 'course.php';
// include 'student.php';
// include 'index.php';

// $courseA = new Course();
// $courseB = new Course();
// $courseC = new Course();
// $courseD = new Course();
// $courseE = new Course();

// $courseList = [


// ];


$testDate = strtotime('2018-10-2');
$now = date('Y/m/d');

if (date('Y/m/d',$testDate) == $now)
{
	echo 'class A';
}
else
	echo 'Nope';

?>