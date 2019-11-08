<!DOCTYPEHTML>
<html>
<head><title>Sign Up</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
   body{
background-image: linear-gradient(to right, #00ffde, #00f3ef, #00e5fb, #00d7ff, #00c7ff, #00b9ff, #00aaff, #0099ff, #0085ff, #006eff, #0053ff, #002cff);

}
#t2 {
  width:50%;
}
#textspe {
   width: 25%;
} 
input[type="text"]{
    outline: none;
    font-size: 1.1em;
    padding: 20px 10px 20px 10px;
    border: none;
    margin: 0 0 15px 0;
    font-family: 'Open Sans', sans-serif;
    background: none;
    border-bottom: 2px solid #eee;
    color: black;
    font-weight: 600;
}
input[type="email"],input[type="password"] {
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
<center><br><br>
<div class="card bg-light text-dark" style="width: 40rem;">
<div class="card-header"><h3>Create an Acccount</h3>Fill in the form below to create an account</div>
<div class="card-body">
<form action="Validp.php" method="POST" class="form-group" onsubmit="return checkForm(this);">
<i class='fas fa-user'></i><input type="text" data-toggle="tooltip" title="Enter First Name" data-placement="bottom" id="textspe" placeholder="First Name" name="FName">&nbsp;&nbsp;<input type="text" data-toggle="tooltip" title="Enter Last Name" data-placement="bottom" id="textspe" placeholder="Last Name" name="LName"><br>
<i class='fa fa-envelope'></i><input type="email" data-toggle="tooltip" title="Enter Email Id" data-placement="bottom" placeholder="Email Id" name="email"><br>
<i class='fas fa-lock'></i><input type="password" data-toggle="tooltip" title="Enter Password" data-placement="bottom" id="t1" placeholder="Password" name="password"><br>
<i class='fas fa-lock'></i><input type="text" id="t2" data-toggle="tooltip" title="Confirm your Password" data-placement="bottom" placeholder="Confirm Password" name="pwd2"><br>
<div class="btn-group">
<input type="submit" class="btn btn-primary" value="Create an Account"></div>
</div>
<div class="card-footer">
Already have an account?<a href="http://localhost//LoginPage.php">Login</a></div></div></center></form>
<script type="text/javascript"> 
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
  function checkForm(form)
  {
    if(form.FName.value == "") {
     var d=window.prompt("Error: First Name cannot be blank!");
      form.FName.value=d;
      return false;
    }
    if(form.email.value == "") {
     window.alert("Error: Email Id cannot be blank!");
      form.email.value=w;
      return false;
    }
    if(form.password.value == "") {
      window.alert("Error: Pease enter the password-");
      form.password.focus();
      return false;
    }
    re = /^\w+$/;
    if(form.password.value != "" && form.password.value == form.pwd2.value) {
      if(form.password.value.length < 6) {
        window.alert("Error: Password must contain at least six characters!");
        form.password.focus();
        return false;
      }
      if(form.password.value == form.FName.value) {
        window.alert("Error: Password must be different from your name!");
        form.password.focus();
        return false;       
      }
      re = /[0-9]/;
      if(!re.test(form.password.value)) {
        window.alert("Error: password must contain at least one number (0-9)!");
        form.password.focus();
        return false;        
      }
      re = /[a-z]/;
      if(!re.test(form.password.value)) {
        window.alert("Error: password must contain at least one lowercase letter (a-z)!");
        form.password.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.password.value)) {
        window.alert("Error: password must contain at least one uppercase letter (A-Z)!");
        form.password.focus();
        return false;   
      }
    } else {
      window.alert("Error: Please check that you've entered and confirmed your password!");
      form.pwd2.focus();
      return false;
    }
  }
  $(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
</body>
</html>