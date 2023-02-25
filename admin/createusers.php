<?php
require_once '../database/database.php';
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
    $obj_database= new Database();
    if(isset($_POST['save']))
    { print_r($_POST);
    }

   
?>
 <?php
print_r($_POST);

if(isset($_POST['save'])) {
    //Sanitizing the inputs of the users. Mandatory to prevent injections!
      
        $user= new users;
        $user -> username = htmlentities($_POST['user_name']); 
        $user -> password = htmlentities($_POST['password']);
        $user -> firstname = htmlentities($_POST['firstname']);
        $
        $user -> lastname = htmlentities($_POST['lastname']);
       
        $user -> email = htmlentities($_POST['email']);
       
        $user -> role = htmlentities($_POST['role']);
       

        
      //  `username`, `user_pass`, `firstname`, `middlename`, `lastname`, `suffix`, `email`, `address`, `role`,
      //   `type`, `sex`, `contactno`

      //   $query->bindParam(':username', $this->username);
      //   $query->bindParam(':user_pass', $this->password);
      //   $query->bindParam(':firstname', $this->firstname);
      //   $query->bindParam(':middlename', $this->middlename);
      //   $query->bindParam(':lastname', $this->lastname);
      //   $query->bindParam(':suffix', $this->suffix);
      //   $query->bindParam(':email', $this->email);
      //   $query->bindParam(':address', $this->address);
      //   $query->bindParam(':role', $this->role);
      //   $query->bindParam(':type', $this->type);
      //   $query->bindParam(':sex', $this->sex);
      //   $query->bindParam(':contactNo', $this->contactNo);

        $output= $user -> create_acc();

        if ($output) {
            // CREATE -- COLUMN "firstname" "lastname" "role"
            print_r($output);

            $userData = $user -> login();

            if($userData) {
                 $_SESSION['username'] = $userData['username'];
            $_SESSION['password'] = $userData['user_pass'];
            $_SESSION['fullname'] = $userData['firstname'] . ' '.$userData['middlename'] . ' ' . $userData['lastname'] . ' ' .
           
            $_SESSION['user_role'] = $userData['role'];
            $_SESSION['email'] = $userData['email'];
       
            $_SESSION['role'] = $userData['role'];
           
            if($userData['role'] == 'Admin'){
              header('location: ../admin/dashboard.php');
            } else{
              header('location: ../user/user-profile.php');
              header('location: ../admin/dashboard1.php');
          }
            }
         

            //display the appropriate dashboard page for user
       
            }
        
  }

?>
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Insert data into database using PDO in PHP</title>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-8 mt-4">

                <?php if(isset($_SESSION['message'])) : ?>
                    <h5 class="alert alert-success"><?= $_SESSION['message']; ?></h5>
                <?php 
                    unset($_SESSION['message']);
                    endif; 
                ?>

                <div class="card">
                    <div class="card-header">
                        <h3>Insert data into database using PDO in PHP</h3>
                    </div>
                    <div class="card-body">
                        
                        <form action="createusers.php" method="POST">
                            <div class="mb-3">
                                <label>username</label>
                                <input type="text" name="user_name" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>password</label>
                                <input type="text" name="password" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>Firstname</label>
                                <input type="text" name="firstname" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>Lastname</label>
                                <input type="text" name="lastname" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>Role</label>
                                <input type="text" name="role" class="form-control" />
                            </div>
                          
                            <div class="mb-3">
                                <button type="submit" name="save" class="btn btn-primary">Save</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>