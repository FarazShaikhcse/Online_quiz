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

$sql = "INSERT INTO ATTEMPT (Userid,Examid,Mark)
VALUES (".$_SESSION['sera']".,1900,$q)";

if ($conn->query($sql) === TRUE) {
    echo "Your marks has been recorded";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
