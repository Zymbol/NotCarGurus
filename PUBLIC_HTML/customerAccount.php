<?php session_start();
$username = $_SESSION["uname"];?>
        

<body>
        <div style="margin:auto;" class="container-md">
            <?php 
        if (isset($_SESSION["uname"])) {
            echo '<hr><h1 style="text-align: center;"> Account</h1><hr>';
            
        }
        else {
            echo '
            <script>
            alert("Please Log In.");
            window.location.replace("https://delphi.cs.csub.edu/~zscholefield/NotCarGurus/login.php");
            </script>';
        }
        ?>
        <img style="width:100%; margin:auto;" src="./images/banner2.jpg">
        <!-- <h1 style="text-align: center;">Welcome<br><br><br><br></h1> -->
        <?php $result = $conn->query("CALL customerPurchases('$username')"); 
        while ($row = $result->fetch_assoc()):
            $firstName =  $row['F_name'];?>
        <section class="card" data-aos="zoom-out" data-aos-duration="1500" data-aos-easing="ease-in-sine" style="overflow-y: hidden;">
            <div>
                <h3><?= $firstName . " " . $row['L_name']?></h3>
                <p>
                    Account ID:</b> <?= $row['Account_ID']?><br>
                    Email:</b> <?= $row['Email']?><br>
                    Address: </b> <?= $row['Address']?><br>
                    Username:</b> <?= $row['Username'] ?>    
                </p>
            </div>
        </section>
        <section class="card" data-aos="zoom-out" data-aos-duration="1500" data-aos-easing="ease-in-sine" style="overflow-y: hidden;">
            <img style="order:2" class="thumbnail" src="<?= $row['Image']?>" alt="">
            <div><h3>Your Purchase History</h3>
                <p>
                    Make:</b> <?= $row['Make']?><br>
                    Model:</b> <?= $row['Model']?><br>
                    Color:</b> <?= $row['Color']?><br>
                    Wear:</b> <?= $row['Wear'] ?><br>
                    Year:</b> <?= $row['Year'] ?><br>
                    Price:</b> $<?= number_format($row['Price'])?><br>
                    VIN:</b> <?= $row['VIN']?><br>
                    Mileage:</b> <?=number_format( $row['Mileage'])?><br>  
                </p>
            </div>
        </section>
    <?php endwhile; $result->free();?>

        </div>
        
        
    </body>