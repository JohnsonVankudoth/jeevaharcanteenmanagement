<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        

        *{
            margin-top: 0;
            margin-left: 0;
            margin-right: 0;
        }
        body
        {
            background-image: url(cover.jpg);
            background-repeat: no-repeat;
        }
        img{
            border-radius: 100%;
        }
        .container{
         display: grid;
        align-items: center;
        grid-template-columns: 1fr 1fr 1fr ;
        grid-template-rows:  1fr 1fr;
        column-gap: 25px;
        row-gap: 25px;
        background-color:rgba(131, 104, 71, 0.491);
        padding-left: 47%;
        padding-top: 1%;
        text-decoration: none;
        opacity: 0.9;
        }
        .hari
        {
            background-image: url(gt.jpg);
        } 
        .scroll
        {
            background-color:rgb(196, 194, 41);
        }
        .food
        {
            background-color: burlywood;
        }
        h4
        {
            margin-left: 12%;
        }
        .john{
            background-color:green;
            display: flex;
            justify-content:end;
            align-items: end;
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
        button:last-of-type {
            margin-right: 10px;
        }
        .user-header {
  background-color: #333;
  color: white;
  text-align: center;
  padding: 10px;
}

.user-header h1 {
  font-size: 2em;
  margin: 0;
}
.header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      
      color: #333;
      
      padding: 0 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .header h1 {
      margin: 0;
      font-size: 24px;
      font-weight: bold;
    }
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

       
       
    </style>
    <?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to the login page if the user is not logged in
    header("Location: userlogin.php");
    exit();
}

$username = $_SESSION['username'];

// If the user clicks the signout button
if (isset($_POST['signout'])) {
    // Destroy the session
    session_destroy();
    // Redirect to the login page or any other page as needed
    header("Location: userlogin.php");
    exit();
}
?>




</head>
<body>
<div class="user-header">
  <h1>Welcome <?php echo $_SESSION['username']; ?>!</h1>
</div>
    <div class="food">
    <marquee direction="right" 
        behavior="alternate" 
        style="border:rgba(167, 103, 103, 0.308) 2px SOLID">
        ORDER YOUR FOOD
    </marquee>
</div>
<div class="john">
<form method="post">
    <button type="submit" name="signout">Sign out</button>
</form>

<div class="header">
<a href="profile.php">Profile</a>
</div>
</div>
<div class="sh">


  <div class="container">
 
  <div class="Combinedmenu">
        <img src="veg1.png" width="150px" height="130px">
       <h4> <a href="combinedmenu.php">FULL MENU</a></h4>
    </div>
    
    <div class="Combopacks">
        <img src="veg1.png" width="150px" height="130px">
       <h4> <a href="combopacks.php">COMBOPACKS</a></h4>
    </div>
    
    <div class="vegetarian">
        <img src="veg1.png" width="150px" height="130px">
       <h4> <a href="newveg.php">VEGETARIAN</a></h4>
    </div>
    <div class="Nonvegetarian">
        <img src="b2.jpg" width="150px" height="130px">
        <h4><a href="nonveg.php">NON-VEGETARIAN</a></h4>
    </div>
    <div class="breakfast">
        <img src="breakfast1.png" width="150px" height="130px">
        <h4><a href="break.php">BREAKFAST</a></h4>
    </div>
    <div class="SOFTDRINK">
        <img src="softdrink.png" width="150px" height="130px">
       <h4> <a href="softdrinks.php">COOL DRINKS</a></h4>
    </div>
  </div>
</div>
<div class="scroll">
    <marquee>FOR ANY QUERIES CONTACT US:8074723268</marquee>
</div>

</marquee>
<div class="hari">
<marquee direction="right" 
behavior="alternate" 
style="border:rgba(0, 0, 0, 0.53)  SOLID" >
<img src="croped.png" width="10% " height="10%">
</div> 
</body>
</html>