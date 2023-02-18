<?php
$page_title = 'UPRESS - Login';

//we start session since we need to use session values
session_start();
//creating an array for list of users can login to the system
$accounts = array(
        "user1" => array(
            "firstname" => 'joe',
            "lastname" => 'Maderal',
            "type" => 'customer',
            "username" => 'maderal',
            "password" => 'maderal'
        ),
        "user2" => array(
            "firstname" => 'Jaydee',
            "lastname" => 'Ballho',
            "type" => 'customer',
            "username" => 'jaydee',
            "password" => 'jaydee'
        ),
        "user3" => array(
            "firstname" => 'Chelsea',
            "lastname" => 'Alboroto',
            "type" => 'customer',
            "username" => 'chelsea',
            "password" => 'alboroto'
        )
     
    );
    if(isset($_POST['username']) && isset($_POST['password'])){
        //Sanitizing the inputs of the users. Mandatory to prevent injections!
        $users= new users;
        $users -> email = htmlentities($_POST['username']);
        $users -> password = htmlentities($_POST['password']);

        $output=$users -> login();
         if($output){
            $_SESSION['logged-in']=$output['username'];
            $_SESSION['fullname']= $output['firstname'] . ' '. $output['lastname'];
            $_SESSION['user_type']=$output['type'];
         }
       
                //display the appropriate dashboard page for user
                if($output['type'] == 'customer'){
                    header('location: ../customer/dashboard.php');
                }else{
                    //header('location: ../purchase/purchase.php');
                }
            }
        //}
        //set the error message if account is invalid
        $error = 'Invalid username/password. Try again.';
   // }
    require_once '../includes/header.php';
 
    

?>
    <div class="login-container">
        <form class="login-form" action="login.php" method="post">
            <!--<div class="logo-details" img src="../img/wmsu-logo.png">
               <a img src="../img/../img/wmsu-logo.png"></a> -->
               <div class="image-text">
                <span class="image">  
                    <img src="../img/upress-logo.png" alt=""></span>
               
            </div>
            <hr class="divider">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter username" required tabindex="1">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter password" required tabindex="2">
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