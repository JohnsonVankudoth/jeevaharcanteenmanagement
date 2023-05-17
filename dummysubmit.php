<?php

session_start();

if (isset($_POST['signout'])) {
  // Debug statement to check if the condition is being satisfied
  echo "Signout button clicked";

  // Destroy the session
  session_destroy();
  // Redirect to the login page or any other page as needed
  header("Location: userlogin.php");
  exit();
}
 

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
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$utr = $_POST['utr'];
$time = $_POST['time'];
$date = $_POST['date'];

// create a new database record for the order
$sql = " INSERT INTO billforms (items, amount,name,mobile,utr,time,date) VALUES ('$selectedItems', '$totalAmount','$name','$mobile','$utr','$time','$date')";

if (mysqli_query($conn, $sql)) {
   
  echo '<style>
  h1 {
    color: blue;
   
    
  }
  
        p {
          color: #ff0000;
        }
        button {
          padding: 1em 2em;
          background-color: #336699;
          color: white;
          border: none;
          border-radius: 0.5em;
          box-shadow: 0 0 0.5em rgba(0, 0, 0, 1);
          cursor: pointer;
        }
        
         button:hover {
          background-color: #335588;
        }
        img
        {
          background-color:none;
        }

      </style>';
      
    
     

      
      
      // If the user clicks the signout button
     
   
    echo '<h1><center><font size="50">Order placed successfully...!!!!</font>  <center><h1>' ;

    echo '<div style="text-align: center;">
       <a href="order.php"><button type="submit" name="Return to Home">Return to Home</button></a>
    
      
     


    </div><br>';

    echo '<form method="post" action="">
       <center><button type="submit" name="signout">Sign out</button><center>
    </form><br>';

  
     
      
      echo '<img src="wait.jpg" alt="Description of the image" width="200" height="200">';

      echo '<img src="ok.png" alt="Description of the image" width="200" height="200">';
     
    


} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


// close the MySQL connection
$conn->close();
?>
