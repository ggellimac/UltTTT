<?php
  session_start();
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
    <p id="countdown"><p>
  </div>
  <div class="col-3 button-section">
    <button class="btn">New Game</button><br>
    <a href = "ultttt.php" class="btn">Change Game Mode</a>
    <a href="basicrules.html" target="_self" class="btn">How To Play</a>
    <a href="https://youtu.be/F3ZAWyA-NAc" target="_self" class="btn">YouTube Video</a>
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
  <div class="winning-message" id="winningMessage">
    <div data-winning-message-text></div>
    <button id="restartButton">Restart</button>
  </div>
</body>
<script src="js/clock.js"></script>
<script src="js/basic.js"></script>
</html>
