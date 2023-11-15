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
<?php
$questionsArray = [
    ["question" => "Vraag 1", "options" => ["Optie 1", "Optie 2"], "correctAnswer" => 1],
    ["question" => "Vraag 2", "options" => ["Optie 1", "Optie 2"], "correctAnswer" => 2],
    ["question" => "Vraag 3", "options" => ["Optie 1", "Optie 2"], "correctAnswer" => 1],
    ["question" => "Vraag 4", "options" => ["Optie 1", "Optie 2"], "correctAnswer" => 2],
    // Add more questions as needed
];
$answerArray = [
    "Test antwoord 1",
    "Test antwoord 2",
    "Test antwoord 3",
    "Test antwoord 4",
    // Add more answers as needed
];

// Combine questions and answers into a single array
$combinedArray = [];
foreach ($questionsArray as $key => $question) {
    $combinedArray[] = ["question" => $question, "answer" => $answerArray[$key]];
}

// Shuffle the combined array
fisherYatesShuffle($combinedArray);

// Separate the shuffled array back into questions and answers
$shuffledQuestionsArray = [];
$shuffledAnswerArray = [];
foreach ($combinedArray as $item) {
    $shuffledQuestionsArray[] = $item["question"];
    $shuffledAnswerArray[] = $item["answer"];
}

// Set the shuffled arrays
$questionsArray = $shuffledQuestionsArray;
$answerArray = $shuffledAnswerArray;

$currentQuestionIndex = 0;
$userAnswers = [];

// Shuffle the questions
function fisherYatesShuffle(&$array)
{
    $count = count($array);
    for ($i = $count - 1; $i > 0; $i--) {
        $j = mt_rand(0, $i);
        $temp = $array[$i];
        $array[$i] = $array[$j];
        $array[$j] = $temp;
    }
}
?>

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

<div id="questions" class="hidden"></div>

<script>
    const startButton = document.getElementById('start');
    const startQuiz = document.getElementById('startQuiz');
    const questionsContainer = document.getElementById('questions');

    const questionsArray = <?php echo json_encode($questionsArray); ?>;
    const answerArray = <?php echo json_encode($answerArray); ?>;
    let currentQuestionIndex = <?php echo $currentQuestionIndex; ?>;
    const userAnswers = <?php echo json_encode($userAnswers); ?>;
    let correctAnswers = 0;

    function showElement(element) {
        element.classList.remove('hidden');
    }

    function hideElement(element) {
        element.classList.add('hidden');
    }

    function showQuestionAndAnswer(index) {
        questionsContainer.innerHTML = '';

        const question = questionsArray[index];
        const answer = answerArray[index];

        const questionDiv = document.createElement('div');
        questionDiv.innerHTML = `
                        <h2>${question.question}</h2><br>
                        <p>
                            ${question.options.map((option, i) => `
                                <input type="radio" id="antwoord${i + 1}" name="antwoorden" value="${i + 1}">
                                <label for="antwoord${i + 1}">${option}</label><br>
                            `).join('')}
                        </p>
                        <button id="volgendeQuestion">volgende</button>
                    `;

        questionsContainer.appendChild(questionDiv);

        const nextButton = document.getElementById('volgendeQuestion');
        nextButton.addEventListener('click', function () {
            const selectedOption = document.querySelector('input[name="antwoorden"]:checked');

            if (selectedOption) {
                const userAnswer = parseInt(selectedOption.value, 10);
                userAnswers.push(userAnswer);

                if (userAnswer === question.correctAnswer) {
                    correctAnswers++;
                }

                hideElement(questionDiv);
                showAnswer(answer, userAnswer === question.correctAnswer);
            } else {
                alert('Please select an option before moving to the next question.');
            }
        });
    }

    function showAnswer(answer, isCorrect) {
        const answerDiv = document.createElement('div');
        answerDiv.innerHTML = `
                        <h3>Antwoord</h3>
                        <p>${isCorrect ? 'Goed' : 'Fout'}</p><br>
                        <p>${answer}</p><br>
                        <button id="volgendeAnswer">volgende</button>
                    `;

        questionsContainer.appendChild(answerDiv);

        const nextButton = document.getElementById('volgendeAnswer');
        nextButton.addEventListener('click', function () {
            hideElement(answerDiv);
            currentQuestionIndex++;

            if (currentQuestionIndex < questionsArray.length) {
                showQuestionAndAnswer(currentQuestionIndex);
            } else
            {
                const resultMessage = `Totaal correcte antwoorden: ${correctAnswers}`;
                questionsContainer.innerHTML = `<p>Quiz finished! Thank you!</p><br>${resultMessage}`;
            }
        });
    }

    startButton.addEventListener('click', function () {
        hideElement(startQuiz);
        showElement(questionsContainer);
        showQuestionAndAnswer(currentQuestionIndex);
    });

</script>
</body>

</html>
