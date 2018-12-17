<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment</title>
    <link rel="stylesheet" href="sass/main.css">
    <link rel="icon" href="./img/logo.png" type="image" sizes="16x16"> 
</head>
<body>
<div class="pay">
<img src="./img/logo.png" alt="./img/logo.png" width="200px" height="160px">  
<h2>Select Your Payment Method</h2>

<form action="process.php" method="post">
  <input type="radio" name="payment" value="Card">Credit/Debit Card <br>
  <input type="radio" name="payment" value="Paytm">Paytm<br>
  <input type="radio" name="payment" value="COD">Cash On Delivery<br>
  <input type="submit"  onclick="alert('Order has been Completed')" value="order">
</form> 
</div>
</body>
</html>
