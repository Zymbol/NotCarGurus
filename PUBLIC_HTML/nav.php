<?php include "./connect.php";
session_start();
$username = $_SESSION["uname"];
?>
<nav style="text-align: center;" class="navbar navbar-expand-lg navbar-light bg-light">
    <a style="padding-left: 2rem; padding-right: 2rem"  href="./home.php"><img class="logo"src="./images/logo.png">
    </a>
   
  

   
<button class="navbar-toggler" type="button" data-toggle="collapse" 
    data-target="#main_nav" aria-controls="#main_nav" aria-expanded="false" 
    aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="main_nav">
    <!-- Navbar Logo -->    
    <ul style="text-align:center;" class="navbar-nav mx-auto">
        <li class="nav-item active"><a href="./store.php">Our Vehicles</a></li>        
        <li class="nav-item"><a href="./priciestVehicles.php">Elite Lineup </a></li>
        <li class="nav-item"><a href="./AffordableVehicles.php">Affordable Lineup</a></li>
        <li class="nav-item"><a href="about.php">About</a></li>    
        <?php 
            if (isset($username)) {
            echo "<li class='nav-item'><a href='./logout.php'>Logout</a></li>";
            echo "<li class='nav-item'><a href='./customerHome.php'>Hello, $username!</a></li>";
            

            }
            else {
                echo "<li class='nav-item'><a href='./login.php'>Login</a></li>";
                echo "<li class='nav-item'><a href='./signup.php'>Sign Up</a></li>";
                echo "<li class='nav-item'><a href='employeeLogin.php'>Employee Portal</a></li> ";
            }
            ?>
           
        
    </ul>  
</nav>




