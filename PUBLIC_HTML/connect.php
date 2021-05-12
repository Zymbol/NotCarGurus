<?php
// if (session_status() == PHP_SESSION_NONE) {
//     session_start();    
// }
// Set up MySQL connection
$host = 'localhost';
$user = 'zscholefield';
$password = 'Dij6=bih';
$database = 'zscholefield';
static $conn;
$conn = mysqli_connect($host, $user, $password, $database) or die(mysqli_connect_error());

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>