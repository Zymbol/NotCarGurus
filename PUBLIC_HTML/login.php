<div  data-aos="zoom-in-down"  data-aos-duration="2500">
<?php 
include "nav.php";?> 
</div>

<?php
include "header.php";
session_start();
include "./connect.php";
function data_input($data) {
    $data = htmlspecialchars($data);
    return $data;
}
if (isset($_POST) && !empty($_POST)) {
    $valid = true;
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    

    if (empty($_POST["username"])) {
        $username = "Username is required";
        $valid = false;
        $errors = true;
    } else {
        $username = data_input($_POST["username"]);
    
    }
    if (empty($_POST["password"])) {
        $password = "Please enter a password";
        $valid = false;
        $error = true;
    } else {
        $password = data_input($_POST["password"]);
    
    }
}

?> <div class="container-md" style="text-align: center;">
<form action="login.php" method="post"> 
<div  data-aos="zoom-in-up">
<!-- <input type="text" placeholder="Username" style="border-color: black;" name="username" required><br/> -->
<input type="text" placeholder="Username" style="border-color: black;" name="username" required><br/>
</div>
<br>
<div  data-aos="zoom-in-down">
<input type="password" placeholder="Password" style="border-color: black;" name="password" required><br/><br>
</div>
<!-- <input type="submit" name="Register" value="Register an account"> -->
<input data-aos="fade-left" type="submit" name="Login" value="Login"><br><br>
<?php 
    $Username = $_POST['username'];
    $sql = "CALL LoginUser('$Username')";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    // echo $row['personID'];
    $_SESSION["uname"] = $row['Username'];
    if( isset($_SESSION["uname"]) ){
        header("Location: ./home.php");
    }
    echo $_SESSION['uname'];
?>
</form>

<img data-aos="flip-up" data-aos-duration="2500" style="width:75%" src="./images/keys.jpg"><br><br>
</div>
<?php include "footer.php"?>


