<?php 
include("includes/header.php");  
include("includes/footer.php"); 
?>
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
            ["question" => "Wat moet je doen bij een calamiteit?", "options" =>
                ["Rustig blijven, aan jouw eigen veiligheid denken en het alarmnummer bellen. ",
                    "Naar de eerste dichtstbijzijnde uitgang rennen. "],
                "correctAnswer" => 1],
            ["question" => "Iemand is flauwgevallen, wat moet jij doen om hulp te verlenen?", "options" =>
                ["Ren naar de persoon en probeer hem/haar wakker te maken.",
                    "Wees rustig, blijf bij de persoon en bel het interne alarmnummer."],
                "correctAnswer" => 2],
            ["question" => "Er is een brand uitgebroken op school en je ziet iemand in het gebouw. Wat moet je doen?", "options" =>
                ["Terug gaan in het gebouw en de ander redden.",
                    "Aan je eigen veiligheid denken en de hulpverleners inlichten."],
                "correctAnswer" => 1],
            ["question" => "Wat is de juiste procedure om de Bhv'ers op de hoogte te brengen en de meldkamer te waarschuwen in geval van een brand?", "options" =>
                ["Door de handbrandmelder in te drukken en het interne alarmnummer te bellen.",
                    "Door het interne alarmnummer te bellen en de brand te blussen."],
                "correctAnswer" => 2],
            ["question" => "Wat is de juiste manier om de bhv'ers te waarschuwen als je een brand ziet?", "options" =>
                ["Verstop je ergens en wacht af todat de bv'er je vindt.",
                    "Volg de instructies van de bhv'er op en blijf rustig."],
                "correctAnswer" => 2],
            ["question" => "Wat doe je als je geconfronteerd met een calamiteit?", "options" =>
                ["De deuren en ramen openhouden om te ventileren en er geen rook in de ruimte blijft hangen.",
                    "De deuren en ramen sluiten om de verspreiding van rook en vuur te voorkomen."],
                "correctAnswer" => 2],
            ["question" => "Wat doe je met de deuren en ramen tijdens een brandincident?", "options" =>
                ["Laat je spullen achter en verlaat onmiddellijk de ruimte.",
                    "Neem al je spullen mee en verlaat onmiddellijk de ruimte."],
                "correctAnswer" => 2],
            ["question" => "Waar ga je naartoe nadat je het brandende gebouw hebt verlaten?", "options" =>
                ["Je gaat naar de andere kant van de weg tegenover school.",
                    "Je gaat naar een verzamelplaats."],
                "correctAnswer" => 2],
            ["question" => "Wat moet je doen als er brand uitbreekt en je bent in de klas?", "options" =>
                ["Optie 1",
                    "Optie 2"],
                "correctAnswer" => 2],
            ["question" => "Wat moet je doen als er een brand uitbreekt en je mist een klasgenoot?", "options" =>
                ["Optie 1",
                    "Optie 2"],
                "correctAnswer" => 2],
            ["question" => "Wat moet je doen als er mindervaliden aanwezig zijn en er vindt een calamiteit plaats? ", "options" =>
                ["Optie 1",
                    "Optie 2"],
                "correctAnswer" => 2],
            ["question" => "Mag je de lift gebruiken tijdens een brand.", "options" =>
                ["Optie 1",
                    "Optie 2"],
                "correctAnswer" => 2],
            ["question" => "Wat moet je doen als je getuige bent van een ongeval en er is een slachtoffer?", "options" =>
                ["Optie 1",
                    "Optie 2"],
                "correctAnswer" => 2],
            ["question" => "Wat moet je doen als een slachtoffer op de grond ziet liggen?", "options" =>
                ["Optie 1",
                    "Optie 2"],
                "correctAnswer" => 2],
            ["question" => "Wat moet je doen als het ontruimingsalarm (slow whoop) afgaat?", "options" =>
                ["Optie 1",
                    "Optie 2"],
                "correctAnswer" => 2],
            ["question" => "Welke route neem je tijdens een ontuiming?", "options" =>
                ["Optie 1",
                    "Optie 2"],
                "correctAnswer" => 2],
            ["question" => "Wat met je doen met je spullen tijdens een bommelding?", "options" =>
                ["Optie 1",
                    "Optie 2"],
                "correctAnswer" => 2],
            ["question" => "Hoe kun je het beste handelen tijdens een ontruiming?", "options" =>
                ["Optie 1",
                    "Optie 2"],
                "correctAnswer" => 2],
            ["question" => "Waar ga je tijdens een ontruiming naartoe om veilig te blijven?", "options" =>
                ["Optie 1",
                    "Optie 2"],
                "correctAnswer" => 2],
            ["question" => "Wat is een interne alarmkaart?", "options" =>
                ["Optie 1",
                    "Optie 2"],
                "correctAnswer" => 2],
            ["question" => "Welke nummer bel je bij een calamiteit en waar vind je dit nummer?", "options" =>
                ["Optie 1",
                    "Optie 2"],
                "correctAnswer" => 2],
            ["question" => "Aan welk bord herken je een verzamelplaats?", "options" =>
                ["Optie 1",
                    "Optie 2"],
                "correctAnswer" => 2],
            ["question" => "Op welke foto staat een AED?", "options" =>
                ["Optie 1",
                    "Optie 2"],
                "correctAnswer" => 2],
            ["question" => "Op welke foto staat een EHBO-koffer?", "options" =>
                ["Optie 1",
                    "Optie 2"],
                "correctAnswer" => 2],
            ["question" => "Wat is een brandblusser/brandslanghaspel en waar hangen ze?", "options" =>
                ["Optie 1",
                    "Optie 2"],
                "correctAnswer" => 2],
            ["question" => "Waaraan is een vluchtweg/nooduitgang te herkennen en waarom vrijhouden?", "options" =>
                ["Optie 1",
                    "Optie 2"],
                "correctAnswer" => 2],
            ["question" => "Wat is een handbrandmelder?", "options" =>
                ["Optie 1",
                    "Optie 2"],
                "correctAnswer" => 2],
            ["question" => "Wat is een automatische brandmelder?", "options" =>
                ["Optie 1",
                    "Optie 2"],
                "correctAnswer" => 2],
            ["question" => "Hoe meld je een calamiteit?", "options" =>
                ["Optie 1",
                    "Optie 2"],
                "correctAnswer" => 2],
            // Add more questions as needed
        ];
        $answerArray = [
            "Test antwoord 1",
            "Test antwoord 2",
            "Test antwoord 3",
            "Test antwoord 4",
            "Test antwoord 1",
            "Test antwoord 2",
            "Test antwoord 3",
            "Test antwoord 4",
            "Test antwoord 1",
            "Test antwoord 2",
            "Test antwoord 3",
            "Test antwoord 4",
            "Test antwoord 1",
            "Test antwoord 2",
            "Test antwoord 3",
            "Test antwoord 4",
            "Test antwoord 1",
            "Test antwoord 2",
            "Test antwoord 3",
            "Test antwoord 4",
            "Test antwoord 1",
            "Test antwoord 2",
            "Test antwoord 3",
            "Test antwoord 4",
            "Test antwoord 1",
            "Test antwoord 2",
            "Test antwoord 3",
            "Test antwoord 4",
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
