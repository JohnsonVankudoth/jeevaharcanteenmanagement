<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to the login page if the user is not logged in
    header("Location: userlogin.php");
    exit();
}


$name = $_SESSION['username'];

// Get the rating from the form submission

if(isset($_POST['feeback'])){
    $feedback = $_POST['feeback'];
} else {
    $feedback = '';
}
//if (isset($_POST['submit'])) {
    //echo "Form submitted!";
////} else {
    ////echo "Form not submitted!";
//}



// Connect to the database
$servername = "localhost";
$dbusername = "root";
$dbpassword = "John@1520";
$dbname = "demo";
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

// Check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert the rating into the database
$query = "INSERT INTO feebacktable (name, feeback) VALUES ('$name', '$feedback')";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "Form submitted successfully!";
} else {
    echo "Error submitting rating: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
