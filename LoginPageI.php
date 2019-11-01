<!DOCTYPEHTML>
<html>
<head><title>Login Page</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
input[type="password"] {
  -webkit-text-security: square;
}
input[type="email"],input[type="text"],input[type="password"] {
    outline: none;
    font-size: 1.1em;
    padding: 20px 10px 20px 10px;
    border: none;
    margin: 0 0 15px 0;
    font-family: 'Open Sans', sans-serif;
    background: none;
    border-bottom: 2px solid #eee;
    width: 50%;
    color: black;
    font-weight: 600;
}
</style>
</head>
<body>
<center><br><br><h4>Now Login Here</h4><br><br><br>
<div class="card bg-light text-dark" style="width: 35rem;">
<div class="card-header"><h3>Login</h3></div>
<div class="card-body">
<form action="valida.php" method="POST" class="form-group">
<i class='fas fa-user'></i><input type="email" data-toggle="tooltip" data-placement="bottom" title="Enter Email" placeholder="Email Id" name="email"><br>
<i class='fas fa-key'></i><input type="password" data-toggle="tooltip" data-placement="bottom" title="Enter Password" id="password-field" placeholder="Password" name="password"><span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span><br>
<div class="btn-group">
<input type="submit" class="btn btn-primary" value="Sign In"></div>
</div>
<div class="card-footer">
Don't have an account?<a href="http://localhost//SignUp.php">Sign Up</a></div></div></center></form>
<?php
$d=mysqli_connect('localhost','root','','WEBPROJECT') or die("Error connecting to MySQL server.");
if(isset($_POST["Name"]) && isset($_POST["Password"])){
$e=$_POST["Name"];
$p=$_POST["Password"];
$pasw=mysqli_query($d,"select Password from DETAILS where EmailId='$e'");
if(mysqli_num_rows($pasw)<0){
echo "<h1>Invalid Email-Id</h1>";}
else{$psw=mysqli_fetch_array($pasw,MYSQLI_NUM);
if(sha1($p)==$psw[0]){
echo "<h1>Successfull Login.</h1>";}
else{echo "<h1>Invalid Password!</h1>";}
}
}
else
{ echo "";
}
?>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
$(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
</script>
</body>
</html>