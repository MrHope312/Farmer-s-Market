<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout</title>
    <link rel="stylesheet" href="sass/main.css">
    <link rel="icon" href="./img/logo.png" type="image" sizes="16x16"> 
</head>
<body>
<img src="./img/logo.png" alt="./img/logo.png" width="200px" height="160px">
<div>
        <h1 style="text-align:center;">Almost there...</h1>
<div>
<table class="table">
                                <tr>
                                        <th colspan="5">
                                                <h1>INVOICE</h1>
                                        </th>
                                </tr>  
                                <tr>
                                        <th width="40%">Product Name</th>
                                        <th width="10%">Quantity</th>
                                        <th width="20%">Price</th>
                                        <th width="15%">Total</th>
                                        <th width="5%">Action</th>
                                </tr>
                                <?php 
                                if(!empty($_SESSION['shopping_cart'])):
                                        $total = 0;
                                        foreach($_SESSION['shopping_cart'] as $key => $product):
                                                 
                                ?>
                                <tr>
                                        <td>
                                                <?php echo $product['name']; ?>
                                        </td>
                                        <td>
                                                <?php echo $product['quantity']; ?>
                                        </td>
                                        <td>
                                                <?php echo $product['price']; ?>
                                        </td>
                                        <td>
                                                <?php echo number_format($product['quantity']* $product['price'],2); ?>
                                        </td>
                                        <td>
                                                <a href="shop_results.php?action=delete&id=<?php echo $product['id']; ?>#tr">
                                                        <div class="button">Remove</div>
                                                </a>
                                        </td>
                                </tr>
                                <?php 
                                $total = $total + ($product['quantity'] * $product['price']);
                                endforeach;
                                ?>
                                <tr>
                                        <td coldpsan="3" align="right">Total</td>
                                        <td align="right">₹
                                                <?php echo number_format($total,2); ?>
                                        </td>
                                        <td></td>
                                </tr>
                                <td colspan="5">
                                </td>
                                </tr>
                                <?php
                        endif;
                        ?>
                        </table>
</div>
<h1>SHIPPING DETAILS</h1>
<div style="font-size:20px;">
<?php
include 'config.php';
$uname = $_SESSION['username'];
$result=$mysqli->query("SELECT * FROM users where fname ='$uname'");
while($ship = mysqli_fetch_assoc($result)):?> 
                <h4>Name &nbsp    :<?php echo $ship['fname']; ?></h4>
                <h4>Street name   :<?php echo $ship['sname']; ?></h4>
                <h4>City          :<?php echo $ship['city']; ?></h4>   
                <h4>Zipcode       :<?php echo $ship['zcode']; ?></h4>
                <h4>Mobile Number :<?php echo $ship['pnum']; ?></h4>
                <?php
             endwhile;   
?>                       
</div>
<form action="payment.php">
<button type="submit">Proceed to Payment</button>
</form


</div>
</body>
</html>
