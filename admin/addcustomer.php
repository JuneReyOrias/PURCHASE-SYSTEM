<?php
require_once '../database/database.php';
require_once '../database/user.class.php';

    //resume session here to fetch session values
    session_start();
    /*
        if user is not login then redirect to login page,
        this is to prevent users from accessing pages that requires
        authentication such as the dashboard
    */
    if (!isset($_SESSION['logged-in'])){
        header('location: ../login/login.php');
    }
    //if the above code is false then html below will be displayed

   
    $page_title = 'Upress | Dashboard';
    $dashboard = 'active';

    require_once '../includes/header.php';
    $obj= new Database();
   
    
?>
<?php 

  
if(isset($_POST['submit'])) {
          //Sanitizing the inputs of the users. Mandatory to prevent injections!
      $obj->inserRecord($_POST);
        
              $user= new users;
              $user -> username = htmlentities($_POST['user_name']); 
              $user -> password = htmlentities($_POST['user_pass']);
              $user -> firstname = htmlentities($_POST['firstname']);

              $user -> lastname = htmlentities($_POST['lastname']);

              $user -> email = htmlentities($_POST['email']);
      
              $user -> role = htmlentities($_POST['role']);
             
              $output= $user -> create_acc();
      
               
      
                  //display the appropriate dashboard page for user
             
                  }
              
        
  





?>


  

<div class="signup-container">
    <div class="title">Sign Up Form</div>
    
    <div class="content">

    <!--PERSONAL INFORMATION-->
    <div class="sub-title">Personal Information</div>
      <form action="addcustomer.php" method="post">

        <div class="user-details">
        <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="" id="user_name" name="user_name" placeholder="user_name" > 
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="" id="password" name="password" placeholder="password" > 
          </div>

          <div class="input-box">
            <span class="details">Firstname</span>
            <input type="text" placeholder="" id="firstname" name="firstname" placeholder="Enter firstname" > 
          </div>

         
          <div class="input-box">
            <span class="details">Lastname</span>
            <input type="text"  id="firstname" name="lastname" placeholder="Enter lastname" >
          </div>

         
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text"  id="email" name="email" placeholder="Enter email" >
          </div>
          
          
         <div class="input-box">
          <span class="details">Role</span>
          <select name="role" id="role" >
            <option value="None">--Select--</option>
            <option value="SuperAdmin" > Admin</option>
            <option value="Admin">Cutomer</option>
            <option value="Users">Staff</option>
          </select>
      </div>
          
         

    


        
         <!--SIGN UP BUTTON-->
        <div class="button">
          <input type="submit" action="addcustomer.php" name="submit" id="submit" value="Submit">
        </div>
        <div class="have-account">
        <p>ALREADY HAVE AN ACCOUNT?<span> <a href="login.php">LOG IN</a></span></p>
        </div>
      </form><br>
      <h4>
      </h4>
    </div>
  </div>