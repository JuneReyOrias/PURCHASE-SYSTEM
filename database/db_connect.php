<?php
$con = mysqli_connect('localhost', 'root', '', 'db_upress');
if(!$con)
{
    die('Please Check Your Connection' . mysqli_connect_error());
}

?>