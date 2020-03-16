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
    <a href = "logout.php" class="btn">Sign Out</a>
  </div>
  <div class="col-1"></div>
  <div class="col-4 container2">
    <p class="header" style="color:black">Choose Game Mode</p>
    <a href = "basic.php" class="btn" style="color:black">Basic Tic-Tac-Toe</a>
    <a href = "ultttt.php" class="btn" style="color:black">Ultimate Tic-Tac-Toe</a>
  </div>
</body>
<script src="js/clock.js"></script>
</html>
