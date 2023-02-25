<?php
require_once '../database/database.php';
session_start();


if(isset($_POST['save_student_btn']))
{ print_r($_POST['save_student_btn']);
    $user_name = $_POST['user_name'];
    $password = $_POST['paasword'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $role= $_POST['role'];
   

    $query = "INSERT INTO `user_acc`(`id`, `user_name`, `user_pass`, `firstname`, `lastname`, `email`, `role`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]')";
    $query_run = $connection->prepare($query);

    $data = [
        ':id' => $id,
        ':user_name' => $user_name,
        ':password' => $password,
        ':firstname' => $firstname,
        ':lastname' => $lastname,
        ':email' => $email,
        ':role' => $role,
       
    ];
    $query_execute = $query_run->execute($data);

    if($query_execute)
    {
        $_SESSION['message'] = "Inserted Successfully";
        header('Location: createusers.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Inserted";
        header('Location: createusers.php');
        exit(0);
    }
}
