<?php
$servername = "localhost";
$dbUsername = "root";
$dbpassword="";
$dbName = "dbUpresssysytem";

$conn =mysqli_connect($servername, $dbUsername, $dbpassword, $Name);

if(!$conn){
    die("Connection failed: " . mysqli_connect_eroor());
}
?>