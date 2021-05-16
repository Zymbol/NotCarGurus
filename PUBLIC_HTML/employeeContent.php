<?php session_start();
$username = $_SESSION["uname"];?>

<body>
        <div style="margin:auto;" class="container-md">
            <?php 
        if (isset($_SESSION["uname"])) {
	        echo '<hr><h1 style="text-align: center;">Welcome to your Employee Portal, ' . $username . '!</h1><hr>';

        }
        else {
	        echo '<hr><h1 style="text-align: center;"><i>Employees Only</i></h1>';
                header('Location: ./home.php');
        }
?>
        <!-- <h1 style="text-align: center;">Welcome<br><br><br><br></h1> -->
        <?php $result = $conn->query("SELECT * FROM Employee WHERE Username='$username'"); 
        while ($row = $result->fetch_assoc()):?>
        <section class="card" data-aos="zoom-out" data-aos-duration="1500" data-aos-easing="ease-in-sine" style="overflow-y: hidden;">
            <div>
                <h3><?= $row['F_name'] . " " . $row['L_name']?></h3>
                <p>
                    Employee ID Number:</b> <?= $row['E_ID']?><br>
                    Birthdate:</b> <?= $row['Birthdate']?><br>
                    Social Security Number:</b> <?= $row['SSN']?><br>
                    Your Warehouse:</b> <?= $row['W_ID'] ?><br>
                    Hire Date:</b> <?= $row['Hire_Date'] ?><br>
                    Warehouse ID:</b> <?= $row['W_ID'] ?><br>
                    Username:</b> <?= $row['Username'] ?>       
                </p>
            </div>
        </section>
    <?php endwhile; $result->free();?>

        </div>
        
            <img style="width:100%; margin:auto;" src="./images/office.jpg">
        
    </body>