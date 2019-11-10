<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quizzer</title>
<style>
body{
background-image: linear-gradient(to right, #00ffde, #00f3ef, #00e5fb, #00d7ff, #00c7ff, #00b9ff, #00aaff, #0099ff, #0085ff, #006eff, #0053ff, #002cff);
}

.card-img-top{
height:200px;
}
.center {
  //text-align: center;
width: 800px;
left:160px;
position:relative;
}
body {
  font-family: "Lato", sans-serif;
}
a {
  color: white;
}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}
.btn btn-dark {
  background-color: #111;
}
.topnav-right {
  float:right;
}
.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: white;
  display: block;
  transition: 0.3s;
}
.sidenav a:hover {
  color: #f1f1f1;
}
.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="http://localhost//Profile.php" class="btn btn-dark"><center><i class="far fa-user-circle fa-3x" style="color:white;"></i></center><center>
      <?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?></center></a><br>
     <center><a href='http://localhost//Leader.php' style="color:white;width:89%;text-align: center;" class="btn btn-primary">Leader Board</a></center>
  <h1 style="color:white;">&nbsp;&nbsp;&nbsp;Exams</h1><span style="color: white;">
  <a class="btn btn-dark" data-toggle="modal" data-target="#myModal4">Operating System</a>
  <a class="btn btn-dark" data-toggle="modal" data-target="#myModal1">Python</a>
  <a class="btn btn-dark" data-toggle="modal" data-target="#myModal2">Java</a>
  <a class="btn btn-dark" data-toggle="modal" data-target="#myModal3">Microprocessor</a>
   <a class="btn btn-dark" data-toggle="modal" data-target="#myModal">Php</a></span>
 

</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  
  <!-- Links -->
  <ul class="navbar-nav">
  <li class="nav-item">
  <span style="color:white;font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Quizzer</span>
  </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <li class="nav-item"><div class="dropdown">
    <h4><button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
       <?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?>
    </button>
     <div class="dropdown-menu">
      <a class="dropdown-item btn btn-primary" href="http://localhost//Profile.php"><i class="fas fa-user-circle"></i>  Profile</a><br>
      <a class="dropdown-item btn btn-danger" href="http://localhost//Logout.php"><i class="fas fa-sign-out-alt"></i>  Logout</a>
    </li></div></h4></div>
  </ul>
</nav>
 <center><br><br><br>
  <div class="container-fluid">
<h1>Quizzer</h1><br><br>
<div class="container center mx-auto">
  <div class="row">
  <div class="card rounded shadow-lg" style="width:370px">
    <img class="card-img-top" src="os.png" alt="Operating Systems" style="width:100%">
    <div class="card-body bg-dark text-white">
      <h4 class="card-title">Operating Systems</h4>
      <p class="card-text">This quiz consists of basic questions about OS</p><br>
      <button class="btn btn-primary stretched-link" data-toggle="modal" data-target="#myModal4">attempt now</button>
    </div>
  </div>&emsp;&emsp;&emsp;&emsp;&emsp;
  <div class="card rounded shadow-lg" style="width:370px">
    <img class="card-img-top" src="mp.jpg" alt="MicroProcessors" style="width:100%">
    <div class="card-body bg-dark text-white">
      <h4 class="card-title">MicroProcessors</h4>
      <p class="card-text">This quiz consists of basic questions about MP and assembly level language</p>
      <button class="btn btn-primary stretched-link" data-toggle="modal" data-target="#myModal3">attempt now</button>
    </div>
  </div>
</div><br><br>
  <div class="row">
  <div class="card rounded" style="width:370px">
    <img class="card-img-top" src="java.jpg" alt="Java" style="width:100%">
    <div class="card-body bg-dark text-white">
      <h4 class="card-title">Java</h4>
      <p class="card-text">This quiz consists of questions about programming in java</p>
      <button class="btn btn-primary stretched-link" data-toggle="modal" data-target="#myModal2">attempt now</button>
    </div>
  </div>&emsp;&emsp;&emsp;&emsp;&emsp;
  <div class="card rounded" style="width:370px">
    <img class="card-img-top" src="python.jpg" alt="Python" style="width:100%">
    <div class="card-body bg-dark text-white">
      <h4 class="card-title">Python</h4>
      <p class="card-text">This quiz consists of basic questions about python programming</p>
      <button class="btn btn-primary stretched-link" data-toggle="modal" data-target="#myModal1">attempt now</button>
    </div>
  </div>

</div><br><br>
<div class="row">
  <div class="card rounded" style="width:370px">
    <img class="card-img-top" src="php.jpg" alt="PHP" style="width:100%">
    <div class="card-body bg-dark text-white">
      <h4 class="card-title">PHP</h4>
      <p class="card-text">This quiz consists of questions about PHP</p>
      <button class="btn btn-primary stretched-link" data-toggle="modal" data-target="#myModal">attempt now</button>
    </div>
</div>
</div>
</div>
</center>
<br><br></div>
   <div class="container">

  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">PHP quiz</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body">
          <p>Attempt quiz now?</p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <a href="http://localhost//quiz5.php" class="btn btn-success">Yes</a>
          <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
      <div class="container">

  <div class="modal" id="myModal1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Python quiz</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body">
          <p>Attempt quiz now?</p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <a href="http://localhost//quiz4.php" class="btn btn-success">Yes</a>
          <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
         <div class="container">

  <div class="modal" id="myModal2">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Java quiz</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body">
          <p>Attempt quiz now?</p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <a href="http://localhost//quiz3.php" class="btn btn-success">Yes</a>
          <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
     <div class="modal" id="myModal3">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">MicroProcessors quiz</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body">
          <p>Attempt quiz now?</p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <a href="http://localhost//quiz2.php" class="btn btn-success">Yes</a>
          <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
       <div class="modal" id="myModal4">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Operating System quiz</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body">
          <p>Attempt quiz now?</p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <a href="http://localhost//quiz1.php" class="btn btn-success">Yes</a>
          <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
}
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
</script>
</body>
</html>