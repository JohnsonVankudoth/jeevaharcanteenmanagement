<?php

include("connectin.php");
error_reporting(0);
$adminname = $_POST["adminname"];
$password = $_POST["password"];
$sql = "INSERT INTO admindetails(adminname, password) VALUES ('$adminname',  '$password')";

if (mysqli_query($conn, $sql)) {
    // Registration successful, display success message
    echo '<div style="background-color: skyblue; color: white; padding: 10px;">';
    echo 'You are successfully registered!';
    echo '</div>';
    // Add a button with a link to go back to home page
    echo '<div style="text-align:center;background-color:silver"';
    echo '</div>';
    echo '<a href="display.php"><button style="padding: 10px 10px;">Return to Home</button></a>';
    echo '</div>';
} else {
    // Registration unsuccessful, display error message
    echo '<div style="background-color: red; color: white; padding: 10px;">';
    echo 'Error: ' . mysqli_error($conn);
    echo '</div>';
}

// Close database connection
mysqli_close($conn);
?>