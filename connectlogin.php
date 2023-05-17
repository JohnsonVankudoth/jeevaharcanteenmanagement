<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "John@1520";
$dbname = "demo";
$conn = mysqli_connect($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $password = $_POST["password"];
    
    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    // Insert the data into the database
    $sql = "INSERT INTO userdetails (name, email, mobile, password)
            VALUES ('$name', '$email', '$mobile', '$hashed_password')";
    
    if ($conn->query($sql) === TRUE) {
        // Redirect to the login page
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
