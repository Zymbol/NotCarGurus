<form method="POST">
<div data-aos="zoom-out-right"
     data-aos-anchor-placement="top-bottom">
<?php 
error_reporting(E_ALL);
include "connect.php";
include "nav.php";
include "header.php";?>
<div >
<div class="container-md" style="text-align: center; margin-bottom: 2rem;"><hr><h3>2019 Dodge Charger</h3><hr></div>
<?php $result = $conn->query("SELECT * FROM Vehicle WHERE VIN = 'GNPDH4AF6FH449495'"); ?>
<form method="POST">
<?php while ($row = $result->fetch_assoc()): ?>    
    <div class="container card" style="margin:auto">
        <img style="margin: auto; width:auto" class="thumbnail" src=<?= $row['Image'] ?>>
        <div class="card-body">
            <p class="card-text ">
            $<?=number_format($row['Price'], 2) ?><br>
            Miles:</b> <?= number_format($row['Mileage']) ?><br>
            Condition:</b> <?= $row['Wear']?><br>
            Color:</b> <?= $row['Color'] ?><br>
            VIN:</b> <?= $row['VIN'] ?>
            <div class="text-center">
                <a href="<?= $row['LINK']?>" class="btn btnPrimary">Purchase Now</a>               
            </div>
        </div>         
    </div>
        <!-- </div> -->
    </div>
    </form>
<?php endwhile;
    $result->free();?>
    <div style="margin-top: 2rem;">
    <?php
    include "./footer.php";?>
    </div>