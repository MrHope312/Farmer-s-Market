<?php
session_start();
include 'config.php';

if(!empty($_SESSION['shopping_cart'])):
    foreach($_SESSION['shopping_cart'] as $key => $product):
        $name=$product['name'];
        $quantity=$product['quantity'];
        $price=$product['price'];
        $pid=$product['id'];
        $uid=$_SESSION['uid'];
        
        if($mysqli->query("INSERT INTO  cart(pname,quantity,price,pid,uid) VALUES('$name', '$quantity', '$price', '$pid','$uid')")){
            header("location:orders.php");
        }
    endforeach;
endif;
?>


