<?php 
include "nav.php";
include "header.php";

if(isset($_POST["submit"])) {
    $fname = $_POST["f_name"];
    $lname = $_POST["l_name"];
    $userName = $_POST["username"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $passwd = $_POST["password"];
    $confirmPasswd = $_POST["cpass"];

    require_once 'connect.php';
    require_once 'functions.php';

    if (emptyInputSignup($fname, $lname, $userName, $email, $passwd, $confirmPasswd) !== false) {
        header("location: signup.php?error=emptyinput");
        exit();
    }
    if (invalidUsername($userName) !== false) {
        header("location: signup.php?error=invalidusername");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: signup.php?invalidemail");
        exit();
    }
    if (invalidEmail($address) !== false) {
        header("location: signup.php?emptyusername");
        exit();
    }
    if (passwdMatch($passwd, $confirmPasswd) !== false) {
        header("location: signup.php?error=passwordsdonotmatch");
        exit();
    }
    if (usernameExists($conn, $userName, $email) !== false) {
        header("location: signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $fname, $lname, $email, $passwd, $userName);
}
else {
    header("location: signup.php");
    exit();
}
?> <div class="container-md" style="text-align: center;">
<div class="signup-form">
<form action="register_a.php" method="post" enctype="multipart/form-data">
    <h2>Sign Up</h2>
    <p class="hint-text">Create your account</p>
    <div class="form-group">
        <div class="row">
            <div class="col"><input type="text" class="form-control" name="f_name" placeholder="First Name" required="required"></div>
            <div class="col"><input type="text" class="form-control" name="l_name" placeholder="Last Name" required="required"></div>
        </div>        	
    </div>
    <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="Email" required="required">
    </div>
    <div class="form-group">
        <input type="address" class="form-control" name="address" placeholder="Street Address" required="required">
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="passwd" placeholder="Password" required="required">
    </div> 
    <div class="form-group">
        <input type="password" class="form-control" name="cpass" placeholder="Confirm Password" required="required">
    </div>  
    <div class="form-group">
        <label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a></label>
    </div>
    <div class="form-group">
        <button type="submit" name="register" class="btn btn-primary btn-lg btn-block">Register Now</button>
    </div>
    <div class="text-center">Already have an account? <a href="login.php">Sign in</a></div>
</form>
</div>
</div>