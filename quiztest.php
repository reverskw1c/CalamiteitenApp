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
                "correctAnswer" => 2],
            ["question" => "Wat is de juiste procedure om de Bhv'ers op de hoogte te brengen en de meldkamer te waarschuwen in geval van een brand?", "options" =>
                ["Door de handbrandmelder in te drukken en het interne alarmnummer te bellen.",
                    "Door het interne alarmnummer te bellen en de brand te blussen."],
                "correctAnswer" => 1],
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
                "correctAnswer" => 1],
            ["question" => "Waar ga je naartoe nadat je het brandende gebouw hebt verlaten?", "options" =>
                ["Je gaat naar de andere kant van de weg tegenover school.",
                    "Je gaat naar een verzamelplaats."],
                "correctAnswer" => 2],
            ["question" => "Wat moet je doen als er brand uitbreekt en je bent in de klas?", "options" =>
                ["Ren zo snel mogelijk met jouw klas naar de dichtstbijzijnde uitgang.",
                    "Blijf met de klas bij elkaar en help anderen die je onderweg vindt."],
                "correctAnswer" => 2],
            ["question" => "Wat moet je doen als er een brand uitbreekt en je mist een klasgenoot?", "options" =>
                ["Meld het bij de docent en/of de bhv'er en ga naar de verzamelplaats.",
                    "Blijf kalm, zoek de vermiste persoon maar zorg dat je niet in een gevaarlijke situatie belandt."],
                "correctAnswer" => 2],
            ["question" => "Wat moet je doen als er mindervaliden aanwezig zijn en er vindt een calamiteit plaats? ", "options" =>
                ["Begeleid de mindervaliden naar de dichtstbijzijnde veilige uitgang en help hen naar buiten.",
                    "Laat de mindervalide zelfstandig naar buiten gaan."],
                "correctAnswer" => 1],
            ["question" => "Mag je de lift gebruiken tijdens een brand.", "options" =>
                ["Ja, dit is de snelste manier om het gebouw te verlaten.",
                    "Nee, je mag de lift in dit gebouw/bouwdeel niet gebruiken. "],
                "correctAnswer" => 1],
            ["question" => "Wat moet je doen als je getuige bent van een ongeval en er is een slachtoffer?", "options" =>
                ["Blijf bij het slachtoffer en bel het interne alarmnummer.",
                    "Ga hulp in de buurt zoeken, geef wel aan het slachctoffer door dat je dit gaat doen."],
                "correctAnswer" => 2],
            ["question" => "Wat moet je doen als een slachtoffer op de grond ziet liggen?", "options" =>
                ["Ren meteen naar het slachtoffer toe en probeer te helpen.",
                    "Neem afstand en geef de bhv'er ruimte om hulp te verlenen."],
                "correctAnswer" => 1],
            ["question" => "Wat moet je doen als het ontruimingsalarm (slow whoop) afgaat?", "options" =>
                ["Het gebouw verlaten.",
                    "Blijf waar je bent, wacht tot de bhv'er aanwezig is en volg de instructie  op. "],
                "correctAnswer" => 1],
            ["question" => "Welke route neem je tijdens een ontuiming?", "options" =>
                ["Volg de borden die de vluchtroute aangeven. Dit is de korste route naar buiten.",
                    "Door dezelfde route te nemen als je bent gekomen. Deze route is bekend en dus duidelijk. "],
                "correctAnswer" => 1],
            ["question" => "Wat met je doen met je spullen tijdens een bommelding?", "options" =>
                ["Laat je spullen achter en verlaat onmiddellijk de ruimte.",
                    "Neem al je spullen mee en verlaat onmiddellijk de ruimte."],
                "correctAnswer" => 2],
            ["question" => "Hoe kun je het beste handelen tijdens een ontruiming?", "options" =>
                ["Rustig naar buiten gaan en niet terug naar binnengaan totdat de bhv'er aangeeft dat de calamiteiten is afgelopen.",
                    "Rustig naar buiten gaan en niet terug naar binnengaan totdat je docent aangeeft dat de calamiteit is afgelopen."],
                "correctAnswer" => 1],
            ["question" => "Waar ga je tijdens een ontruiming naartoe om veilig te blijven?", "options" =>
                ["Naar een verzamelplaats.",
                    "Naar de dichtstbijzijnde hoofduitgang en/of hal bij de balie. "],
                "correctAnswer" => 1],
            ["question" => "Wat is een interne alarmkaart?", "options" =>
                ["Alarmkaartfoto",
                    "Verkeersborden"],
                "correctAnswer" => 1],
            ["question" => "Welke nummer bel je bij een calamiteit en waar vind je dit nummer?", "options" =>
                ["Het interne alarmnummer en dit vind je op de alarmkaart.",
                    "Het landelijke alarmeringsnummer 112 en dit vind je op de schoolborden."],
                "correctAnswer" => 1],
            ["question" => "Aan welk bord herken je een verzamelplaats?", "options" =>
                ["Platte verzamelplaatsfoto",
                    "Juiste verzamelplaatsfoto"],
                "correctAnswer" => 2],
            ["question" => "Op welke foto staat een AED?", "options" =>
                ["AEDfoto",
                    "EHBObordfoto"],
                "correctAnswer" => 1],
            ["question" => "Op welke foto staat een EHBO-koffer?", "options" =>
                ["EHBO-kofferfoto",
                    "AEDfoto"],
                "correctAnswer" => 1],
            ["question" => "Wat is een brandblusser/brandslanghaspel en waar hangen ze?", "options" =>
                ["Een hulpmiddel waarmee je een brand kunt doven en die hangen op opvallende plekken in het hele gebouw.",
                    "Een hulpmiddel waarmee  je een klein brandje kunt doven en die hangen altijd naast de wc's in het hele gebouw."],
                "correctAnswer" => 1],
            ["question" => "Waaraan is een vluchtweg/nooduitgang te herkennen en waarom vrijhouden?", "options" =>
                ["Je kunt deze herkennen aan de groene bordjes met witte pijl boven de deur. Je moet ze vrijhouden om door te kunnen vluchten als er een calamiteit plaatsvindt voor het geval van nood.",
                    "Vluchtwegen en nooduitgangen zijn nergens aan te herkennen, en je moet ze vrijhouden zodat hulpverleners er makkelijk uit kunnen gaan."],
                "correctAnswer" => 1],
            ["question" => "Wat is een handbrandmelder?", "options" =>
                ["Brandblusserfoto",
                    "Handbrandmelderfoto"],
                "correctAnswer" => 2],
            ["question" => "Wat is een automatische brandmelder?", "options" =>
                ["Automatische brandmelderfoto",
                    "Handbrandmelderfoto"],
                "correctAnswer" => 1],
            ["question" => "Hoe meld je een calamiteit?", "options" =>
                ["Je belt het interne alarmnummer en vertelt je naam,wat er aan de hand is, waar het plaats vindt, of er slachtoffers zijn en of er contact is opgenomen met de hulpdienst.",
                    "Je belt het landelijke alarmeringsnummer 112 en geeft daar aan wat je nodig hebt, bijvoorbeeld een ambulance, politie of brandweer. "],
                "correctAnswer" => 1],
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
