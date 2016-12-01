<?php
include 'header.php';

$firstErr = $lastErr = $uidErr = $pwdErr = "";
$first = $last = $uid = $pwd = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["first"])) {
    $firstErr = "Firstname is required";
  } else {
    $first = test_input($_POST["first"]);
  }
  
  if (empty($_POST["last"])) {
    $lastErr = "Lastname is required";
  } else {
    $last = test_input($_POST["last"]);
  }
  
  if (empty($_POST["uid"])) {
    $uidErr = "Username is required";
  } else {
    $uid = test_input($_POST["uid"]);
  }
  
  if (empty($_POST["pwd"])) {
    $pwdErr = "Password is required";
  } else {
    $pwd = test_input($_POST["pwd"]);
  }
}

$sql = "INSERT INTO user(first, last, uid, pwd) VALUES('$first','$last','$uid','$pwd')";
$result = $conn->query($sql);

include 'footer.php';