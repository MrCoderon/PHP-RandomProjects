<?php
include 'header.php';
include 'dbh.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd'";
$result = $conn->query($sql);

if (!$row = $result->fetch_assoc()) {
  echo "<p class='main' style='font-size: 79px'>Your username or password is incorrect!</p>";
  echo "<br><div class='loader'></div>";
  echo "<script type='text/javascript'>var location1='../index.php';setTimeout(function(){window.location  = location1;}, 2000);</script>";
} elseif(!$_SESSION['id'] = null) {
  echo $_SESSION['id'] = $row['id'];
  echo "<script type='text/javascript'>var location1='../index.php';setTimeout(function(){window.location  = location1;}, 2000);</script>";
} else {
  $_SESSION['id'] = $row['id'];
  echo "<p class='main'>Welcome ".$uid."</p>";
  echo "<br><div class='loader'></div>";
  echo "<script type='text/javascript'>var location2='../index.php';setTimeout(function(){window.location = location2;}, 2000);</script>";
  echo $_SESSION['id'] = $row['id'];
}
include 'footer.php';
?>