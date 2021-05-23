<?php session_start();
$username = $_SESSION["Euname"];?>

<body>
        <div style="margin:auto;" class="container-md">
            <?php 
        if (isset($_SESSION["Euname"])) {
	        echo '<hr><h1 style="text-align: center;"><b>' . $username .'\'s</b> Employee Portal</h1><hr>';
        }
        else {
            echo '
            <script>
            alert("Employees Only!!!");
            window.location.replace("https://delphi.cs.csub.edu/~zscholefield/NotCarGurus/employeeLogin.php");
            </script>';
        }
?>
        <!-- <h1 style="text-align: center;">Welcome<br><br><br><br></h1> -->
        <?php $result = $conn->query("SELECT * FROM Employee WHERE Username='$username'"); 
        while ($row = $result->fetch_assoc()):
            $firstName =  $row['F_name'];?>
        <section class="card" data-aos="zoom-out" data-aos-duration="1500" data-aos-easing="ease-in-sine" style="overflow-y: hidden;">
            <div>
                <h3><?= $firstName . " " . $row['L_name']?></h3>
                <p>
                    Employee ID Number:</b> <?= $row['E_ID']?><br>
                    Birthdate:</b> <?= $row['Birthdate']?><br>
                    Social Security Number:</b> <?= $row['SSN']?><br>
                    Your Warehouse:</b> <?= $row['W_ID'] ?><br>
                    Hire Date:</b> <?= $row['Hire_Date'] ?><br>
                    Username:</b> <?= $row['Username'] ?>       
                </p>
            </div>
        </section>
    <?php endwhile; $result->free();?>
    </div>
        
            <img style="width:100%; margin:auto;" src="./images/office.jpg">
        
    </body>