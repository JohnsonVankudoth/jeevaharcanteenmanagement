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

// Get form data and insert into database
$username = $_POST["username"];
$email = $_POST["email"];
$Number = $_POST["mobilenumber"];
$password = $_POST["password"];
$sql = "INSERT INTO userdetails (username, email, mobilenumber, password) VALUES ('$username', '$email', '$Number', '$password')";

if (mysqli_query($conn, $sql)) {
    // Registration successful, display success message
    echo '<div style="background-color: skyblue; color: white; padding: 10px;">';
    echo 'You are successfully registered!';
    echo '</div>';
    // Add a button with a link to go back to home page
    echo '<div style="text-align:center;background-color:silver"';
    echo '</div>';
    echo '<a href="home.php"><button style="padding: 10px 10px;">Return to Home</button></a>';
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
