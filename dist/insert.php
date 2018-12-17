<?php
session_start();
include 'config.php';

$name = $_POST["fname"];
$email = $_POST["email"];
$pwd = 		$_POST["pwd"];
$sname = $_POST["sname"];
$city = $_POST["city"];
$zcode = $_POST["zcode"];
$pnum = $_POST["pnum"];

if($mysqli->query("INSERT INTO  users(fname,email,password,sname,city,zcode,pnum) VALUES('$name', '$email', '$pwd', '$sname','$city', '$zcode', '$pnum')")){
	echo 'Data inserted';
	echo '<br/>';
	header("location:login.php");
}


?>
