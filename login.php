<?php
    session_start();
    if(isset($_POST['login_user'])){
        // Check form submit with IF Isset function
        $username="admin"; // set variable value
        $password="123"; // set variable value
        if($_POST['username']==$username && $_POST['password']==$password){
            // Check Given user name, password and Variable user name password are same
            $_SESSION['username']=$username; // set session from given user name
            header('location:choose.php');
        }
        else{
            $err="Authentication Failed Try again!";
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ultimate Tic-Tac-Toe</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <h1>Ultimate Tic-Tac-Toe</h1>
        <p id="center" style="color:red;"><?php if(isset($err)){ echo $err; } ?> </p> <!--print error-->
        <div class="button-section">
            <a href="rules.html" target="_self" class="btn">How To Play</a>
            <a href="https://youtu.be/F3ZAWyA-NAc" target="_self" class="btn">YouTube Video</a>
            <a href="https://youtu.be/Azpvnw79GXA" target="_self" class="btn">YouTube Video2</a>
        </div>

        <div class="container">
            <h2>Log-In</h2><br>
            <form method="post" target="_self">
                <label>Username</label>
                <input type="text" name="username"><br><br>
                <label>Password</label>
                <input type="password" name="password"><br><br>
                <button type="submit" class="btn" name="login_user">Login</button>
                <button type="button" class="btn" onclick="window.location.href='choose.php'">Enter as guest</button>
            </form><br><br>
            <p class="line-height">Not yet a member?<br> <a href="register.php">Sign up</a>
            </p>
            </div>

    </body>
</html>
