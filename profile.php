<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <style>
        body {
            background-color: lightblue;
            font-family: Arial, sans-serif;
            font-size: 16px;
            color: #333;
        }
        

        h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        hr {
            border: 1px solid #ccc;
            margin: 20px 0;
        }
        .order {
            margin-bottom: 20px;
        }
        .order h2 {
            font-size: 20px;
            margin-bottom: 10px;
        }
        .order p {
            margin: 5px 0;
        }
        .john {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.john h1 {
  margin: 0;
  padding: 10px;
}
button {
            padding: 1em 2em;
            background-color: #336699;
            color: white;
            border: none;
            border-radius: 0.9em;
            box-shadow: 0 0 0.5em rgba(0, 0, 0, 1);
            cursor: pointer;
        }
        button:hover {
            background-color: #335588;
        }
        button:last-of-type {
            margin-right: 8px;
        }

    </style>
</head>
<body>
<div class="john">
       <h1>Summary</h1>
       <div class="rating">
           <form action="submit_rating.php" method="post">
               <label for="rating">Rate us:</label>
               <input type="number" id="rating" name="rating" min="1" max="5" required>
               <input type="submit" value="Submit">
           </form>
       </div>
       <div class="feedback">
           <h3><a href="Feedback.php">Feedback</a><h3>
       </div>
       <form method="post">
           <button type="submit" name="signout">Sign out</button>
       </form>
   </div>

   
    <?php
    // Start the session
    session_start();

    // Check if the user is logged in
    if (!isset($_SESSION['username'])) {
        // Redirect to the login page if the user is not logged in
        header("Location: userlogin.php");
        exit();
    }
    if (isset($_POST['signout'])) {
        // Destroy the session
        session_destroy();
        // Redirect to the login page or any other page as needed
        header("Location: userlogin.php");
        exit();
    }

    // Get the user ID from the session
    $name = $_SESSION['username'];

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

    // Get the user's orders from the database
    $query = "SELECT * FROM billforms WHERE name = '$name'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            // Display the user's orders

            echo '<style>



               .order
               {
                background-color:#fff;
               }




            </style>';

            echo "<div class='order'>";
            echo "<h2>Order Details</h2>";

            // Display the items in the order
            echo "<p><strong>Items:</strong> " . $row["items"] . "</p>";

            // Display the amount paid
            echo "<p><strong>Amount Paid:</strong> " . $row["amount"] . "</p>";

            // Display the transaction ID
            echo "<p><strong>Transaction ID:</strong> " . $row["utr"] . "</p>";

            // Display the date and time
            echo "<p><strong>Date:</strong> " . $row["date"] . "</p>";
            echo "<p><strong>Time:</strong> " . $row["time"] . "</p>";

            echo "</div>";

            echo "<hr>";
        }
    } else {
        echo "Error executing query: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
    ?>
</body>
</html>
