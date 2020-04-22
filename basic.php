<?php
include('session.php');
  session_start();
  $cookie_name = $_SESSION['login_name'];
  $cookie_value = "0";
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<head>
<title>Ultimate Tic-Tac-Toe</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/style.css"/>
 <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
</head>
<body>
  <h1>Ultimate Tic-Tac-Toe</h1>
  <div class="header">
    <p>Welcome, <?php echo $_SESSION['login_name'];?>.</p>
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
    <a href = "ultttt.php" class="btn">Change Game Mode</a>
    <a href="basicrules.html" target="_self" class="btn">How To Play</a>
    <a href = "logout.php" class="btn">Sign Out</a>
  </div>
  <div class="col-1"></div>
    <div class="board-container flex-container flex-column flex-center">
      <div class='flex-container flex-center'>
          <div class='winner'></div>
          <button class='reset'>Reset</button>
      </div>
      <div class="board flex-container flex-wrap ">
          <div class="square flex-container flex-center"></div>
          <div class="square flex-container flex-center"></div>
          <div class="square flex-container flex-center"></div>
          <div class="square flex-container flex-center"></div>
          <div class="square flex-container flex-center"></div>
          <div class="square flex-container flex-center"></div>
          <div class="square flex-container flex-center"></div>
          <div class="square flex-container flex-center"></div>
          <div class="square flex-container flex-center"></div>
      </div>
    </div>

</body>
<script src="js/clock.js"></script>
<script src="js/basic.js"></script>
</html>
