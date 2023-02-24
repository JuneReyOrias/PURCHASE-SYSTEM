<?php

    $connect = mysqli_connect("localhost", "root", "", "aatman");

    if(isset($_POST["user_name"]))
    {
        $name = $_POST["user_name"];
        $email = $_POST["pasword"];
        $mobile = $_POST["firstname"];
        $message = $_POST["lastname"];
        $message = $_POST["email"];
        $message = $_POST["role"];
        $query = '';
       
        for($count = 0; $count<count($name); $count++){
            $user_name_clean = mysqli_real_escape_string($connect, $user_name[$count]);
            $password_clean = mysqli_real_escape_string($connect, $password[$count]);
            $firstname_clean = mysqli_real_escape_string($connect, $firstname[$count]);
            $lastname_clean = mysqli_real_escape_string($connect, $lastname[$count]);
            $email_clean = mysqli_real_escape_string($connect, $email[$count]);
            $role_clean = mysqli_real_escape_string($connect, $role[$count]);
          
            if($user_name_clean != '' && $password_clean != '' && $firstname_clean != '' && $lastname_clean != ''&& $email_clean != '' && $role_clean != '' ){
                $query .= 'INSERT INTO user_acc (user_name, user_pass, firstname, lastname, email, role,) VALUES("'.$user_name_clean.'", "'.$password_clean.'", "'.$firstname_clean .'", "'.$lastname_clean .'", "'.$email_clean .'", "'.$role_clean.'");';
            }
        }

        if($query != ''){
                
            if(mysqli_multi_query($connect, $query)){
                echo 'Users Data Inserted successfully';
            }else{
                echo 'Error';
            }
        }else{
            echo 'All Fields are Required';
        }
    }
?>