<?php
include 'config.php';
session_start();
$uid=$_SESSION['uid'];
$results=$mysqli->query("SELECT * FROM cart where uid='$uid'");
$resultad=$mysqli->query("SELECT sname FROM users where uid='$uid'");
$rn=mysqli_num_rows($results);
$res=mysqli_fetch_array($results);
$resa=mysqli_fetch_array($resultad);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="sass/main.css">
    <title>My Orders || Farmers Marketplace</title>
    <link rel="icon" href="./img/logo.png" type="image" sizes="16x16"> 
</head>
<body>
<div class="menudrop">
       
<ul>
            
            <li id="mbtn">Shop by Categories</li>
            
                <?php
                if(isset($_SESSION['username'])){
                  echo '<li><a href="orders.php">My Orders</a></li>';
                ?>
                <li><?php echo $_SESSION['fname']; ?></li>
                <?php
                  echo '<li><a href="logout.php">Log Out</a></li>';
                }?>

        </ul>
    </div>
<img src="./img/logo.png" alt="./img/logo.png">

<table class="table" >
    <tr>
        <th colspan="6">
            <h3>My Orders</h3>
        </th>
    </tr>
    <tr>
        <th width="20%">Customer Name</th>
        <th width="20%">Product Name</th>
        <th width="10%">Quantity</th>
        <th width="10%">Price</th>
        <th width="10%">Total</th>
        <th width="30%">Address</th>
    </tr>

    
<?php 
for($i=0;$i<$rn-1;$i++){
    $res=mysqli_fetch_array($results);?>
<tr>
    <td><?php echo $_SESSION['fname'];?></td>
    <td><?php echo $res['pname']; ?></td>
    <td><?php echo $res['quantity']; ?></td>
    <td><?php echo $res['price']; ?></td>
    <td><?php echo $res['price']*$res['quantity']; ?></td>
    
    <td><?php echo $resa['sname'];?></td>
</tr>

<?php } ?>
</table>
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
    </div>
            

<script>
    document.getElementById('mbtn').addEventListener('click', function(){
        document.querySelector('.cover').style.display='flex';
});
document.querySelector('.close').addEventListener('click',function(){
        document.querySelector('.cover').style.display='none';
});
</script>


</body>
</html>
