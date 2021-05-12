<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MySQL + PHP essentials</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>MySQL + PHP essentials</h1>
Create a new account:
<form action="essentials.php" method="post">
Username: <input type="text" name="username" required><br/>
Password: <input type="password" name="password" required><br/>
<input type="submit" name="Register" value="Register an account">
<input type="submit" name="Login" value="Login">
</form>

<?php

date_default_timezone_set('America/Los_Angeles');
error_reporting(E_ALL);
ini_set("log_errors", 1);
ini_set("display_errors", 1);

require("password.php");

// Creates the PHP session so we can retain info between page reloads
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function get_connection() {
    static $connection;
    
    if (!isset($connection)) {
        // Connect to the cmps3420 database using username demo3420, password 3420.
        $connection = mysqli_connect('localhost', 'demo3420', '3420', 'cmps3420') or die(mysqli_connect_error());
    }
    if ($connection === false) {
        echo "Unable to connect to database<br/>";
        echo mysqli_connect_error();
    }
  
    return $connection;
}

// Generic error handling
if (isset($_SESSION["error"])) {
    echo $_SESSION["error"];
    unset($_SESSION["error"]);
    die();
}

if (isset($_POST['Register'])) {
    unset($_POST['Register']);

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (strlen($username) == 0 || strlen($password) == 0) {
	    $_SESSION["error"] = "Username and/or password cannot be empty!";
	    header("Location: essentials.php");
    }

    // Hash the password 
    $hash = password_hash($password, PASSWORD_DEFAULT);

    // Establish the connection and try to execute the stored procedure
    $db = get_connection();
    $statement = $db->prepare("CALL RegisterUser(?, ?)");
    $statement->bind_param('ss', $username, $hash);
    if ($statement->execute()) {
        mysqli_stmt_bind_result($statement, $res_userid, $res_error);
        if ($statement->fetch()) {
            if (is_null($res_userid)) {
                echo $res_error . "<br>";
                die();
            }
            else {
                echo 'Registration of ' . $username . " successful, userid is " . $res_userid . "<br>";
            }
        }
    }
    else {
        echo "Error registering user: " . mysqli_error($db);
        die();
    }
}

// If true, user is trying to log in
if (isset($_POST['Login'])) {
    unset($_POST['Login']);
    $db = get_connection();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $validation = $db->prepare("CALL LoginUser(?)");
    $validation->bind_param('s', $username);
    if ($validation->execute()) {
        mysqli_stmt_bind_result($validation, $res_id, $res_password);
        $validation->fetch();

        if (is_null($res_id) || is_null($res_password)) {
            $_SESSION["error"] = "The username and/or password combination was not found";
            header("Location: essentials.php");
        }
        else {
            // Verify user password
            $isGood = password_verify($password, $res_password);
            
            if ($isGood) {
                $_SESSION["user_id"] = $res_id;
                $_SESSION["username"] = $username;
            }
            else {
                $_SESSION["error"] = "The username and/or password combination was not found";
            }

            header("Location: essentials.php");
        }
    }
    else {
        echo "Error executing query: " . mysqli_error($db);
        die();
    }
}

if (isset($_SESSION["user_id"])) {
    echo "Welcome back, " . $_SESSION["username"] . "<br>";
}

?>

</body>
</html>