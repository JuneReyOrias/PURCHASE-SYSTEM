<?php
$connection = mysqli_connect("localhost",'u151063784_upresswmsuprs','LadQw702+&3');
$db = mysqli_select_db($connection, 'u151063784_db_upress');

    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];
        
        $user_name = $_POST['user_name'];
        $user_pass = $_POST['user_pass'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $role = $_POST['role'];

        $query = "INSERT INTO user_acc (`user_name`,`user_pass`,`firstname`, `lastname`, `email`,`role`) VALUES ('$user_name','$user_pass','$firstname','$lastname', '$email', '$role')";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:create_user.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>