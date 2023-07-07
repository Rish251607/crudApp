<?php
$servername="localhost";
$username="root";
$password="";
$database="document";
$conn= mysqli_connect($servername, $username,$password,$database);
if(!$conn){
    echo "connecton was unsuccessful";
}
?>