<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webproject";
$q=$_POST['mark'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql1 = "INSERT INTO ATTEMPT (UserId,Examid,Mark)
VALUES (".$_SESSION['user'].",".$_SESSION['exam'].",$q)";
$sql2 = "update DETAILS set Progress=2*(select sum(mark) from ATTEMPT where UserId=".$_SESSION['user'].") where UserId=".$_SESSION['user']."";
if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {
    echo $_SESSION['fname'].", your marks is ".$q;
} else {
    echo "Error: You have already attempted the exam";
}

$conn->close();
?>