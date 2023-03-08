<?php
require_once '../database/user.class.php';


   $user= new Users;
   $user->add();
    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: create_user.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }


?>