<?php
session_start();
include 'config.php';
$username = $_POST["username"];
$password = $_POST["pwd"];
$flag = 'true';

$result = $mysqli->query('SELECT email,password,fname,uid from users');

if($result === FALSE){
  die(mysql_error());
}

if($result){
  while($obj = $result->fetch_object()){
    if($obj->email === $username && $obj->password === $password) {
      $_SESSION['username'] = $username;
      $_SESSION['uid'] = $obj->uid;
      $_SESSION['fname'] = $obj->fname;
      header("location:shop.php");
    } else {

        if($flag === 'true'){
          redirect();
          $flag = 'false';
        }
    }
  }
}

function redirect() {
  echo '<h1>Invalid Login! Redirecting...</h1>';
  header("Refresh: 10; url=login.php");
}
?>
