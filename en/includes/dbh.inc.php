<?php

$servername = "localhost";
$username = "root";
$password = "root";
$database = "schoolassistant";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
    $conn->query("SET NAMES utf8");
    $conn->query("SET CHARACTER SET utf8");

?>
