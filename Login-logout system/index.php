<?php 
  include 'includes/header.php'
?>
<form class="form" action="includes/signup.inc.php" method="POST" autocomplete="off">
  <h1>Welcome</h1>
  <input class="first" type="text" name="first" placeholder="Firstname" required>
  <input class="last" type="text" name="last" placeholder="Lastname" required>
  <input class="user" type="text" name="uid" placeholder="User" required>
  <input class="pass" type="password" name="pwd" placeholder="Password" required>
  <button class="button" type="submit">Sign Up!</button>
  <div class="login"><a href="loginpage.php">Login</a></div>
</form>
<form class="form2" action="includes/login.inc.php" method="POST" autocomplete="off">
  <h1>Login</h1>
  <input class="user" type="text" name="uid" placeholder="User" required>
  <input class="pass" type="password" name="pwd" placeholder="Password" required>
  <button class="button" type="submit">Log In</button>
  <div class="signup"><a href="signuppage.php">Sign Up!</a></div>
</form>
<form action="./includes/logout.inc.php" method="POST">
  <button>LOG OUT</button>
</form>
<?php 
if (isset($_SESSION['id'])) {
  echo "<p class='loginstatus'>".$_SESSION['id']."</p>";
} else {
  echo '<p class="loginstatus">You are not logged in!</p>';
}
?>
<?php
  include 'includes/footer.php'
?>