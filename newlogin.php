<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: 50px;
}

input {
  padding: 10px;
  margin: 10px;
  border: none;
  border-radius: 5px;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  transition: all 0.3s ease;
}

input:focus {
  outline: none;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.4);
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
  transition: all 0.3s ease;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}

form:first-child input {
  transform: translateX(-50px);
  opacity: 0;
  animation: slide-in 0.5s ease forwards;
}

@keyframes slide-in {
  to {
    transform: translateX(0px);
    opacity: 1;
  }
}

form:last-child input {
  transform: translateY(-50px);
  opacity: 0;
  animation: slide-up 0.5s ease forwards;
}

@keyframes slide-up {
  to {
    transform: translateY(0px);
    opacity: 1;
  }
}


    </style>
</head>
<body>
<form>
  <input type="text" name="name" placeholder="Name">
  <input type="tel" name="mobile" placeholder="Mobile">
  <input type="email" name="email" placeholder="Email">
  <input type="password" name="password" placeholder="Password">
  <input type="submit" value="Register">
</form>

<form>
  <input type="email" name="email" placeholder="Email">
  <input type="password" name="password" placeholder="Password">
  <input type="submit" value="Login">
</form>
 <script>
 const registrationForm = document.querySelector('form:first-child');
const loginForm = document.querySelector('form:last-child');

registrationForm.addEventListener('submit', e => {
  e.preventDefault();
  // validate form input
  // submit data to server
});

loginForm.addEventListener('submit', e => {
  e.preventDefault();
  // validate form input
  // submit data to server
});
</script>

</body>
</html>