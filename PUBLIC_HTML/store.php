<div class="container-md">
<?php 
error_reporting(E_ALL);
include "connect.php";
// include "nav.php";
// include "header.php";?>
<div class="container-md">

<?php 


$result = $conn->query("SELECT * FROM Vehicle"); ?>
    <form method="POST">
        <?php 
        while ($row = $result->fetch_assoc()): 
        ?>
        <h5><b><?=$row['Year']. " ". $row['Make'] . " " . $row['Model']?></b></h5>
        <h5>$<?=number_format($row['Price'], 2) ?></h5>
        <h5><img style="width: 19em;" src=<?= $row['Image'] ?>></h5>
        <h5><b>Miles:</b> <?= number_format($row['Mileage']) ?></h5>
        <h5><b>Condition:</b> <?= $row['Wear']?></h5>
        <h5><b>VIN:</b> <?= $row['VIN'] ?></h5>

        <h5>
	<hr>
	<?php endwhile;?>
        </form>
</div>
<!--      
    <?php include './footer.php';
    ?> -->