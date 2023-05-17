<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <style>
    body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        /* style the table */
        .john {
            margin: 0 auto;
            width: 80%;
            background-color: #fff;
            border-collapse: collapse;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
        }

        /* style the table header */
        .john th {
            background-color: #0077be;
            color: #fff;
            padding: 10px;
            text-align: left;
            font-weight: bold;
            font-size: 14px;
        }

        /* style the table rows */
        .john td {
            border: 1px solid #ddd;
            padding: 10px;
            font-size: 14px;
        }

        /* style the alternate rows */
        .john tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* style the "No records found" message */
        .no-records {
            margin-top: 20px;
            text-align: center;
            color: #666;
            font-style: italic;
        }
    /* Basic styles for the dashboard */
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      font-size: 16px;
      background-color: #f5f5f5;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    /* Styles for the navigation menu */
    .menu {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #0077be;
      color: #fff;
      height: 50px;
      padding: 0 20px;
    }

    .menu a {
      color: #fff;
      text-decoration: none;
      font-weight: bold;
    }

    .menu ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
    }

    .menu li {
      margin: 0 10px;
    }

    /* Styles for the header */
    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #fff;
      color: #333;
      height: 80px;
      padding: 0 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .header h1 {
      margin: 0;
      font-size: 24px;
      font-weight: bold;
    }

    /* Styles for the content section */
    .content {
      margin-top: 20px;
      background-color: #fff;
      color: #333;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    /* Style for the logout button */
.header a {
  display: inline-block;
  padding: 10px 20px;
  background-color: #0077be;
  color: #fff;
  text-decoration: none;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.header a:hover {
  background-color: #005fa3;
}
/* set background color for the menu section */
.menu {
  background-color: #0077be;
}

/* set background color for the header section */
.header {
  background-color: #fff;
}

/* set background color for the content section */
.content {
  background-color: #f5f5f5;
}
.my-element {
  background-image: linear-gradient(to bottom, #0077be, #fff);
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

  </style>
   <?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['adminname'])) {
    // Redirect to the login page if the user is not logged in
    header("Location: adminlogin.php");
    exit();
}

// If the user clicks the signout button
if (isset($_POST['signout'])) {
    // Destroy the session
    session_destroy();
    // Redirect to the login page or any other page as needed
    header("Location: adminlogin.php");
    exit();
}
?>

</head>
<body>
  <div class="container">
    <div class="menu">
      <a href="#">ADMIN</a>
      <ul>
        
      </ul>
    </div>
    <div class="header">
      <h1>Dashboard</h1>
     
    <a href="adminrating.php">Ratings</a>
    <a href="adminfeedback.php">Feedbacks</a>
    <form method="post">
    <button type="submit" name="signout">Sign out</button>
</form>
    </div>
    <div class="john">
        <table border="0" class="john">
            <tr>
                <th>items</th>
                <th>amount</th>
                <th>name</th>
                <th>mobile</th>
                <th>utr</th>
                <th>time</th>
                <th>Date</th>
            </tr>
            <?php
            include("connectin.php") ;
            error_reporting(0);
            $query = "select *from  billforms";
            $data = mysqli_query($conn,$query);
            $total=mysqli_num_rows($data);

            if($total!=0)
            {
                while($result=mysqli_fetch_assoc($data))
                {
                    echo "
                    <tr>
                        <td> ".$result['items']."</td>
                        <td> ".$result['amount']."</td>
                        <td> ".$result['name']."</td>
                        <td> ".$result['mobile']."</td>
                        <td> ".$result['utr']."</td>
                        <td> ".$result['time']."</td>
                        <td> ".$result['date']."</td>
                    </tr>
                    ";
                }
            }
            else
            {
                echo "<tr><td colspan='6' class='no-records'>NO records found</td></tr>";
            }
            ?>
        </table>
    </div>
  </div>
</body>
</html>
