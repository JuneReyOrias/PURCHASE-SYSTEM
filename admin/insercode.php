<?php

$connection = mysqli_connect("localhost",'u151063784_upresswmsuprs','LadQw702+&3');
$db = mysqli_select_db($connection, 'u151063784_db_upress');


if(isset($_POST['insertdata']))
{
    $user_name = $_POST['user_name'];
    $user_pass = $_POST['user_pass'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    $sql = "INSERT INTO user_acc (`user_name`,`user_pass`,`firstname`, `lastname`, `email`,`role`) VALUES ('$user_name','$user_pass','$firstname','$lastname', '$email', '$role')";
    $sql_run = mysqli_query($connection, $sql);

    if($sql_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: create_user.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>