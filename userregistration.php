<!-- registration.php -->
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
   
	<title>Registration</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background: linear-gradient(to right, blue, green, yellow, orange,pink);
   

    font-family: Arial, sans-serif;
}

.showcase {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-image: url('background-image.jpg');
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
     background-color: papayawhip;
    border-radius: 100px;
    box-shadow: 0 0 12px rgba(0, 0, 0, 1);
    padding: 50px;
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
    background-color: green;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 10px;
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
   
    text-decoration: none;
    font-weight: bold;
}

.signup a:hover {
    text-decoration: underline;
}

  
  
        form {
			border: 5px solid #D4AF37;
			border-radius: 10px;
			padding: 20px;
			animation: rainbow 5s infinite;
		}
		@keyframes rainbow {
			0% {
				border-color: #D4AF37;
			}
			20% {
				border-color: #ff0000;
			}
			40% {
				border-color: #ffa500;
			}
			60% {
				border-color: #ffff00;
			}
			80% {
				border-color: #008000;
			}
			100% {
				border-color: #0000ff;
			}
		}
    </style>
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
            <form method="POST" action="john.php">
                <div class="info">
                    <input class="email" type="text" name="username" placeholder="Username" required><br>
                    <input class="email" type="email" name="email" placeholder="Email" required><br>
                    <input class="email" type="tel" name="mobilenumber" placeholder="Mobile Number" required><br>
                    <input class="email" type="password" name="password" placeholder="Password" required><br>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</header>
</body>
</html>
