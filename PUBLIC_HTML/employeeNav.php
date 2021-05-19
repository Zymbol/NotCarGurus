<?php include "./connect.php";
session_start();
$username = $_SESSION["Euname"];
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
        <?php 
        if ($username == "ZS1" ||$username == "EB1" || $username == "PH1" || $username == "CW1") {
            echo '<li class="nav-item"><a href="./masterEmployeeView.php">NotCarGurus Employees</a></li>';
        }       

        ?>
        <li class="nav-item"><a href="./RecentOrders.php">Recent Orders</a></li>
        <li class="nav-item"><a href="./VehicleAtWarehouse.php">Warehouse Stock</a></li> 
        <!-- <li class="nav-item"><a href="about.php">About</a></li>     -->
        <?php 
            if (isset($username)) {
            echo "<li class='nav-item'><a href='./logout.php'>Logout</a></li>";
            echo "<li class='nav-item'><a href='./employeeHome.php'>$username's Account</a></li>";

            }
            else {
                echo '
                    <script>
                    alert("Employees Only!!!");
                    window.location.replace("https://delphi.cs.csub.edu/~zscholefield/NotCarGurus/employeeLogin.php");
                    </script>';
                // echo "<li class='nav-item'><a href='./employeeLogin.php'>Login</a></li>";
                // echo "<li class='nav-item'><a href='./signup.php'>Sign Up</a></li>";
            }
            ?>
    </ul>  
</nav>
