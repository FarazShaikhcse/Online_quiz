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
       +(i+1)+'.'+ questions[i].question +'</div>'+'</div>'+'<div class="card shadow p-4 mb-4 bg-white text-black">'
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

			answerContainers[i].style.color = 'green';

		}
		// if answer is wrong or blank
		else{
			// color the answers red
			answerContainers[i].style.color = 'red';

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
    var elem1 = document.getElementById('myModal');
 elem1.parentNode.removeChild(elem1);  //removes button
 var elem2 = document.getElementById('sub');
 elem2.parentNode.removeChild(elem2); //removes timer
document.getElementById('time').innerHTML="<a href='http://localhost//WebHome.php' class='btn btn-primary'>Home <i class='fas fa-home'></i></a><br><br><div class=\"alert alert-info\"><strong>You have scored "+ numCorrect + " out of " + questions.length+"</strong></div>";


 

var in1 =numCorrect;

$.post('db.php', { mark: in1}, function(data) {
    })
}

	// show the questions
	showQuestions(questions, quizContainer);
var submitButton = document.getElementById('submit');
	// when user clicks submit, show results
	submitButton.onclick = function(){

		showResults(questions, quizContainer, resultsContainer);
		
}



//timer section
var sec = 150;
var time = setInterval(myTimer, 1000);

function myTimer() {
var min= Math.floor(sec/60);
var secs=sec-(min*60);
if(secs<15 && min==0){
    
    document.getElementById('timer').innerHTML = '<p style="color:red;font-size:30px;"><b>0'+min + ":0" +secs+'</b></p>';
}
else
     document.getElementById('timer').innerHTML = '0'+min + ":" +secs;
 sec--;
    if (sec == -1) {
        clearInterval(time);
        showResults(questions, quizContainer, resultsContainer);
    }
}

}