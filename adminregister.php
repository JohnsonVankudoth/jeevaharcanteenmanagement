<!-- registration.php -->
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="registraion.css">
	<title>Registration</title>
</head>
<body>
<header class="showcase">    
    
    <div class="showcase-content">
        <div class="formm">
            <h1>Registration</h1>
            <?php if(isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <p><?php echo $_GET['error']; ?></p>
                </div>
            <?php } ?>
            <form method="POST" action="admin1.php">
                <div class="info">
                    <input class="email" type="text" name="adminname" placeholder="adminname" required><br>
                    <input class="email" type="password" name="password" placeholder="password" required><br>
                   
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</header>
</body>
</html>
