<?php
$connection = mysqli_connect("localhost",'u151063784_upresswmsuprs','LadQw702+&3');
$db = mysqli_select_db($connection, 'u151063784_db_upress');
if(isset($_POST['deletedata']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM user _acc WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("Location:create_user.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>