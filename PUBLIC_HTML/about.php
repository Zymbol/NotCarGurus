<div data-aos="fade-down"  data-aos-duration="2500">
<?php 
include "./nav.php";?>
</div>
<?php
include "./header.php";
include "./connect.php";
?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 

<?php $result = $conn->query("SELECT * FROM Warehouse"); ?>

<div class="container mt-3" style="text-align: center;">
  <h2 style="text-align:center;"><b>About</b> Us</h2><hr>
  <h4>We are NotCarGurus and CarGurus is <i>not</i> us.</h4>  
  <button type="button" class="btn btn-primary" style="background:rgb(0, 160, 224);" data-toggle="collapse" data-target="#demo">The Team</button>
  <div id="demo" class="collapse">
        <br><p>Edgar Bacallo (CEO, Foreign Relations Expert, Expansion Manager, Total Badass)<br>
        Zachary Scholefield (CEO, CFO, Lead Website Developer, Cool Dad Energy)<br>
        Preston Hildebrandt (CEO, New Hire Trainer, Product Analysis Lead, DaBaby Enthusiast)<br>
        Carter Womack (CEO, Head of Security, Guy That Hosts Funny Board Meetings, Chainmail Expert)<br>
        </p><br>
  </div>
  <hr ><p>We have three warehouses in Bakersfield to ensure fast delivery directly to your home.</p>
  <img data-aos="zoom-out" data-aos-duration="2500" style="width:40vh" src="./images/warehouse.jpg"><br>
  <div class="container" style="margin-top: 2rem; margin-bottom:2rem">
    <div  data-aos="zoom-in" class="card">
      <?php while ($row = $result->fetch_assoc()):?>
      <?= $row['W_Address'] ?><br>
      <img class="thumbnail" src="<?= $row['W_Image'] ?>"><br>
      <?php endwhile;?>
    </div>
    
  </div>
</div>
<?php include "./footer.php";?>

