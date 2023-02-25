<?php
include 'connect.php';
if(isset($_POST['submit'])){
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];
  $department=$_POST['department'];

  $sql="insert into'"
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>add customer</title>
  </head>
  <body>
    <div class=" container">
    <form method="post">
  <div class="form-group">
    <label>Firstname</label>
    <input type="text" class="form-control"  placeholder="Enter your FirstName" name="fisrtname" autocomplete="off">
  </div>
  <div class="form-group">
    <label>Lastname</label>
    <input type="text" class="form-control"  placeholder="Enter your LastName" name="lastname" >
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control"  placeholder="Enter your email" name="email" >
  </div>
  <div class="form-group">
    <label>Mobile number</label>
    <input type="text" class="form-control"  placeholder="Enter your mobile number" name="mobile" >
  </div>
  <div class="form-group">
    <label>password</label>
    <input type="text" class="form-control"  placeholder="Enter your password" name="password" >
  </div>
  
  <div class="form-group">
  <label> Department </label></br>

    <input list="department" name="department">
  <datalist id="department">
    <option value="CCS">
    <option value="CTE">
    <option value="Architecture">
    <option value="CCJE">
    <option value="COE">
    <option value="CLA">
  </datalist>
  
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>

 
  </body>
</html>