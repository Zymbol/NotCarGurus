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
<div style="text-align: center;">
    <hr data-aos="zoom-out-down" data-aos-duration="2500">
        <h3 data-aos="fade-down-right"><b>Warehouse</b> Inventory</h3>
    <hr data-aos="zoom-out-up" data-aos-duration="2500">
<button class="btn btnPrimary"><a href="#W1">Warehouse 1</a></button> <button class="btn btnPrimary"><a href="#W2">Warehouse 2</a></button> <button class="btn btnPrimary"><a href="#W3">Warehouse 3</a></button>
</div>
<form method="$_POST">
    <!-- Main -->
    <main class="container" style="overflow-y: hidden;" >
    <!-- Item -->
    <hr><h2 id="W1" style="text-align: center; color:rgb(0, 160, 224)"><b style="color: #000;">Warehouse</b> One</h2>
    <?php $result = $conn->query("SELECT * FROM VehicleAtWarehouse WHERE W_ID = 1 "); 
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
                    Address:</b> <?= $row['W_Address'] ?><br>
                    Arrival Date:</b> <?= $row['Arrival_Date'] ?>
       
                </p>
                <a href="<?= $row['LINK']?>" class="btn btnPrimary" >View Item</a>
            </div>
        </section>
    <?php endwhile; $result->free();?>
    <div class="container-md" style="text-align:center"><button class="btn btnPrimary"><a href="#W1">Warehouse 1</a></button> <button class="btn btnPrimary"><a href="#W2">Warehouse 2</a></button> <button class="btn btnPrimary"><a href="#W3">Warehouse 3</a></button></div>
    <hr><h2 id="W2" style="text-align: center; color:rgb(0, 160, 224)"><b style="color: #000;">Warehouse</b> Two</h2>
    <?php $result = $conn->query("SELECT * FROM VehicleAtWarehouse WHERE W_ID = 2"); 
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
                    Address:</b> <?= $row['W_Address'] ?><br>
                    Arrival Date:</b> <?= $row['Arrival_Date'] ?>
       
                </p>
                <a href="<?= $row['LINK']?>" class="btn btnPrimary" >View Item</a>
            </div>
        </section>
    <?php endwhile; $result->free();?>
    <div class="container-md" style="text-align:center"><button class="btn btnPrimary"><a href="#W1">Warehouse One</a></button> <button class="btn btnPrimary"><a href="#W2">Warehouse 2</a></button> <button class="btn btnPrimary"><a href="#W3">Warehouse 3</a></button></div>
    <hr><h2 id="W3" style="text-align: center; color:rgb(0, 160, 224)"><b style="color: #000;">Warehouse</b> Three</h2>
    <?php $result = $conn->query("SELECT * FROM VehicleAtWarehouse WHERE W_ID = 3"); 
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
                    Address:</b> <?= $row['W_Address'] ?><br>
                    Arrival Date:</b> <?= $row['Arrival_Date'] ?>
       
                </p>
                <a href="<?= $row['LINK']?>" class="btn btnPrimary" >View Item</a>
            </div>
        </section>
    <?php endwhile; $result->free();?>

    </main>
</form>
<?php include "./footer.php";?>