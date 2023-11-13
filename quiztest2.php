<!DOCTYPE html>
<html lang="nl">

<head>
    <title>quiztest</title>
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>

<body>
<div id="startQuiz">

    <h1>
        Calaminator
    </h1>
    <p>
        Hey! Fijn dat je de tijd neemt om deze test te maken. In deze test krijg je informatie over hoe je met
        calamiteiten moet<br> omgaan en kun je ook voor jezelf zien hoe jouw kennis ervoor staat. Alvast
        succes😊
    </p>
    <button id="start">begin</button>
</div>

<div id="questions" class="hidden"></div>

<script>
    const startButton = document.getElementById('start');
    const startQuiz = document.getElementById('startQuiz');
    const questionsContainer = document.getElementById('questions');

    const questionsArray = [
        { question: "Vraag 1", options: ["Optie 1", "Optie 2"] },
        { question: "Vraag 2", options: ["Optie 1", "Optie 2"] },
        { question: "Vraag 3", options: ["Optie 1", "Optie 2"] },
        { question: "Vraag 4", options: ["Optie 1", "Optie 2"] },
        // Add more questions as needed
    ];

    let currentQuestionIndex = 0;

    function showElement(element) {
        element.classList.remove('hidden');
    }

    function hideElement(element) {
        element.classList.add('hidden');
    }

    function showQuestion(index) {
        // Clear previous content in questionsContainer
        questionsContainer.innerHTML = '';

        const question = questionsArray[index];

        const questionDiv = document.createElement('div');
        questionDiv.innerHTML = `
                <h2>${question.question}</h2><br>
                <p>
                    ${question.options.map((option, i) => `
                        <input type="radio" id="antwoord${i + 1}" name="antwoorden" value="optie${i + 1}">
                        <label for="antwoord${i + 1}">${option}</label><br>
                    `).join('')}
                </p>
                <button id="volgendeQuestion">volgende</button>
            `;

        questionsContainer.appendChild(questionDiv);

        const nextButton = document.getElementById('volgendeQuestion');
        nextButton.addEventListener('click', function () {
            hideElement(questionDiv);
            showAnswer(index);
        });
    }

    function showAnswer(index) {
        const answerDiv = document.createElement('div');
        answerDiv.innerHTML = `
                <h3>Advies ${index + 1}</h3>
                <p>goed of fout...</p><br>
                <button id="volgendeAnswer">volgende</button>
            `;

        questionsContainer.appendChild(answerDiv);

        const nextButton = document.getElementById('volgendeAnswer');
        nextButton.addEventListener('click', function () {
            hideElement(answerDiv);
            currentQuestionIndex++;

            if (currentQuestionIndex < questionsArray.length) {
                showQuestion(currentQuestionIndex);
            } else {
                // Quiz is finished, add code to handle the end of the quiz
                questionsContainer.innerHTML = '<p>Quiz finished! Thank you!</p>';
            }
        });
    }

    startButton.addEventListener('click', function () {
        hideElement(startQuiz);
        showElement(questionsContainer);
        showQuestion(currentQuestionIndex);
    });

</script>
</body>

</html>
