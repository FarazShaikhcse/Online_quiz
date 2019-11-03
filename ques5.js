var myQuestions = [
	{
		question: "There are ________ tuples in finite state machine.",
		answers: {
			a: '4',
			b: '5',
			c: '6',
                        d: 'unlimited'
		},
		correctAnswer: 'b'
	},
	{
		question: "Extended transition function is .",
		answers: {
			a: 'Q * Σ* -> Q',
			b: 'Q * Σ -> Q',
			c: 'Q* * Σ* -> Σ',
                        d: 'Q * Σ -> Σ'
		},
		correctAnswer: 'a'
	},
{
		question: "δ*(q,ya) is equivalent to .",
		answers: {
			a: 'δ((q,y),a)',
			b: 'δ(δ*(q,y),a)',
			c: 'δ(q,ya)',
                        d: 'independent from δ notation'
		},
		correctAnswer: 'b'
	},
{
		question: "Which of the following options is correct?<br>Statement 1: Initial State of NFA is Initial State of DFA.<br>Statement 2: The final state of DFA will be every combination of final state of NFA.",
		answers: {
			a: 'Statement 1 is true and Statement 2 is true',
			b: 'Statement 1 is true and Statement 2 is false',
			c: 'Statement 1 can be true and Statement 2 is true',
                        d: 'Statement 1 is false and Statement 2 is also false'
		},
		correctAnswer: 'a'
	}
{
		question: " Regular expression for all strings starts with ab and ends with bba is.",
		answers: {
			a: 'aba*b*bba',
			b: 'X**y',
			c: 'ab(a+b)*bba',
            d: 'All of the mentioned'
		},
		correctAnswer: 'c'
	},
{
		question: "NFA, in its name has ’non-deterministic’ because of :",
		answers: {
			a: 'The result is undetermined',
			b: 'The choice of path is non-deterministic',
			c: 'The state to be transited next is non-deterministic',
                        d: 'All of the mentioned'
		},
		correctAnswer: 'b'
	},
{
		question: "Which among the following is false?<br>ε-closure of a subset S of Q is:",
		answers: {
			a: 'Every element of S ϵ Q',
			b: 'For any q ϵ ε(S), every element of δ (q, ε) is in ε(S)',
			c: 'No other element is in ε(S)',
                        d: 'None of the mentioned'
		},
		correctAnswer: 'd'
	},
{
		question: " e-transitions are",
		answers: {
			a: 'conditional',
			b: 'unconditional',
			c: 'input dependent',
                        d: 'none of the mentioned'
		},
		correctAnswer: 'b'
	},
{
		question: " For NFA with ε-moves, which among the following is correct?",
		answers: {
			a: 'Δ: Q X (∑ U {ε}) -> P(Q)',
			b: 'Δ: Q X (∑) -> P(Q)',
			c: 'Δ: Q X (∑*) -> P(Q)',
                        d: 'All of the mentioned'
		},
		correctAnswer: 'a'
	},
{
		question: " According to the given transitions, which among the following are the epsilon closures of q1 for the given NFA?<br>Δ (q1, ε) = {q2, q3, q4}<br>Δ (q4, 1) =q1<br>Δ (q1, ε) =q1",
		answers: {
			a: 'q4',
			b: 'q2',
			c: 'q1',
                        d: 'q1, q2, q3, q4'
		},
		correctAnswer: 'd'
	}
];
