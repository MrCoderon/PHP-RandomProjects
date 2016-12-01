<?php
include 'header.php';
session_destroy();

echo "<p class='main'>Bye Bye!</p>";
echo "<br><div class='loader'></div>";
echo "<script type='text/javascript'>setTimeout(function(){window.location = '../index.php';}, 2000);</script>";

include 'footer.php';