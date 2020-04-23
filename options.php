<?php
include('../session.php');
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
    <p>Welcome, <?=$login_session?>.</p>
    <p id="countdown"><p>
  </div>
  <div class="col-3 basic-button-section">
    <a href = "choose.php" class="btn">Back to Home</a>
    <a href = "logout.php" class="btn">Sign Out</a>
  </div>
<div class="container">
  <div id="change-user">
    <h3>Change Username</h3>
    <form action="options/changeUser.php" method="POST">
      <div class="input-group">
        <label>New Username</label>
        <input type="username" name="nusername">
      </div>
      <div class="input-group">
        <label>Password</label>
        <input type="password" name="password">
      </div>
      <button type="submit" name="newname">Submit</button>
    </form>
  </div>


  <div id="change-pass">
    <h3>Change Password</h3>
    <form action="options/changePass.php" method="POST">
      <div class="input-group">
        <label>Old Password</label>
        <input type="password" name="opassword">
      </div>
      <br><br>
      <div class="input-group">
        <label>Password</label>
        <input type="password" name="npassword">
      </div>
      <button type="submit" name="pwd">Submit</button>
    </form>
  </div>

  <div id="remove-account">
    <h3>Delete Account</h3>
    <form action="options/delete.php" method="POST">
      <div class="input-group">
        <label>Password</label>
        <input type="password" name="password">
      </div>
      <button type="submit" name="delete">Delete Account</button>
    </form>
  </div>
</div>

</body>
<script src="js/clock.js"></script>
</html>
