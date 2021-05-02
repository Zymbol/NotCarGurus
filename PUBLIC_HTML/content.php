<body>
        <div class="container-lg">
            <?php 
        if (isset($_SESSION["user_id"])) {
	        echo '<hr><h1 style="text-align: center;">Welcome, ' . $_SESSION["username"] . '!</h1><hr>';

        }
        else {
	        echo '<hr><h1 style="text-align: center;">Welcome, Guest!</h1><hr>';
        }
?>
        <!-- <h1 style="text-align: center;">Welcome<br><br><br><br></h1> -->
        </div>
        
            <img style="width:100%;" src="./images/meme.jpg">
        
    </body>