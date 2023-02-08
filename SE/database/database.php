<?php
$servername = "localhost";
$dbUsername = "root";
$dbpassword="";
$dbName = "db_upress";

$conn =mysqli_connect($servername, $dbUsername, $dbpassword, $dbName);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
?>
