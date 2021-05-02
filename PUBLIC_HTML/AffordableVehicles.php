<div class="container-md">
<?php 
error_reporting(E_ALL);
include "connect.php";
include "nav.php";
include "header.php";?>
<div class="container-md" style="display: inline-block;">
<div class="container-md" style="text-align: center;"><hr><h3>View of Vehicles under $50,000</h3><hr></div>
<?php $result = $conn->query("SELECT * FROM AffordableVehicles"); ?>

<form method="POST">
<?php while ($row = $result->fetch_assoc()): ?>          
    <div class="carousel-inner py-4">
    <!-- Single item -->
        <!-- <div class="carousel-item active"> -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <img class="thumbnail" src=<?= $row['Image'] ?>>
                            <div class="card-body">
                            <h5 class="card-title"><?=$row['Year']. " ". $row['Make'] . " " . $row['Model']?></h5>
                            <p class="card-text">
                                $<?=number_format($row['Price'], 2) ?><br>
                                Miles:</b> <?= number_format($row['Mileage']) ?><br>
                                Condition:</b> <?= $row['Wear']?><br>
                                Color:</b> <?= $row['Color'] ?><br>
                                VIN:</b> <?= $row['VIN'] ?>
                            </p>
                                <a href="#!" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- </div> -->
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
    ?> 