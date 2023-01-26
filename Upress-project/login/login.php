<?php

require_once ('../includes/header.php');
?>



<section classs= "login-form">
         <div class="login-form-form">
            <div class="homepage-login">
                <form action="../login.php" method="post">
                    <label for="username">Username</label>
                    <input type="text" name="usern" placeholder="Usernmae/eamil">
                    <label for="password">password</label>
                    <input type="password" name="pass" placeholder="Enter password">
                    <br>
                    <button type="submit" name="submit" placeholder="Submit">Login</button>
                </form>

        </section> 
    
    <?php
    require_once('../includes/footer.php');
