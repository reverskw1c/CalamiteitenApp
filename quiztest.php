<!DOCTYPE html>
<html lang="nl">
<head>
    <title>quiztest</title>
    <style>
        .hidden
        {
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
        calamiteiten moet<br> omgaan en kun je ook voor jezelf zien hoe jouw kennis ervoor staat. Alvast succes😊
    </p>
    <button id="start"">begin</button>
</div>

<div id="vraag_1" class="hidden">
    <h2 > Wat moet je doen bij een calamiteit?</h2><br>
    <p>
        <input type="radio" id="antwoord1" name="antwoorden" value="optie1">
        <label for="antwoord1">Optie 1</label><br>

        <input type="radio" id="antwoord2" name="antwoorden" value="optie2">
        <label for="antwoord2">Optie 2</label> <br><br>
    </p>

    <button id="volgende1_1">volgende</button>
</div>

<div id="antwoord_1" class="hidden">
    <h3>Advies1 </h3>
    <p>goed of fout...</p>

    <br>
    <button id="volgende1_2">volgende</button>
</div>

<div id="vraag_2" class="hidden">
    <h2 > Wat moet je doen bij een calamiteit?</h2><br>
    <p>
        <input type="radio" id="antwoord1" name="antwoorden" value="optie1">
        <label for="antwoord1">Optie 1</label><br>

        <input type="radio" id="antwoord2" name="antwoorden" value="optie2">
        <label for="antwoord2">Optie 2</label> <br><br>
    </p>

    <button id="volgende2_1">volgende</button>
</div>

<div id="antwoord_2" class="hidden">
    <h3>Advies2 </h3>
    <p>goed of fout...</p>

    <br>
    <button id="volgende2_2">volgende</button>
</div>



<script>
    const startButton = document.getElementById('start');
    const startQuiz = document.getElementById('startQuiz');

    const vraag_1 = document.getElementById('vraag_1');
    const volgendeButton = document.getElementById('volgende1_1');
    const antwoord_1 = document.getElementById('antwoord_1');
    const volgendeButton2 = document.getElementById('volgende1_2');

    const vraag_2 = document.getElementById('vraag_2');
    const volgendeButton3 = document.getElementById('volgende2_1');
    const antwoord_2 = document.getElementById('antwoord_2');
    const volgendeButton4 = document.getElementById('volgende2_2');

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
        vraag_2.classList.remove('hidden'); // Hide question 1
    });

    volgendeButton3.addEventListener('click', function () {
        vraag_2.classList.add('hidden'); // Hide question 1
        antwoord_2.classList.remove('hidden'); // Show answer 1
    });
    volgendeButton4.addEventListener('click', function () {
        antwoord_2.classList.add('hidden'); // Hide answer 1
        // Add code to show the next element or finish the quiz
    });

</script>
</body>
</html>

