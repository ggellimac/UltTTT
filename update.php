<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include_once('connection.php');
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$uname = $_POST['username'];
$pwd = $_POST['password'];

echo $fname, $lname, $uname, $pwd;

$sql = "insert into Users values (NULL, '$uname', '$pwd', '$fname', '$lname')";
$nresult = $conn->query($sql);

if ($nresult === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header("Location: login.php");
?>
