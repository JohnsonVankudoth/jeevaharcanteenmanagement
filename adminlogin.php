<?php
// Start session
session_start();

// Check if user is already logged in
if (isset($_SESSION['adminname'])) {
    header("Location: order.php");
    exit();
}

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $adminname = $_POST['adminname'];
    $password = $_POST['password'];

    // Connect to database
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "John@1520";
    $dbname = "demo";
    $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if the user exists in the database
    $sql = "SELECT * FROM admindetails WHERE adminname='$adminname' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Login successful, set session variable and redirect to profile page
        $_SESSION['adminname'] = $adminname;
        mysqli_close($conn);
        header("Location: adminpage.php");
        exit();
    
    
    } else {
        // Login failed, show error message
        $error = "Invalid adminname or password";
    }

    mysqli_close($conn);
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

<title>Sign up</title>
<style>
    
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background-color: #f0f0f0;
    font-family: Arial, sans-serif;
}

.showcase {
    display: flex;  /**inline ,flex inline */
    justify-content: center;
    align-items: center;
    height: 100vh;
   
    background-size: cover;
}

.logo {
    margin-right: 20px;
}

.showcase-content {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    padding: 50px;
}

.formm {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.formm h1 {
    font-size: 32px;
    margin-bottom: 20px;
}

.info {
    display: flex;
    flex-direction: column;
    margin-bottom: 20px;
}

.email {
    padding: 10px;
    border: none;
    border-bottom: 1px solid #ccc;
    margin-bottom: 20px;
    width: 100%;
}

.btn {
    display: flex; 
    justify-content: center;
    align-items: center;
}

.btn-primary {
    background-color: #000;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: all 0.3s ease;
}

.btn-primary:hover {
    background-color: #fff;
    color: #000;
}

.signup {
    margin-top: 20px;
    text-align: center;
}

.signup a {
    color: #000;
    text-decoration: none;
    font-weight: bold;
    font-style: italic;
}

.signup a:hover {
    text-decoration: underline;
}

.formm {
    animation: colorful-border 2s linear infinite;
    padding: 2em;
   
    border-radius: 2em;
    box-shadow: 0 0 0.5em rgba(0, 0, 0, 0.5);
  }
  
  @keyframes colorful-border {
    0%   { border: 2px solid red; }
    25%  { border: 2px solid yellow; }
    50%  { border: 2px solid blue; }
    75%  { border: 2px solid green; }
    100% { border: 2px solid red; }
  }
  
  .info {
    margin: 4em 0;
  }
  
  .info input[type="text"],
  .info input[type="password"] {
    width: 100%;
    padding: 1em;
    margin-bottom: 1em;
    border: none;
    border-radius: 1em;
    box-shadow: 0 0 1em rgba(0, 0, 0, 0.2);
  }
  
  .btn {
    text-align: center;
  }
  
  .btn button {
    padding: 1em 2em;
    background-color: #336699;
    color: white;
    border: none;
    border-radius: 0.5em;
    box-shadow: 0 0 0.5em rgba(0, 0, 0, 0.2);
    cursor: pointer;
  }
  
  .btn button:hover {
    background-color: #335588;
  }
  

</style>
</head>
<body>
    <header class="showcase">
   
        <div class="showcase-content">
            <div class="formm">
            <form method="POST" action="">
                    <h1>Sign In</h1>
                    <div class="info">
                        <input class="email" type="text" name="adminname" placeholder="Admin name"> <br>
                        <input class="email" type="password" name="password" placeholder="Password">
                    </div>
                    <div class="btn">
                        <button class="btn-primary" type="submit">Sign In</button>
                    </div>
                </form>

            </div>
            
            
        </div>
            </div>
           
        
   
</header>
</body>
</html>
