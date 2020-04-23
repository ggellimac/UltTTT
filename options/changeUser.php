<?php
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  include_once('connection.php');
  include('../session.php');
  session_start();

 $newName = $_POST['nusername'];
 $password = $_POST['password'];

if(isset($_POST['newname'])){
  if(empty($_POST['nusername']) || empty($_POST['password'])) {
    echo "Please fill out all the fields.";
  } else {
    $sql = "update Users set Username = '".$newName."' where Username = '".$login_session."' AND Password = '".$password."'";
    $result4 = $conn->query($sql);
    if ($result4 === TRUE) {
        echo "Username updated successfully. You have been signed out.<br>";
        echo '<a href="../login.php">Log In</a>';
    } else {
        echo "Incorrect Password";
    }
  }
}

?>
<html>
<head>
<title></title>
</head>
<body>
</body>
</html>
