<?php
$servername = "localhost";
$dbUsername = "root";
$dbpassword="";
$dbName = "db_upress";

$conn =mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
?>
