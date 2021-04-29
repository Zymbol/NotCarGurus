<body>
        <div class="container-lg">
            <?php 
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
	        echo '<h1 style="text-align: center;">Welcome, ' . $_SESSION['username'] . '!</h1>';

        }
        else {
	        echo '<h1 style="text-align: center;">Welcome, Guest!</h1>';
        }
?>
        <!-- <h1 style="text-align: center;">Welcome<br><br><br><br></h1> -->
        </div>
    </body>