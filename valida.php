<?php 
session_start();
$d=mysqli_connect('localhost','root','','WEBPROJECT') or die("Error connecting to MySQL server.");
if(isset($_POST["email"]) && isset($_POST["password"])){
$e=$_POST["email"];
$p=$_POST["password"];
$pasw=mysqli_query($d,"select Password,UserId from DETAILS where EmailId='$e'");
if(mysqli_num_rows($pasw)<0){
echo "<h1>Invalid Email-Id</h1>";
session_unset();
session_destroy();
}
else{$psw=mysqli_fetch_array($pasw,MYSQLI_NUM);
if(sha1($p)==$psw[0]){
    $_SESSION["email"]=$psw[1];
    header("Location:som1.php");
    exit;
}
else{
	session_unset();
    session_destroy();
	header("Location:LoginPageI1.php");
             exit;
}
}
}
else
{ echo "";
}
?>