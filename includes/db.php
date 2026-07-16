<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "online_poll";

// Create connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

?>