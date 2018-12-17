<?php
session_start();
$catid=$_POST['catid']; 
$_SESSION['catid']=$catid;
if(isset($_POST['catid'])){
    header("location:shop_results.php");
}
?>
