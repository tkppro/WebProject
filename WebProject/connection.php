<?php
$servername = "localhost";
$username = "root";
$password = "wolfclaw1";
$dbname = "vnuk";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// else
//     echo 'Connected successfuly';
//mysqli_close($conn);
?>