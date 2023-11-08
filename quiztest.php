<!DOCTYPE html>
<html>
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
        uitleg quiz
    </h1>
    <button id="start">begin</button>
</div>

<div id="vraag_1" class="hidden">
    vraag 1<br>
    <button id="volgende">volgende</button>
</div>

<div id="antwoord_1" class="hidden">
    antwoord 1<br>
    <button id="volgende2">volgende</button>
</div>

<script>
    const startButton = document.getElementById('start');
    const startQuiz = document.getElementById('startQuiz');
    const vraag_1 = document.getElementById('vraag_1');
    const volgendeButton = document.getElementById('volgende');
    const antwoord_1 = document.getElementById('antwoord_1');
    const volgendeButton2 = document.getElementById('volgende2');

    startButton.addEventListener('click', function () {
        startQuiz.classList.add('hidden'); // Hide the introduction
        vraag_1.classList.remove('hidden'); // Show question 1
    });

    volgendeButton.addEventListener('click', function () {
        vraag_1.classList.add('hidden'); // Hide question 1
        antwoord_1.classList.remove('hidden'); // Show answer 1
    });

    volgendeButton2.addEventListener('click', function () {
        antwoord_1.classList.add('hidden'); // Hide answer 1
        // Add code to show the next element or finish the quiz
    });

</script>
</body>
</html>
