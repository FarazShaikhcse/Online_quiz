<?php
session_start();
$_SESSION['exam']=1902;
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
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script src='ques2.js'></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<style>
body{

background-image: linear-gradient(to right bottom, #401d60, #423175, #42438a, #40569e, #3c69b1, #2e7cc2, #1c8fd1, #00a2de, #00b9e9, #00d0ef, #2be6f2, #5ffbf1);
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
  background-color: #c4b7b7;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #706666;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #08fc41;
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
<h1>Micro Processors</h1>
 <div class="card shadow p-4 mb-4 bg-white right">
    <div class="card-header">Questions</div>
<div class="card-body">
<a href="#q1" class="btn btn-dark">1</a>
<a href="#q2" class="btn btn-dark">2</a>
<a href="#q3" class="btn btn-dark">3</a>
<a href="#q4" class="btn btn-dark">4</a><br><br>
<a href="#q5" class="btn btn-dark">5</a>
<a href="#q6" class="btn btn-dark">6</a>
<a href="#q7" class="btn btn-dark">7</a>
<a href="#q8" class="btn btn-dark">8</a><br><br>
<a href="#q9" class="btn btn-dark">9</a>
<a href="#q10" class="btn btn-dark">10</a><br><br>
<button id="submit" class="btn btn-primary">Finish attempt</button>
<div id="time">
Time remaining: <span id="timer"></span>
</div>
  </div></div>
<div id="quiz" class="container center"></div>
<div id="results"></div>
<div id="res"></div>
<script>


function generateQuiz(questions, quizContainer, resultsContainer, submitButton){

	function showQuestions(questions, quizContainer){
	// we'll need a place to store the output and the answer choices
	var output = [];
	var answers;

	// for each question...
	for(var i=0; i<questions.length; i++){
		
		// first reset the list of answers
		answers = [];
		// for each available answer to this question...
		for(letter in questions[i].answers){

			// ...add an html radio button
			answers.push('<label class="container">'+ 
	                                  '<input type="radio" name="question'+i+'" value="'+letter+'" id="question'+i+letter+'" checked="checked">'
					
                                         +letter + '). '
					+ questions[i].answers[letter]
+'<span class="checkmark"></span>'
				+ '</label>'+'<br>'
			);
		}

		// add this question and its answers to the output
		output.push( '<div class="card bg-dark text-white shadow" id="q'+(i+1)+'">'+
			'<div class="question card-header">' 
       +(i+1)+'.'+ questions[i].question +'</div>'+'</div>'+'<div class="card shadow p-4 mb-4 bg-secondary text-white">'
			+'<div class="answers card-body" id="'+i+'">' +answers.join('') +'</div>'+'</div>'+'<br><br><br>'
		);

	}


	// finally combine our output list into one string of html and put it on the page
	quizContainer.innerHTML = output.join('');
var r = document.getElementsByTagName("input");
for(var i=0; i<40; i++){
r[i].checked=false;
}
}

	function showResults(questions, quizContainer, resultsContainer){
		var answerContainers = quizContainer.querySelectorAll('.answers');
	
	// keep track of user's answers
	var userAnswer = '';
	var numCorrect = 0;
	
	// for each question...
	for(var i=0; i<questions.length; i++){

// find selected answer
		userAnswer = (answerContainers[i].querySelector('input[name=question'+i+']:checked')||{}).value;
		
		// if answer is correct
		if(userAnswer===questions[i].correctAnswer){
			// add to the number of correct answers
			numCorrect++;
			// color the answers green

			answerContainers[i].style.color = '#66ff66';

		}
		// if answer is wrong or blank
		else{
			// color the answers red
			answerContainers[i].style.color = '#ff8080';

}
  var node = document.createElement("p");
  var textnode = document.createTextNode("Correct answer is "+questions[i].correctAnswer);
  node.appendChild(textnode);
  answerContainers[i].appendChild(node);
	}
var y = document.getElementsByTagName("input");
for(var i=0; i<40; i++){
y[i].disabled=true;
}


	// show number of correct answers out of total
	resultsContainer.innerHTML =  '<div class="alert alert-info"><strong>You have scored '+ numCorrect + ' out of ' + questions.length+'</strong></div>';



 var elem1 = document.getElementById('submit');
 elem1.parentNode.removeChild(elem1);  //removes button
 //var elem2 = document.getElementById('time');
// elem2.parentNode.removeChild(elem2); //removes timer
document.getElementById('time').innerHTML="<a href=# class='btn btn-success'>Home</a>";

var in1 =numCorrect;

$.post('db.php', { mark: in1}, function(data) {
    alert( data );})
}
	// show the questions
	showQuestions(questions, quizContainer);
var submitButton = document.getElementById('submit');
	// when user clicks submit, show results
	submitButton.onclick = function(){
		showResults(questions, quizContainer, resultsContainer);
}


//timer section
var sec = 30;
var time = setInterval(myTimer, 1000);

function myTimer() {
var min= Math.floor(sec/60);
var secs=sec-(min*60);
if(secs<10)
    document.getElementById('timer').innerHTML = '<p style="color:red;">0'+min + ":0" +secs+'</p>';
else
     document.getElementById('timer').innerHTML = '0'+min + ":" +secs;
 sec--;
    if (sec == -1) {
        clearInterval(time);
        showResults(questions, quizContainer, resultsContainer);
    }
}

}
var quizContainer = document.getElementById('quiz');
var resultsContainer = document.getElementById('results');
var submitButton = document.getElementById('submit');

generateQuiz(myQuestions, quizContainer, resultsContainer, submitButton);

</script>
</body>
</html>
