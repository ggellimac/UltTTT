<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration System</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
  <div class="header">
  	<h1>Register</h1>
  </div>

  <div class="container">
  <form method="post" action="register.php">
      <?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>First Name</label>
  	  <input type="firstname" name="firstname" value="<?php echo $firstname; ?>">
  	</div>
    <br><br>

    <div class="input-group">
  	  <label>Last Name</label>
  	  <input type="lastname" name="lastname" value="<?php echo $lastname; ?>">
  	</div>
    <br><br>

  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="username" name="username" value="<?php echo $username; ?>">
  	</div>
    <br><br>

  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password">
  	</div>
    <br><br>

  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
    <br><br>

  	<p>
  		Already a member? <br><br><a href="login.php">Sign in</a>
  	</p>
  </form>
</div>
</body>
</html>
