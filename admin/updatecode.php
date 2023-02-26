<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'db_upress');

    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];
        
        $username = $_POST['user_name'];
        $password = $_POST['password'];
        $fullname = $_POST['fullname'];
        $role = $_POST['role'];

        $query = "UPDATE users SET user_name='$username', password='$password', fullname='$fullname', role=' $role' WHERE id='$id'  ";
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