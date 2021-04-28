<?php

// Set up MySQL connection
$host = 'localhost';
$user = 'zscholefield';
$password = 'Dij6=bih';
$database = 'zscholefield';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_errno) {
    die("Connection failed: {$conn->connect_error}\n");
}

?>
