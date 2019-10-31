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
<script type="text/javascript"> 
          function checkForm(form)
  {
    if(form.FName.value == "") {
      alert("Error: First Name cannot be blank!");
      form.FName.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(form.FName.value) && (!re.test(form.LName.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.FName.focus();
      return false;
    }

    if(form.pwd1.value != "" && form.pwd1.value == form.pwd2.value) {
      if(form.pwd1.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        form.pwd1.focus();
        return false;
      }
      if(form.pwd1.value == form.username.value) {
        alert("Error: Password must be different from Username!");
        form.pwd1.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form.pwd1.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        form.pwd1.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.pwd1.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        form.pwd1.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.pwd1.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        form.pwd1.focus();
        return false;
      }
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.pwd1.focus();
      return false;
    }
    return true;
  }
    </script>
<style>
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
<center><br><h4>Email already exists!</h4><br>
<div class="card bg-light text-dark" style="width: 40rem;">
<div class="card-header"><h3>Create an Acccount</h3>Fill in the form below to create an account</div>
<div class="card-body">
<form action="Validp.php" method="POST" class="form-group">
<i class='fas fa-user'></i><input type="text" id="textspe" placeholder="First Name" name="FName">&nbsp;&nbsp;<input type="text" id="textspe" placeholder="Last Name" name="LName"><br>
<i class='fa fa-envelope'></i><input type="email" placeholder="Email Id" name="email"><br>
<i class='fas fa-lock'></i><input type="password" id="t1" placeholder="Password" name="pwd1"><br>
<i class='fas fa-lock'></i><input type="text" id="t2" placeholder="Confirm Password" name="pwd2"><br>
<div class="btn-group">
<input type="submit" class="btn btn-primary" value="Create an Account"></div>
</div>
<div class="card-footer">
Already have an account?<a href="http://localhost//LoginPage.php">Login</a></div></div></center></form>

</body>
</html>