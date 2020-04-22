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
    <p>Welcome, <?php echo $_SESSION['login_name'];?>.</p>
    <p id="countdown"><p>
  </div>
  <div class="col-3 button-section">
    <button class="btn">New Game</button><br>
    <a href = "choose.php" class="btn">Choose Game Mode</a>
    <a href="rules.html" target="_self" class="btn">How To Play</a>
    <a href = "logout.php" class="btn">Sign Out</a>
  </div>
  <div class="col-1"></div>
  <div class="col-4 container">
    <table class="col-4 center">
      <tr>
        <td>
          <table class="mini">
            <tr>
              <td>X</td>
              <td>O</td>
              <td>X</td>
            </tr>
            <tr>
              <td>O</td>
              <td>X</td>
              <td>O</td>
            </tr>
            <tr>
              <td>X</td>
              <td>O</td>
              <td>X</td>
            </tr>
          </table>
        </td>
        <td>
          <table class="mini">
            <tr>
              <td>O</td>
              <td>X</td>
              <td>O</td>
            </tr>
            <tr>
              <td>X</td>
              <td>O</td>
              <td>X</td>
            </tr>
            <tr>
              <td>O</td>
              <td>X</td>
              <td>O</td>
            </tr>
          </table>
        </td>
        <td>
          <table class="mini">
            <tr>
              <td>X</td>
              <td>O</td>
              <td>X</td>
            </tr>
            <tr>
              <td>O</td>
              <td>X</td>
              <td>O</td>
            </tr>
            <tr>
              <td>X</td>
              <td>O</td>
              <td>X</td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td>
          <table class="mini">
            <tr>
              <td>O</td>
              <td>X</td>
              <td>O</td>
            </tr>
            <tr>
              <td>X</td>
              <td>O</td>
              <td>X</td>
            </tr>
            <tr>
              <td>O</td>
              <td>X</td>
              <td>O</td>
            </tr>
          </table>
        </td>
        <td>
          <table class="mini">
            <tr>
              <td>X</td>
              <td>O</td>
              <td>X</td>
            </tr>
            <tr>
              <td>O</td>
              <td>X</td>
              <td>O</td>
            </tr>
            <tr>
              <td>X</td>
              <td>O</td>
              <td>X</td>
            </tr>
          </table>
        </td>
        <td>
          <table class="mini">
            <tr>
              <td>O</td>
              <td>X</td>
              <td>O</td>
            </tr>
            <tr>
              <td>X</td>
              <td>O</td>
              <td>X</td>
            </tr>
            <tr>
              <td>O</td>
              <td>X</td>
              <td>O</td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td>
          <table class="mini">
            <tr>
              <td>X</td>
              <td>O</td>
              <td>X</td>
            </tr>
            <tr>
              <td>O</td>
              <td>X</td>
              <td>O</td>
            </tr>
            <tr>
              <td>X</td>
              <td>O</td>
              <td>X</td>
            </tr>
          </table>
        </td>
        <td>
          <table class="mini">
            <tr>
              <td>O</td>
              <td>X</td>
              <td>O</td>
            </tr>
            <tr>
              <td>X</td>
              <td>O</td>
              <td>X</td>
            </tr>
            <tr>
              <td>O</td>
              <td>X</td>
              <td>O</td>
            </tr>
          </table>
        </td>
        <td>
          <table class="mini">
            <tr>
              <td>X</td>
              <td>O</td>
              <td>X</td>
            </tr>
            <tr>
              <td>O</td>
              <td>X</td>
              <td>O</td>
            </tr>
            <tr>
              <td>X</td>
              <td>O</td>
              <td>X</td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </div>
</body>
<script src="js/clock.js"></script>
</html>
