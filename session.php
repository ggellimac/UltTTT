<?php
session_start();
include_once('connection.php');
if ($_SESSION['login_name'] == "Guest") {
  $login_session = "Guest";
} else {
  $user_check = $_SESSION['login_name'];
  $sql_check = "select Username from Users where Username = '".$user_check."'";
  $result = $conn->query($sql_check);

  $rows = $result -> fetch_assoc();
  $login_session = $rows['Username'];
}

?>
