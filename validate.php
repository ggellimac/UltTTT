<?php
session_start();
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  include_once('connection.php');

 $uname = $_POST['username'];
 $password = $_POST['password'];

if(isset($_POST['login_user'])){
  if(empty($_POST['username']) || empty($_POST['password'])) {
    echo "Please fill out all the fields.";
  } else {
    $sql = "select * from Users where Username = '".$uname."' AND Password = '".$password."' limit 1";
    $result = $conn->query($sql);
    if (mysqli_num_rows($result)==1) {
      $_SESSION['login_name'] = $uname;
      header("Location: choose.php");
    } else {
      echo "Authentication Failed Try again!";
    }
  }
}

if(isset($_POST['submit'])){
  $_SESSION['login_name'] = "Guest";
    header("Location: choose.php");
}
?>
