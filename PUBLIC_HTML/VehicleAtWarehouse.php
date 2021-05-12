<div class="container-md">
<?php
error_reporting(E_ALL);
include "connect.php";
include "nav.php";
include "header.php";?>
<div class="container-md" style="display: inline-block;">
<div class="container-md" style="text-align: center;"><hr><h3>Warehouse Inventory</h3><hr></div>
<?php $result = $conn->query("SELECT * FROM VehicleAtWarehouse"); ?>

<form method="POST">
<?php while ($row = $result->fetch_assoc()): ?>
    <div class="carousel-inner py-4">
    <!-- Single item -->
        <div class="carousel-item active">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                        <img class="thumbnail" src=<?= $row['Image'] ?>>
                            <div class="card-body">
                            <h5 class="card-title"><?=$row['Year']. " ". $row['Make'] . " " . $row['Model']?></h5>
                            <p class="card-text">
                                Make:</b> <?= $row['Make']?><br>
                                Model:</b> <?= $row['Model']?><br>
                                Color:</b> <?= $row['Color']?><br>
                                Wear:</b> <?= $row['Wear'] ?><br>
                                Year:</b> <?= $row['Year'] ?>
                                Price:</b> <?= $row['Price']?><br>
                                Vin:</b> <?= $row['VIN']?><br>
                                Mileage:</b> <?= $row['Mileage']?><br>
                                Warehouse ID:</b> <?= $row['W_ID'] ?><br>
                                Warehouse Address:</b> <?= $row['W_Address'] ?>
                                Arrival Date:</b> <?= $row['Arrival_Date'] ?>
			    </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endwhile;
    $result->free();?>
        <!-- <h5><b><?=$row['Year']. " ". $row['Make'] . " " . $row['Model']?></b></h5> -->
        <!-- <h5>$<?=number_format($row['Price'], 2) ?></h5> -->
        <!-- <h5><img style="width: 19em;" src=<?= $row['Image'] ?>></h5> -->
        <!-- <h5><b>Miles:</b> <?= number_format($row['Mileage']) ?></h5> -->
        <!-- <h5><b>Condition:</b> <?= $row['Wear']?></h5> -->
        <!-- <h5><b>VIN:</b> <?= $row['VIN'] ?></h5> -->

        <h5>
        <hr>
        </form>
</div>
     
    <?php include './footer.php';
