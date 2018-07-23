<?php

require "config/config.php";
require "includes/form_handlers/register_handler.php";
require "includes/form_handlers/login_handler.php";

?>

<html>
<head>
    <title>Welcome to Swirlfeed</title>
    <link rel="stylesheet" type="text/css" href="assets/css/register_style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body> 

    <?php
    if(isset($_POST['register_button'])){
        echo
            '<script>    
            
            $(document).ready(function(){
            $("#first").hide();
            $("#second").show();
            })
            
            </script>';    
        
    }
    ?> 
  
   <div class="wrapper">
    
   <div class="login_box">
   
   <div class="login_header">
        <h1>Swirlfeed</h1>
        Login or sign up below!
    </div>
    
    <div id="first">
    
        <form action="register.php" method="POST">
            <input type="email" name="log_email" placeholder="Email address" value="<?php
            if(isset($_SESSION['log_email'])){
                echo ($_SESSION['log_email']);
            }       
            ?>" required>
            <br>
            <input type="password" name="log_password" placeholder="Password">
            <br>

            <?php
            if(in_array("Email or password is incorrect!<br>", $error_array)) echo "Email or password is incorrect!<br>";
            ?>
            <input type="submit" name="login_button" value="login">
            <br>
            <a href="#" id="signup" class="signup">Need an account? Register here.</a>

        </form>
    </div>
         
    <div id="second">     
    <form action="register.php" method="POST">
        <input type="text" name="reg_fname" placeholder="First name" required value="<?php
        if(isset($_SESSION['reg_fname'])){
            echo ($_SESSION['reg_fname']);
        }       
        ?>">
        <br>  
        <?php if(in_array("Your first name must be between 2 and 25 characters<br>", $error_array)) echo "Your first name must be between 2 and 25 characters<br>"; ?>
                    
        <input type="text" name="reg_lname" placeholder="Last name" required value="<?php
        if(isset($_SESSION['reg_lname'])){
            echo ($_SESSION['reg_lname']);
        }       
        ?>" >
        <br>
        <?php if(in_array("Your last name must be between 2 and 25 characters<br>", $error_array)) echo "Your last name must be between 2 and 25 characters<br>"; ?>

        <input type="email" name="reg_email" placeholder="Email" required value="<?php
        if(isset($_SESSION['reg_email'])){
            echo ($_SESSION['reg_email']);
        }       
        ?>">
        <br>   
           
        <input type="email" name="reg_email2" placeholder="Confirm your email" required value="<?php
        if(isset($_SESSION['reg_email2'])){
            echo ($_SESSION['reg_email2']);
        }       
        ?>">
        <br>
        
        <?php if(in_array("Email already in use<br>", $error_array)) echo "Email already in use<br>"; 
         else if(in_array("Invalid email format<br>", $error_array)) echo "Invalid email format<br>";
         else if(in_array("Emails don't match<br>", $error_array)) echo "Emails don't match<br>"; ?>
  
          
        <input type="password" name="reg_password" placeholder="Password" required>
        <br>        
         
        <input type="password" name="reg_password2" placeholder="Confirm password" required>
        <br>
         <?php if(in_array("Your passwords don't match<br>", $error_array)) echo "Your passwords don't match<br>"; 
         else if(in_array("Only english numbers<br>", $error_array)) echo "Only english numbers<br>";
         else if(in_array("Password must be between 5 and 30 characters", $error_array)) echo "Password must be between 5 and 30 characters"; ?>
        
        <input type="submit" name="register_button" value="Register">

        <?php if(in_array("<span style='color: #14C800;'>Your profile has been set up!</span><br>", $error_array)) echo "<span style='color: #14C800;'>Your profile has been set up!</span><br>";?> 
        <br>
        <a href="#" id="signin" class="signin">Already have an account? Login here.</a>

    </form>
    </div>
    </div>
    </div>
    <script src="assets/js/register.js"></script>
</body>
</html>

