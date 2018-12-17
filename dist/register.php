<?php
if(session_id() == '' || !isset($_SESSION)){session_start();}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register || Farmers Marketplace</title>
    <link rel="stylesheet" href="./sass/main.css">
    <link rel="icon" href="./img/logo.png" type="image" sizes="16x16"> 
</head>
<body>
<div class="mcon">
<form method="POST" action="insert.php">
  <div class="lcontainer">
  <img src="./img/logo.png" alt="./img/logo.png" width="200px" height="160px">  
    <div class="name">
    <label><b>Name</b></label>
    <input type="text" placeholder="Enter name" name="fname" required>
    </div>
    <div class="user">
    <label><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    </div>
    <div class="pass">
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pwd" required minlength="4"
       maxlength="8" size="8" >
    </div>
    <div class="streetname">
    <label><b>Street Name</b></label>
    <input type="text" placeholder="Enter Street Name" name="sname" required>
    </div>
    <div class="city">
    <label><b>City</b></label>
    <input type="text" placeholder="Enter City" name="city" required>
    </div>
    <div class="user">
    <label><b>Zipcode</b></label>
    <input type="text" placeholder="Enter Zipcode" name="zcode" required minlength="6"
       maxlength="6" size="6">
    </div>
    <div class="user">
    <label><b>Mobile Number</b></label>
    <input type="text" placeholder="Enter Mobile Number" name="pnum" required minlength="10"
       maxlength="10" size="10">
    </div>
    <button type="submit">Register</button>
    </div>
</div>
</form>
</div>    
</body>
</html>
