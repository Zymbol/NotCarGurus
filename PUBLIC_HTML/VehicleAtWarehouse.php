<div >
<?php 
error_reporting(E_ALL);
include "connect.php";
?>
<div data-aos="zoom-out-down"
     data-aos-anchor-placement="top-bottom">
<?php
include "employeeNav.php";?>
</div>
<?php
include "header.php";?>
<div class="container-md" style="text-align: center;">
    <hr data-aos="zoom-out-down" data-aos-duration="2500">
        <h3 data-aos="fade-down-right">Warehouse Inventory</h3>
    <hr data-aos="zoom-out-up" data-aos-duration="2500">
</div>
<form method="$_POST">
    <!-- Main -->
    <main class="container" style="overflow-y: hidden;" >
    <!-- Item -->
    <?php $result = $conn->query("SELECT * FROM VehicleAtWarehouse"); 
        while ($row = $result->fetch_assoc()):?>
        <section class="card" data-aos="zoom-out" data-aos-duration="1500" data-aos-easing="ease-in-sine" style="overflow-y: hidden;">
            <div>
                <h3><?=$row['Year']. " ". $row['Make'] . " " . $row['Model']?></h3>
                <p>
                    Make:</b> <?= $row['Make']?><br>
                    Model:</b> <?= $row['Model']?><br>
                    Color:</b> <?= $row['Color']?><br>
                    Wear:</b> <?= $row['Wear'] ?><br>
                    Year:</b> <?= $row['Year'] ?>
                    Price:</b> <?= $row['Price']?><br>
                    VIN:</b> <?= $row['VIN']?><br>
                    Mileage:</b> <?= $row['Mileage']?><br>
                    Warehouse ID:</b> <?= $row['W_ID'] ?><br>
                    Warehouse Address:</b> <?= $row['W_Address'] ?>
                    Arrival Date:</b> <?= $row['Arrival_Date'] ?>
       
                </p>
                <a href="<?= $row['LINK']?>" class="btn btnPrimary" >View Item</a>
            </div>
        </section>
    <?php endwhile; $result->free();?>

    </main>
</form>
<?php include "./footer.php";?>