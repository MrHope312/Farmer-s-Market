<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login || Farmers Marketplace</title>
    <link rel="stylesheet" href="./sass/main.css">
    <link rel="icon" href="./img/logo.png" type="image" sizes="16x16"> 
</head>
<body>
<div class="mcon">


<form method="POST" action="verify.php">
  <div class="lcontainer">
  <img src="./img/logo.png" alt="./img/logo.png">
    <div class="user">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>
    </div>
    <div class="pass">
    <label for="psw"><b>Password</b></label>&nbsp
    <input type="password" placeholder="Enter Password" name="pwd"  required>
    </div>
    <button id="lbtn" type="submit">Login</button>
    </form>
    </div>

    <form action="register.php">
    <button id="rbtn" type="submit">Register</button>
    </form>

</div>
</body>
</html>
