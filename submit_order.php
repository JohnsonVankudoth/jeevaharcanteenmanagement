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
// retrieve the form data
if(isset($_POST['items'])){
    $selectedItems = $_POST['items'];
  } else {
    // handle the error case
    echo "Selected items not received";
  }
  
  if(isset($_POST['amount'])){
    $totalAmount = $_POST['amount'];
  } else {
    // handle the error case
    echo "Total amount not received";
  }

// create a new database record for the order
$sql = "INSERT INTO john (items, amount) VALUES ('$selectedItems', '$totalAmount')";

if (mysqli_query($conn, $sql)) {
    echo "Order placed successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// close the MySQL connection
$conn->close();
?>
