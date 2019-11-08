<?php
session_start();
$_SESSION['exam']=1901;
$d=mysqli_connect('localhost','root','','WEBPROJECT') or die("Error connecting to MySQL server.");
$qer=mysqli_query($d,"select mark from ATTEMPT where UserId=".$_SESSION['user']." and ExamId=".$_SESSION['exam']."");
if(mysqli_num_rows($qer)>0)
{
     header("Location:test.php");
     exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>QUIZ</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='ques1.js'></script>
<script src='quiz.js'></script>
<script src='check.js'></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<style>
body{
background-image: linear-gradient(to right, #00ffde, #00f3ef, #00e5fb, #00d7ff, #00c7ff, #00b9ff, #00aaff, #0099ff, #0085ff, #006eff, #0053ff, #002cff);
}
h1{
font-family: stencil;
text-align: center;
}
h2{
text-align: center;
}
.right {
  position: fixed;
  right: 0px;
  width: 250px;
  border: 2px solid grey;
  padding: 10px;
}
.center {
  //text-align: center;
width: 750px;
}
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 17px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
/* Hide the browser's default radio button */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}
/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: grey;
  border-radius: 50%;
}
/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: black;
}
/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #16FF00;
}
/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}
/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}
/* Style the indicator (dot/circle) */
.container .checkmark:after {
  top: 9px;
  left: 9px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: black;
}
</style>
</head>
<body>
<h1>Operating System</h1>
 <div class="card shadow p-4 mb-4 bg-dark right">
    <div class="card-header text-white bg-secondary">Questions</div>
<div class="card-body">
<a href="#q1" class="btn btn-danger" id="b1">1</a>
<a href="#q2" class="btn btn-danger" id="b2">2</a>
<a href="#q3" class="btn btn-danger" id="b3">3</a>
<a href="#q4" class="btn btn-danger" id="b4">4</a><br><br>
<a href="#q5" class="btn btn-danger" id="b5">5</a>
<a href="#q6" class="btn btn-danger" id="b6">6</a>
<a href="#q7" class="btn btn-danger" id="b7">7</a>
<a href="#q8" class="btn btn-danger" id="b8">8</a><br><br>
<a href="#q9" class="btn btn-danger" id="b9">9</a>
<a href="#q10" class="btn btn-danger" id="b10">10</a><br><br>
<button class="btn btn-success" data-toggle="modal" data-target="#myModal" id="sub">Finish attempt <i class="fas fa-check"></i></button>
<div id="time" class="text-info">
Time remaining: <span id="timer"></span>
</div>
  </div></div>
<div id="quiz" class="container center"></div>
<div id="results"></div>
<div id="res"></div>
<div class="container">

  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">PHP Quiz</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body">
          <p>Do you want to submit your answers?</p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal" id="submit">Submit</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<script>
var quizContainer = document.getElementById('quiz');
var resultsContainer = document.getElementById('results');
var submitButton = document.getElementById('submit');
generateQuiz(myQuestions, quizContainer, resultsContainer, submitButton);
</script>
</body>
</html>