<?php
    session_start();
    $d=mysqli_connect('localhost','root','','WEBPROJECT') or die("Error connecting to MySQL server.");
    $st="Select Progress from DETAILS where UserID=".$_SESSION['user']."";
    $qer=mysqli_query($d,$st);
    $et="Select e.Subject,a.Mark from ATTEMPT a,Exam e where a.ExamId=e.SubId and a.UserId=".$_SESSION['user']."";
    $qe1=mysqli_query($d,$et);
    $e=mysqli_fetch_array($qer);
    if(mysqli_num_rows($qer)<0){
      $p='0%';
    }
    else {
         $p=$e[0]."%";
       }   
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quizzer Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <style type="text/css">
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
    table{
        text-align:center;margin-right:auto;margin-left:auto;
        font:stencil;border-collapse: collapse;width:300px;}
table, th, td {
              border: 2px solid grey;
}
    body{
background-image: linear-gradient(to right, #00ffde, #00f3ef, #00e5fb, #00d7ff, #00c7ff, #00b9ff, #00aaff, #0099ff, #0085ff, #006eff, #0053ff, #002cff);

}
  </style>
</head>
<body>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="http://localhost//Profile.php" class="btn btn-dark"><center><i class="far fa-user-circle fa-3x" style="color:white;"></i></center><center>
      <?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?></center></a><br>
     <center><a href='http://localhost//Leader.php' style="color:white;width:89%;text-align: center;" class="btn btn-primary">Leader Board</a></center>
  <h1 style="color:white;">&nbsp;&nbsp;&nbsp;Exams</h1>
  <a href="http://localhost//quiz1.php" class="btn btn-dark">Operating System</a>
  <a href="http://localhost//quiz4.php" class="btn btn-dark">Python</a>
  <a href="http://localhost//quiz3.php" class="btn btn-dark">Java</a>
  <a href="http://localhost//quiz2.php" class="btn btn-dark">Microprocessor</a>
   <a href="http://localhost//quiz5.php" class="btn btn-dark">Php</a>
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">  
  <!-- Links -->
  <ul class="navbar-nav">
  <li class="nav-item">
  <span style="color:white;font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
  </li>&nbsp;&nbsp;&nbsp;&nbsp;
  <li class="nav-item"><a href="http://localhost//WebHome.php" style="color:white;font-size:30px;cursor:pointer"><i class="fa fa-home"></i>  Home</a></li>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
 <center><br>
  <center><b>
  <i class="far fa-user-circle fa-10x"></i><br><span style="font-size: 40px">
<?php
    echo $_SESSION['fname']." ".$_SESSION['lname']; 
    ?></span></b>
<div class="container">
  <h2>Profile</h2><br><h4 style="text-align: left;">Progress</h4>
  <div class="progress" style="height:40px;">
    <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="color:black;width:<?php echo $p; ?>"><h4><?php echo $p; ?></h4></div>
  </div>
</div>
<?php
$i=0;
   
   if(mysqli_num_rows($qe1)>0){
    echo "<div class=\"container\"><br><br><table class=\"table table-light table-hover\" style='text-align:left;'><thead><tr><th></th><th>Subject</th><th>Mark</th></tr></thead><tbody id='myTable'>";
    while($rew=mysqli_fetch_array($qe1,MYSQLI_NUM)){
      $i++;
      echo "<tr><td>".$i."</td><td>".$rew[0]."</td><td>".$rew[1]."</td></tr>";
    }
    echo "</tbody></table></div>";
   }
   else{
    echo "";
   }
   mysqli_close($d);
?>
</center><br><br>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>
</html>