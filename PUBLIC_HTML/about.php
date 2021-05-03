<?php 
include "./nav.php";
include "./header.php";
include "./connect.php";
?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 

<?php $result = $conn->query("SELECT * FROM Warehouse"); ?>

<div class="container mt-3" style="text-align: center;">
  <h2 style="text-align:center;">About Us</h2><hr>
  <h4>We are NotCarGurus and CarGurus is <i>not</i> us.</h4>  
  <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo">The Team</button>
  <div id="demo" class="collapse">
        <br><p>Edgar Bacallo (CEO, Foreign Relations Expert, Expansion Manager, Total Badass)<br>
        Zachary Scholefield (CEO, CFO, Website Lead Developer, Cool Dad Energy)<br>
        Preston Hidebrandt (CEO, New Hire Trainer, Product Analysis Lead, DaBaby Enthusiast)<br>
        Carter Womack (CEO, Head of Security, Guy That Hosts Funny Board Meetings, Chainmail Expert)<br>
        </p><br>
  </div>
  <hr><p>We have three warehouses in Bakersfield to ensure fast delivery directly to your home.</p>
  <img style="width:40vh" src="./images/warehouse.jpg"><br>
  <?php while ($row = $result->fetch_assoc()):?>
    <?= $row['W_Address'] ?><br><br>
    <?php endwhile;?>
</div>

