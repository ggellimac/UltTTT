<?php
session_start();
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  include_once('../connection.php');
  include('../session.php');

 $password = $_POST['password'];

if(isset($_POST['delete'])){
  if(empty($_POST['password'])) {
    echo "Please fill out all the fields.";
  } else {
    $sql = "delete from Users where Username = '".$login_session."' AND Password = '".$password."'";
    $result4 = $conn->query($sql);
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully<br>";
        echo '<a href="../login.php">Ult TTT</a>';
        $sql2 = "alter table Users auto_increment=1";
        $result2 = $conn->query($sql2);
    } else {
        echo "Incorrect Password";
    }
  }
}

?>
