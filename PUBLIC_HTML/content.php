<?php session_start();
$username = $_SESSION["uname"];?>

<body>
        <div class="container-lg">
            <?php 
        if (isset($_SESSION["uname"])) {
	        echo '<hr><h1 style="text-align: center;">Welcome, ' . $username . '!</h1><hr>';

        }
        else {
	        echo '<hr><h1 style="text-align: center;">Welcome, Guest!</h1><hr>';
        }
?>
        <!-- <h1 style="text-align: center;">Welcome<br><br><br><br></h1> -->
        </div>
        
            <img style="width:100%; margin:auto;" src="./images/meme.jpg">
        
    </body>