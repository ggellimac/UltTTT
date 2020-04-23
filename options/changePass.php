<?php
session_start();
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  include_once('connection.php');
  include('../session.php');

 $opassword = $_POST['opassword'];
 $npassword = $_POST['npassword'];

if(isset($_POST['pwd'])){
  if(empty($_POST['opassword']) || empty($_POST['npassword'])) {
    echo "Please fill out all the fields.";
  } else {
    $sql = "update Users set Password = '".$npassword."' where Username = '".$login_session."' AND Password = '".$opassword."'";
    $result = $conn->query($sql);
    if ($conn->query($sql) === TRUE) {
        echo "Password updated successfully. You have been signed out.<br>";
        echo '<a href="../login.php">Log In</a>';
    } else {
        echo "Incorrect Password";
    }
  }
}

?>
