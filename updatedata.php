<?php
$stu_id = $_POST['did'];
$stu_title = $_POST['dtitle'];
$stu_description = $_POST['sdescription'];


include 'dbconnect.php';
$sql = "UPDATE `diary` SET `dtitle` = '$stu_title', `sdescription` = '$stu_description' WHERE `did` = '$stu_id'";
$result = mysqli_query($conn, $sql) or die("Query unsuccessfull");

header("Location: http://localhost/extablephp/main.php");

mysqli_close($conn);
?>