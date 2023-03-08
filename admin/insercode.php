<?php
require_once '../database/database.php';
require_once '../database/user.class.php';

if(isset($_POST['insert']))
{
   $user= new Users();

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
}

?>