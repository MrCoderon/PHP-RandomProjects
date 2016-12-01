<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>Day of the Week</title>
        <link type="text/css" rel="stylesheet" href="src/assets/styles/css/mainstyle.css"/>
    </head>
    <body>
      <?php
        $dayofweek = date("w");
        switch($dayofweek) {
          case 0:
            echo "<p>Today is Saturday.</p>";
          break;
          case 1:
            echo "<p>Today is Sunday.</p>";
          break;
          case 2:
            echo "<p>Today is Monday.</p>";
          break;
          case 3:
            echo "<p>Today is Tuesday.</p>";
          break;
          case 4:
            echo "<p>Today is Wednesday.</p>";
          break;
          case 5:
            echo "<p>Today is Thursday.</p>";
          break;
          case 6:
            echo "<p>Today is Friday.</p>";
          break;
          default:
            echo "<p>Sorry, I don't know the date.</p>";
        }
      ?>
    </body>
</html>