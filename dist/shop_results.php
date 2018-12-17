<?php

session_start();
$product_ids = array();


//session_destroy();

if(filter_input(INPUT_POST, 'add_to_cart')){
        if(isset($_SESSION['shopping_cart'])){

                $count = count($_SESSION['shopping_cart']);

                $product_ids = array_column($_SESSION['shopping_cart'], 'id');

                if(!in_array(filter_input(INPUT_GET, 'id'), $product_ids)){
                        $_SESSION['shopping_cart'][$count] = array(
                                'id' => filter_input(INPUT_GET, 'id'),
                                'name' => filter_input(INPUT_POST, 'name'),
                                'price' => filter_input(INPUT_POST, 'price'),
                                'quantity' => filter_input(INPUT_POST, 'quantity'),
                        );   
                }
                else {
                        for ($i=0; $i< count($product_ids); $i++){
                                if($product_ids[$i] == filter_input(INPUT_GET, 'id')){
                                        $_SESSION['shopping_cart'][$i]['quantity'] += filter_input(INPUT_POST,'quantity');
                                }
                        }
                }

        }
        else {
                $_SESSION['shopping_cart'][0] = array(
                        'id' => filter_input(INPUT_GET, 'id'),
                        'name' => filter_input(INPUT_POST, 'name'),
                        'price' => filter_input(INPUT_POST, 'price'),
                        'quantity' => filter_input(INPUT_POST, 'quantity'),
                );
        }
}

if(filter_input(INPUT_GET,'action') == 'delete'){
        foreach($_SESSION['shopping_cart'] as $key => $product){
                if($product['id'] == filter_input(INPUT_GET, 'id')){
                        unset($_SESSION['shopping_cart'][$key]);
                }
        }
        $_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']);
}
//pre_r($_SESSION);

function pre_r($array){
        echo '<pre>';
        print_r($array);
        echo'</pre>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Shop || Farmers Marketplace</title>
        <link rel="stylesheet" href="./sass/main.css">
        <link rel="icon" href="./img/logo.png" type="image" sizes="16x16"> 
</head>

<body>
        <div class="m">
                <div class="menudrop" id="mmd">
                        <ul>
                                <li></li>
                                <li id="mbtn">Shop by Categories</li>

                                <?php
                if(isset($_SESSION['username'])){
                  echo '<li><a href="orders.php">My Orders</a></li>';
                ?>
                                <li>
                                        <?php echo $_SESSION['fname']; ?>
                                </li>
                                <?php
                  echo '<li><a href="logout.php">Log Out</a></li>';
                }?>

                        </ul>
                </div>


<div class='row'>
                        <?php
include 'config.php';
$catid=$_SESSION['catid'];
$result=$mysqli->query("SELECT * FROM products where catid ='$catid' ORDER by pid ASC");

if($result):
        if(mysqli_num_rows($result)>0):
                while($product1 = mysqli_fetch_assoc($result)):   
                                
?>
                        <div class='product'>
                                <form method="post" action="shop_results.php?action=add&id=<?php echo $product1['pid']; ?>#tr">
                                        <div class='product__inner'>
                                                <img src="<?php echo $product1['image'];?>" width="150px" height="150px;" />
                                                <h4 class="pinfo">
                                                        <?php echo $product1['name']; ?>
                                                </h4>
                                                <h4>₹
                                                        <?php echo $product1['price']; ?>
                                                </h4>
                                                <input type="text" name="quantity" class="form-control" value="1" />
                                                <input type="hidden" name="name" value="<?php echo $product1['name'];?>" />
                                                <input type="hidden" name="price" value="<?php echo $product1['price']; ?>" />
                                                <input type="submit" name="add_to_cart" value="Add to Cart" class="button" />
                                        </div>
                                </form>
                        </div>
                </br>
                        <?php
                        endwhile;
                endif;
        endif;
?>


                <div style="clear:both">
                </div>
                <br />
                <div id="tr">
                        <table class="table">
                                <tr>
                                        <th colspan="5">
                                                <h3>Order Details</h3>
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
                                                        <div class="btn">Remove</div>
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
                                                <?php echo number_format($total,2);
                                                 ?>
                                        </td>
                                        <td></td>
                                </tr>
                                <td colspan="5">
                                        <?php 
                                        if(isset($_SESSION['shopping_cart'])):
                                        if(count($_SESSION['shopping_cart']) > 0):
                                        ?>
                                        <div class="btn"><a href="checkout.php">CheckOut</a></div>



                                        <?php endif; endif;  ?>
                                </td>
                                </tr>
                                <?php
                        endif;
                        ?>
                        </table>
                </div>
        </div>
        </div>
        </div>
        <div class="cover">
            <div class="close">+</div>
              <div class="content">
                    <form action="process2.php" method="post">
                      <input type="text" class="text" name="catid" value="2">
                      <div class="box"><input class="cb" type="submit" value="fruits"></div>
                    </form>
                    <form action="process2.php" method="post">
                      <input type="text" class="text" name="catid" value="1">
                      <div class="box2"><input class="cb" type="submit" value="vegetables"></div>
                    </form>
                    <form action="process2.php" method="post">
                      <input type="text" class="text" name="catid" value="3">
                      <div class="box3"><input class="cb" type="submit" value="groceries"></div>
                    </form>
            </div>
            <div class="cover1">
            <div class="closer">+</div>
              <div class="content">
                  
            </div>
    </div>
            </div>




            

        <script>
    document.getElementById('mbtn').addEventListener('click', function(){
        document.querySelector('.cover').style.display='flex';
});
document.querySelector('.closer').addEventListener('click',function(){
        document.querySelector('.cover').style.display='none';
});
</script>
</body>

</html>
