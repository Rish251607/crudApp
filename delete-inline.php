<!-- By this method,we will "DELETE" data used in "CRUD" -->
<?php
$stu_id = $_GET['id'];

include 'dbconnect.php';
$sql = "DELETE FROM diary WHERE `did` = '$stu_id'";
$result = mysqli_query($conn,$sql) or die("query unsuccessfull");

header("Location: http://localhost/extablephp/main.php");

mysqli_close($conn);
?>