const quizData = [
    {
        question: "De quel nationalité est Ronaldo ?",
        a: "Congolais",
        b: "Espagnol",
        c: "Portugais",
        d: "Japonais",
        correct: "c",
    },
    {
        question: "La prochaine coupe du monde aura lieu en quelle année ?",
        a: "2030",
        b: "2026",
        c: "2024",
        d: "2028",
        correct: "b",
    },
    {
        question: "Macron a obtenu son 1er mandat en quelle année ?",
        a: "2022",
        b: "2017",
        c: "2016",
        d: "2018",
        correct: "b",
    },
    {
        question: "Messi est plus fort que Ronaldo ?",
        a: "Oui",
        b: "Non",
        c: "Je ne les connais pas",
        d: "Les 2 goat",
        correct: "d",
    },
    {
        question: "En quelle année a été créer le php ?",
        a: "2020",
        b: "1994",
        c: "1970",
        d: "1990",
        correct: "b",
    },
    
];
const quiz= document.getElementById('quiz')
const answerEls = document.querySelectorAll('.answer')
const questionEl = document.getElementById('question')
const a_text = document.getElementById('a_text')
const b_text = document.getElementById('b_text')
const c_text = document.getElementById('c_text')
const d_text = document.getElementById('d_text')
const submitBtn = document.getElementById('submit')
let currentQuiz = 0
let score = 0
loadQuiz()
function loadQuiz() {
    deselectAnswers()
    const currentQuizData = quizData[currentQuiz]
    questionEl.innerText = currentQuizData.question
    a_text.innerText = currentQuizData.a
    b_text.innerText = currentQuizData.b
    c_text.innerText = currentQuizData.c
    d_text.innerText = currentQuizData.d
}
function deselectAnswers() {
    answerEls.forEach(answerEl => answerEl.checked = false)
}
function getSelected() {
    let answer
    answerEls.forEach(answerEl => {
        if(answerEl.checked) {
            answer = answerEl.id
        }
    })
    return answer
}
submitBtn.addEventListener('click', () => {
    const answer = getSelected()
    if(answer) {
       if(answer === quizData[currentQuiz].correct) {
           score++
       }
       currentQuiz++
       if(currentQuiz < quizData.length) {
           loadQuiz()
       } else {
           quiz.innerHTML = `
           <h2>Vous avez le score de : ${score}/${quizData.length}</h2>
           <button onclick="location.reload()">Relancer</button>
           `
       } 
    }
})


