<?php
require_once '../database/user.class.php';
require_once '../includes/header.php';

//we start session since we need to use session values
session_start();
$page_title = 'UPRESS -dasboard';
?>
<?php

    if(isset($_POST['user_name']) && isset($_POST['password'])){
        //Sanitizing the inputs of the users. Mandatory to prevent injections!
       
        $user= new users;
        $user -> email = htmlentities($_POST['user_name']); 
        $user -> password = htmlentities($_POST['password']); 

        $output= $user -> login();

        if ($output) {
            // CREATE -- COLUMN "firstname" "lastname" "role"
            $_SESSION['logged-in'] = $output['user_name'];
            $_SESSION['fullname'] = $output['firstname'] . ' ' . $output['lastname'];
            $_SESSION['user_role'] = $output['role'];

            //display the appropriate dashboard page for user
                if($output['role'] == 'customer'){
                    print_r($_SESSION);
                    header('location: ../customer/dashboard.php');
                }elseif($output['role'] == 'admin'){
                    header('location: ../admin/dashboard.php');
                    //  header('location: ../admin/dashboard1.php');
                }
                elseif($output['role'] == 'staff'){
                    header('location: ../staff/dashboard.php');
                    //  header('location: ../admin/dashboard1.php');
                }
            }else {
                //set the error message if account is invalid
                $error = 'INVALID password/username Try again.';
            }

            }
        
    //}
 /*  $user_obj = new User();
  if(isset($_POST['email']) && isset($_POST['password'])){
    //Sanitizing the inputs of the users. Mandatory to prevent injections!
    $user_obj->email = htmlentities($_POST['email']);
    $user_obj->password = htmlentities($_POST['password']);
    if($user_obj->login()){
        $user_obj= $user_obj->get_user_info();
        foreach($users_obj as $row){
            $_SESSION['logged_id'] = TRUE;
            $_SESSION['name'] = $_POST['email'];
            $_SESSION['type'] = $row['type'];
            //display the appropriate dashboard page for user
            if($row['type'] == 'customer'){
                header('location: ../customer/dashboard.php');
            }else if($row['type'] == 'staff'){
                header('location: ../purchase/dashboard.php');
            }
        }
    }else{
        //set the error message if account is invalid
        $error = 'Invalid username/password. Try again.';
    }
  }*/
  
 
    

?>
    <div class="login-container">
        <form class="login-form" action="login.php" method="post">
            <!--<div class="logo-details" img src="../img/wmsu-logo.png">
               <a img src="../img/../img/wmsu-logo.png"></a> -->
               <div class="image-text">
                <span class="image justify-content-center">  
                    <img src="../img/upress-logo.png" alt=""></span>
               
            </div>
            <hr class="divider">
            <label for="username">Username</label>
            <input type="text" id="user_name" name="user_name" placeholder="Enter Username" required tabindex="1">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter Password" required tabindex="2">
            <input class="button" type="submit" value="Login" name="login" tabindex="3">
            <?php
                //Display the error message if there is any.
                if(isset($error)){
                    echo '<div><p class="error">'.$error.'</p></div>';
                }
                
            ?>
        </form>
    </div>
    <?php
    require_once '../includes/footer.php';
?>