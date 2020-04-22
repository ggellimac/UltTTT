<?php
  session_start();
  $cookie_name = "admin";
  $cookie_value = "0";
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<head>
<title>Ultimate Tic-Tac-Toe</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
  <h1>Ultimate Tic-Tac-Toe</h1>
  <div class="header">
    <p>Welcome, <?php echo $_SESSION['username'];?>.</p>
    <p id="countdown"></p>
    <p>
      <?php
      if(!isset($_COOKIE[$cookie_name])) {
           echo "Cookie named '" . $cookie_name . "' is not set!";
      } else {
           echo "Cookie '" . $cookie_name . "' is set!<br>";
           echo "Highscore is: " . $_COOKIE[$cookie_name];
      }
      ?>
    </p>
  </div>
  <div class="col-3 button-section">
    <button class="btn">New Game</button><br>
    <a href = ".php" class="btn">Choose Game Mode</a>
    <a href="basicrules.html" target="_self" class="btn">How To Play</a>
    <a href = "logout.php" class="btn">Sign Out</a>
  </div>
  <div class="col-1"></div>
  <div class="col-4 container">
    <table class="col-4 mini center">
      <tr>
        <td class="cell" data-cell></td>
        <td class="cell" data-cell></td>
        <td class="cell" data-cell></td>
      </tr>
      <tr>
        <td class="cell" data-cell></td>
        <td class="cell" data-cell></td>
        <td class="cell" data-cell></td>
      </tr>
      <tr>
        <td class="cell" data-cell></td>
        <td class="cell" data-cell></td>
        <td class="cell" data-cell></td>
      </tr>
    </table>
  </div>
</body>
<script src="js/clock.js"></script>
<script src="js/basic.js"></script>
</html>
