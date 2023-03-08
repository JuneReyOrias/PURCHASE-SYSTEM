<?php
 require_once '../database/user.class.php';

   $user= new Users();

  $create= $user->add();
    if($user->add())
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: create_user.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }


?>