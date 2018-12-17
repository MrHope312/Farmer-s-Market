<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop || Farmers Marketplace</title>
    <link rel="stylesheet" href="sass/main.css">
    <link rel="icon" href="./img/logo.png" type="image" sizes="16x16"> 
</head>
<body>
<div class="menudrop">
        <ul>
            <li></li>
            
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


<div class="bg1">
        <div class="greet">
            <h1>Welcome <?php echo $_SESSION['fname'];?></h1>
            <h3>What do you like to Buy today?</h3>
        </div>
                <div class="sh">
                        <input type="text">
                        <button type="submit"><p>SEARCH</p></button>
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
