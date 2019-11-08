<?php
  session_start();
?>
<!DOCTYPEHTML>
<html><head>
<title>Leader Board</title>
<meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
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
input[type=text]{
    outline: none;
    font-size: 1.1em;
    padding: 20px 10px 20px 10px;
    border: none;
    font-family: 'Open Sans', sans-serif;
    background: none;
    border-bottom: 3px solid grey;
    width: 280px;
    display:inline;
    color: white;
    font-weight: 600;
}
button[type=submit]{
   width: 100px; 
}
input[type=reset]{
   width: 100px;
 }
}
input[type=number]{
  width: 80px; 
}
input[type=date]{
   width: 200px;}
body{
text-align: center;
background-color:white;
}
h1{
text-align: center;
}h5{color:#000000;}
table{
        text-align:center;margin-right:auto;margin-left:auto;
        font:stencil;border-collapse: collapse;}
table, th, td {
              border: 2px solid grey; 
}
</style>
</head>
<body>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="http://localhost//Profile.php" class="btn btn-dark"><center><i class="far fa-user-circle fa-3x" style="color:white;"></i></center><center>
      <?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?></center></a><br>
     <center><a href='#' style="color:white;width:89%;text-align: center;" class="btn btn-primary">Leader Board</a></center>
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
      <a class="dropdown-item btn btn-danger" href="#"><i class="fas fa-sign-out-alt"></i>  Logout</a>
    </li></div></h4></div>
  </ul>
</nav>
<br>

<br><br><div><h1>Leader Board</h1>
<?php
$d=mysqli_connect('localhost','root','','webproject') or die("Error connecting to MySQL server.");
$rq=mysqli_query($d,"Select distinct(Subject) from Exam");
echo "<form method='POST' action=''><div class=\"form-group\"><br>";
echo "<center><select class=\"form-control\" id=\"sel1\" name='fert' style=\"width:280px;\"><option disbled selected value> -- Select a Subject -- </option>";
while($rop=mysqli_fetch_array($rq,MYSQLI_NUM)){
echo "<option value='$rop[0]'>$rop[0]</option>";}
echo "</select></center>  <br>      <button type=\"submit\" class=\"btn btn-primary\">OK</button></form><br><br>";
if(isset($_POST["fert"]))
{
     $i=0;
     $dw=$_POST["fert"];
     $qe1=mysqli_query($d,"select d.Fname,d.Lname,a.mark from Attempt a,exam e,details d where d.userId=a.userId and a.examId=e.subId and e.subject='$dw' order by a.mark desc");
     if(mysqli_num_rows($qe1)>0)
     {
         echo "<div class=\"container\"><i class=\"fas fa-search\"><input class=\"form-control\" id=\"myInput\" type=\"text\" placeholder=\"  Search the table\" style=\"align: rtl;\"></i><br><br><table class=\"table table-light table-hover\"><thead><tr><th style='width: 10%;'>Rank</th><th style='width: 40%;'>Name</th><th>Mark</th style='width: 10%;'></tr></thead><tbody id='myTable'>";
         while($row=mysqli_fetch_array($qe1,MYSQLI_NUM)){
           $i++;
           if($i>5){
            break;
           }
            echo '<tr><td>'.$i.'</td><td>'.$row[0].' '.$row[1].'</td><td>'.$row[2].'</td></tr>';
         }
         echo "</tbody></table>";
     }
     else
     {
         echo "";
     }
}
else{
     echo "";
     mysqli_close($d);
}
?>
<br><br>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value)>-1)
    });
  });
});
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>
</html>

