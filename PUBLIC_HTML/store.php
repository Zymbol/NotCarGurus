<div >
<?php 
error_reporting(E_ALL);
include "connect.php";?>
<div data-aos="zoom-out-down"
     data-aos-anchor-placement="top-bottom">
<?php
include "nav.php";?>
</div>
<?php
include "header.php";?>
<div class="container-md" style="text-align: center;">
<hr data-aos="zoom-out-up" data-aos-duration="1500">
    <h3 data-aos="fade-down-right">Our Vehicles</h3>
<hr data-aos="zoom-out-up" data-aos-duration="1500">
</div>
<form>
<!-- Main -->
<main class="container" style="overflow-y: hidden;" >
<!-- Item -->
<?php $result = $conn->query("SELECT * FROM Vehicle"); 
while ($row = $result->fetch_assoc()):?>
<section class="card" data-aos="zoom-out-up" data-aos-duration="1500" style="overflow-y: hidden;">
    <img style="order:2" class="thumbnail" src="<?= $row['Image']?>" alt="">
    <div>
    <h3><?=$row['Year']. " ". $row['Make'] . " " . $row['Model']?></h3>
    <p>
        $<?=number_format($row['Price'], 2) ?><br>
        Miles:</b> <?= number_format($row['Mileage']) ?><br>
        Condition:</b> <?= $row['Wear']?><br>
        Color:</b> <?= $row['Color'] ?><br>
        VIN:</b> <?= $row['VIN'] ?>
       
    </p>
    <a href="<?= $row['LINK']?>" class="btn btnPrimary">View Item</a>
</div>
</section>
<?php 
endwhile; $result->free();
?>

</main>
</form>
<?php include "./footer.php";?>