<?php
// Set up MySQL database connection
$servername = "localhost";
$username = "root";
$password = "John@1520";
$dbname = "demo";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}