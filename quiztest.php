<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="/images/calm.jpg">
    <meta name="viewport" content="width= device-width, initial-scale-1"/>

    <link rel="stylesheet" href="css/quiz.css">
    <title>quiztest</title>
</head>

<body>
    <header class="top-red"></header>
    <main>
        <?php
        $questionsArray = [
            ["question" => "Wat moet je doen bij een calamiteit?",
                "options" => [
                    ["type" => "text", "content" => "Rustig blijven, aan jouw eigen veiligheid denken en het alarmnummer bellen."],
                    ["type" => "text", "content" => "Naar de eerste dichtstbijzijnde uitgang rennen. "],
                ],
                "correctAnswer" => 1,],
            ["question" => "Iemand is flauwgevallen, wat moet jij doen om hulp te verlenen? ",
                "options" => [
                    ["type" => "text", "content" => "Ren naar de persoon en probeer hem/haar wakker te maken."],
                    ["type" => "text", "content" => "Wees rustig, blijf bij de persoon en bel het interne alarmnummer."],
                ],
                "correctAnswer" => 2,],
            ["question" => "Er is een brand uitgebroken op school en je ziet iemand in het gebouw. Wat moet je doen?",
                "options" => [
                    ["type" => "text", "content" => "Terug gaan in het gebouw en de ander redden."],
                    ["type" => "text", "content" => "Aan je eigen veiligheid denken en de hulpverleners inlichten."],
                ],
                "correctAnswer" => 2,],
            ["question" => "Wat is de juiste procedure om de bhv'ers op de hoogte te brengen en de meldkamer te waarschuwen in geval van een brand?",
                "options" => [
                    ["type" => "text", "content" => "Door de handbrandmelder in te drukken en het interne alarmnummer te bellen."],
                    ["type" => "text", "content" => "Door het interne alarmnummer te bellen en de brand te blussen."],
                ],
                "correctAnswer" => 1,],
            ["question" => "Wat is de juiste manier om de bhv'ers te helpen bij een brand?",
                "options" => [
                    ["type" => "text", "content" => "Verstop je ergens en wacht af totdat de bv'er je vindt."],
                    ["type" => "text", "content" => "Volg de instructies van de bhv'er op en blijf rustig."],
                ],
                "correctAnswer" => 2,],
            ["question" => "Wat doe je als je geconfronteerd wordt met een calamiteit?",
                "options" => [
                    ["type" => "text", "content" => "De deuren en ramen openhouden om te ventileren en er geen rook in de ruimte blijft hangen."],
                    ["type" => "text", "content" => "De deuren en ramen sluiten om de verspreiding van rook en vuur te voorkomen."],
                ],
                "correctAnswer" => 2,],
            ["question" => "Wat doe je met de deuren en ramen tijdens een brandincident?",
                "options" => [
                    ["type" => "text", "content" => "Laat je spullen achter en verlaat onmiddellijk de ruimte."],
                    ["type" => "text", "content" => "Neem al je spullen mee en verlaat onmiddellijk de ruimte."],
                ],
                "correctAnswer" => 1,],
            ["question" => "Waar ga je naartoe nadat je het brandende gebouw hebt verlaten?",
                "options" => [
                    ["type" => "text", "content" => "Je gaat naar de andere kant van de weg tegenover school."],
                    ["type" => "text", "content" => "Je gaat naar een verzamelplaats."],
                ],
                "correctAnswer" => 2,],
            ["question" => "Wat moet je doen als er brand uitbreekt en je bent in de klas?",
                "options" => [
                    ["type" => "text", "content" => "Ren zo snel mogelijk met jouw klas naar de dichtstbijzijnde uitgang."],
                    ["type" => "text", "content" => "Blijf met de klas bij elkaar en help anderen die hulp nodig hebben."],
                ],
                "correctAnswer" => 2,],
            ["question" => "Wat moet je doen als er een brand uitbreekt en je mist een klasgenoot?",
                "options" => [
                    ["type" => "text", "content" => "Meld het bij de docent en/of de bhv'er en ga naar de verzamelplaats."],
                    ["type" => "text", "content" => "Blijf kalm, zoek de vermiste persoon maar zorg dat je niet in een gevaarlijke situatie belandt."],
                ],
                "correctAnswer" => 1,],
            ["question" => "Wat moet je doen als er mindervaliden aanwezig zijn en er vindt een calamiteit plaats? ",
                "options" => [
                    ["type" => "text", "content" => "Begeleid de mindervaliden naar de dichtstbijzijnde veilige uitgang en help hen naar buiten."],
                    ["type" => "text", "content" => "Laat de mindervalide zelfstandig naar buiten gaan."],
                ],
                "correctAnswer" => 1,],
            ["question" => "Mag je de lift gebruiken tijdens een brand?",
                "options" => [
                    ["type" => "text", "content" => "Ja, dit is de snelste manier om het gebouw te verlaten."],
                    ["type" => "text", "content" => "Nee, je mag de lift in dit gebouw/bouwdeel niet gebruiken. "],
                ],
                "correctAnswer" => 2,],
            ["question" => "Wat moet je doen als je getuige bent van een ongeval en er is een slachtoffer?",
                "options" => [
                    ["type" => "text", "content" => "Blijf bij het slachtoffer en bel het interne alarmnummer."],
                    ["type" => "text", "content" => "Ga hulp in de buurt zoeken, geef wel aan het slachtoffer door dat je dit gaat doen."],
                ],
                "correctAnswer" => 1,],
            ["question" => "Wat moet je doen als een slachtoffer op de grond ziet liggen?",
                "options" => [
                    ["type" => "text", "content" => "Ren meteen naar het slachtoffer toe en probeer te helpen."],
                    ["type" => "text", "content" => "Bel het alarmnummer, neem afstand en geef de bhv'er ruimte om hulp te verlenen."],
                ],
                "correctAnswer" => 2,],
            ["question" => "Wat moet je doen als het ontruimingsalarm (slow whoop) afgaat?",
                "options" => [
                    ["type" => "text", "content" => "Het gebouw verlaten."],
                    ["type" => "text", "content" => "Blijf waar je bent, wacht tot de bhv'er aanwezig is en volg de instructie  op."],
                ],
                "correctAnswer" => 1,],
            ["question" => "Welke route neem je tijdens een ontruiming?",
                "options" => [
                    ["type" => "text", "content" => "Volg de borden die de vluchtroute aangeven. Dit is de korste route naar buiten."],
                    ["type" => "text", "content" => "Door dezelfde route te nemen als je bent gekomen. Deze route is bekend en dus duidelijk. "],
                ],
                "correctAnswer" => 1,],
            ["question" => "Wat met je doen met je spullen tijdens een bommelding?",
                "options" => [
                    ["type" => "text", "content" => "Laat je spullen achter en verlaat onmiddellijk de ruimte."],
                    ["type" => "text", "content" => "Neem al je spullen mee en verlaat onmiddellijk de ruimte."],
                ],
                "correctAnswer" => 2,],
            ["question" => "Hoe kun je het beste handelen tijdens een ontruiming?",
                "options" => [
                    ["type" => "text", "content" => "Rustig naar buiten gaan en niet terug naar binnen gaan totdat de bhv'er aangeeft dat de calamiteit voorbij is."],
                    ["type" => "text", "content" => "Rustig naar buiten gaan en niet terug naar binnen gaan totdat je docent aangeeft dat de calamiteit voorbij is."],
                ],
                "correctAnswer" => 1,],
            ["question" => "Waar ga je tijdens een ontruiming naartoe om veilig te blijven?",
                "options" => [
                    ["type" => "text", "content" => "Naar een verzamelplaats."],
                    ["type" => "text", "content" => "Naar de dichtstbijzijnde hoofduitgang en/of hal bij de balie. "],
                ],
                "correctAnswer" => 1,],
            ["question" => "Op welk plaatje zie je een alarmkaart?",
                "options" => [
                    ["type" => "image", "content" => "images/alarmkaart.jpg"],
                    ["type" => "image", "content" => "images/verkeers.png"],
                ],
                "correctAnswer" => 1,],
            ["question" => "Welke nummer bel je bij een calamiteit en waar vind je dit nummer?",
                "options" => [
                    ["type" => "text", "content" => "Het interne alarmnummer en dit vind je op de alarmkaart."],
                    ["type" => "text", "content" => "Het landelijke alarmeringsnummer 112 en dit vind je op de schoolborden."],
                ],
                "correctAnswer" => 1,],
            ["question" => "Aan welk bord herken je een verzamelplaats?",
                "options" => [
                    ["type" => "image", "content" => "images/verbanddoosplaatje.jpg"],
                    ["type" => "image", "content" => "images/verzamelplaats0.png"],
                ],
                "correctAnswer" => 2,],
            ["question" => "Op welke foto staat een AED?",
                "options" => [
                    ["type" => "image", "content" => "images/aed.jpg"],
                    ["type" => "image", "content" => "images/verbanddoos.jpg"],
                ],
                "correctAnswer" => 1,],
            ["question" => "Op welke foto staat een EHBO-koffer?",
                "options" => [
                    ["type" => "image", "content" => "images/verbanddoos.jpg"],
                    ["type" => "image", "content" => "images/aed.jpg"],
                ],
                "correctAnswer" => 1,],
            ["question" => "Wat is een brandblusser / brandslanghaspel en waar hangen ze?",
                "options" => [
                    ["type" => "text", "content" => "Een hulpmiddel waarmee je een brand kunt doven en die hangen op opvallende plekken in het hele gebouw."],
                    ["type" => "text", "content" => "Een hulpmiddel waarmee  je een klein brandje kunt doven en die hangen altijd naast de wc's in het hele gebouw."],
                ],
                "correctAnswer" => 1,],
            ["question" => "Waaraan is een vluchtweg / nooduitgang te herkennen en waarom moet je die vrijhouden?",
                "options" => [
                    ["type" => "text", "content" => "Je kunt deze herkennen aan de groene bordjes met witte pijl boven de deur. Je moet ze vrijhouden om door te kunnen vluchten als er een calamiteit plaatsvindt."],
                    ["type" => "text", "content" => "Vluchtwegen en nooduitgangen zijn nergens aan te herkennen, en je moet ze vrijhouden zodat hulpverleners er makkelijk uit kunnen gaan."],
                ],
                "correctAnswer" => 1,],
            ["question" => "welke foto is een handbrandmelder?",
                "options" => [
                    ["type" => "image", "content" => "images/brandblusser.jpg"],
                    ["type" => "image", "content" => "images/alarmknop.jpg"],
                ],
                "correctAnswer" => 2,],
            ["question" => "welke foto is een automatische brandmelder?",
                "options" => [
                    ["type" => "image", "content" => "images/automitische-melder.jpg"],
                    ["type" => "image", "content" => "images/alarmknop.jpg"],
                ],
                "correctAnswer" => 1,],
            ["question" => "Hoe meld je een calamiteit?",
                "options" => [
                    ["type" => "text", "content" => "Je belt het interne alarmnummer en vertelt je naam,wat er aan de hand is, waar het plaats vindt, of er slachtoffers zijn en of er contact is opgenomen met de hulpdienst."],
                    ["type" => "text", "content" => "Je belt het landelijke alarmeringsnummer 112 en geeft daar aan wat je nodig hebt, bijvoorbeeld een ambulance, politie of brandweer. "],
                ],
                "correctAnswer" => 1,],
        ];
        $answerArray = [
            "Ga niet rennen. Dit verhoogt de kans op vallen. Verlaat in een normaal tempo het gebouw. Door te bellen naar het interne alarmnummer, zorg je ervoor dat anderen ook geïnformeerd worden en het gebouw kunnen verlaten.",
            "Je weet niet van welk letsel er sprake is. Als je niet bent opgeleid, kun je onbedoeld de toestand verergeren. Informeer daarom zo snel mogelijk de bhv'er door het interne alarmnummer te bellen. De bhv'er is opgeleid om op te treden bij deze omstandigheden.",
            "Ga nooit terug een brandend gebouw in. Geef aan de bhv'er en/of brandweer door waar je iemand in het gebouw hebt gezien.",
            "Als je de handbrandmelder indrukt, zal in het hele gebouw het ontruimingsalarm afgaan. Je waarschuwt aanwezigen dat ze het gebouw moeten verlaten. Denk aan je eigen veiligheid. Ga geen brand blussen als je hier niet voor opgeleid bent. Bel zo snel mogelijk het interne alarmnummer om de bhv'ers te informeren. De bhv'ers zijn hier wel voor opgeleid.",
            "Bij een calamiteit is het zaak snel te handelen. Help mee door de instructies van de bhv'ers op te volgen. Het gaat hier om jouw veiligheid, maar ook die van de bhv'ers en anderen.",
            "Het sluiten van de binnendeuren kan je leven redden. Als er brand uitbreekt heb je meer kans en tijd om veilig te vluchten. Doordat de zuurstoftoevoer naar de brand wordt verminderd, zal de snelheid van de brandontwikkeling worden vertraagd.",
            "Spullen zijn vervangbaar. Maar belangrijker, als je ergens doorheen moet kruipen en je moet je spullen daar achterlaten of je valt en de spullen vallen op de grond. Dan worden jouw spullen nieuwe obstakels voor anderen.",
            "Een verzamelplaats is de plek waar iedereen zich in veiligheid kan brengen bij een ontruiming van een gebouw (of een andere noodsituatie). Doordat iedereen op deze plaats verzamelt kan hier worden nagegaan of alle medewerkers, studenten en eventuele bezoekers aanwezig zijn of dat er nog mensen worden vermist. Het is daarom van belang dat de verzamelplaats niet wordt verlaten zonder dat hier toestemming voor is verleend door de bhv'er. Mocht je iemand missen, meld dit dan bij de bhv'er. Op de grotere locaties van het KW1C zijn meerdere verzamelplaatsen aangewezen, zodat er een alternatief is als een verzamelplaats niet bereikbaar is.",
            "Ga niet rennen. Dit verhoogt de kans op vallen. Verlaat in een normaal tempo het gebouw. Blijf met de klas bij elkaar. De docent kan dan direct overzien of iedereen op een veilige manier buitengekomen is. Mocht je anderen op de route naar buiten tegenkomen die niet weten wat ze moeten doen, begeleid hen dan via de dichtstbijzijnde vluchtroute naar buiten.",
            "Ga nooit terug een brandend gebouw in. Ga ook niet zelf op zoek, maar geef dit door aan de bhv'er en/of docent, zodat de bhv'ers gericht kunnen zoeken naar de vermiste persoon. De bhv'ers zijn hiervoor opgeleid.",
            "Mindervaliden kunnen mogelijk niet zelfstandig gebruikmaken van de trap. Of ze kunnen niet zien welke kant het wel of juist niet veilig is. Sommige mindervaliden zijn niet-zelfredzaam. Door hen te helpen om veilig het gebouw te verlaten blijft er niemand achter in het gebouw. Mocht je de mindervaliden niet zelf kunnen helpen, bel dan het interne alarmnummer. De bhv'ers komen jou en de mindervaliden helpen.",
            "Reguliere liften zijn niet ontworpen om te gebruiken bij brand. Als de stroom uitvalt komt de lift stil te staan en zit je opgesloten.",
            "Laat het slachtoffer niet alleen. Probeer het slachtoffer gerust te stellen en geef aan dat je het interne alarmnummer belt om de bhv'ers te informeren. Blijf bij het slachtoffer totdat de bhv'ers aanwezig zijn. Geef de bhv'ers ruimte, maar blijf wel in de buurt. Het kan zijn dat de bhv'ers (of ambulancemedewerkers) nog aanvullende vragen hebben.",
            "Je weet niet van welk letsel er sprake is. Als je niet bent opgeleid, kun je onbedoeld de toestand verergeren. Informeer daarom zo snel mogelijk de bhv'er door het interne alarmnummer te bellen. De bhv'er is opgeleid om op te treden bij deze omstandigheden.",
            "Op het moment dat het ontruimingsalarm afgaat, dan begeef je je direct naar buiten. Je gaat naar de dichtstbijzijnde verzamelplaats.",
            "De route waardoor je naar binnen bent gegaan is niet altijd de kortste en veiligste route. Let daarom altijd op de vluchtroute en nooddeuren die zijn aangegeven met de groen verlichte borden met een witte pijl.",
            "Als er sprake is van een bommelding geldt dat je al je spullen meeneemt naar buiten toe. Waarom? Als de hulpdiensten komen om de bom te zoeken, is ieder object mogelijk de bom. Hoe meer spullen van jou al meegenomen zijn, hoe minder spullen zij hoeven te doorzoeken.",
            "De bhv'ers hebben met elkaar contact via de portofoon. De bhv'er weet dus ook wanneer een calamiteit is opgelost en de situatie weer veilig is. Je mag dus pas weer terug het gebouw in als de bhv'er dit aangeeft.",
            "Een verzamelplaats is de plek waar iedereen zich in veiligheid kan brengen bij een ontruiming van een gebouw (of een andere noodsituatie). Doordat iedereen op deze plaats verzamelt kan hier worden nagegaan of alle medewerkers, studenten en eventuele bezoekers aanwezig zijn of dat er nog mensen worden vermist. Het is daarom van belang dat de verzamelplaats niet wordt verlaten zonder dat hier toestemming voor is verleend door de bhv'er. Mocht je iemand missen, meld dit dan bij de bhv'er. Op de grotere locaties van het KW1C zijn meerdere verzamelplaatsen aangewezen, zodat er een alternatief is als een verzamelplaats niet bereikbaar is.",
            "Op alle locaties van het Koning Willem I College hangen alarmkaarten. Deze hangen in bijna alle ruimtes. Hierop is onder andere vermeld wat het interne alarmnummer van die locatie is en wat er van je verwacht wordt tijdens een calamiteit.",
            "Het is prima als je het landelijke alarmnummer belt, maar neem altijd contact op met het interne alarmnummer. Waarom? Het Koning Willem I College heeft veel locaties. Veel van deze locaties zijn vrij groot. Als een ambulance vertrekt naar het Koning Willem I College weten ze niet waar ze precies moeten zijn. Als je het interne alarmnummer belt, worden de bhv'ers ingeschakeld. Zij kunnen de ambulance opvangen en begeleiden naar de juiste plaats. Daarnaast zijn bhv'ers opgeleid om eerste hulp te verlenen. Zij zijn nagenoeg altijd sneller ter plaatse dan de ambulance. Hoe sneller zij worden opgeroepen, hoe eerder er hulp aanwezig is bij het slachtoffer. Bij een brand kunnen de bhv'ers mogelijk nog een bluspoging ondernemen en ze kunnen ondersteunen bij een ontruiming.",
            "Een verzamelplaats is de plek waar iedereen zich in veiligheid kan brengen bij een ontruiming van een gebouw (of een andere noodsituatie). Doordat iedereen op deze plaats verzamelt kan hier worden nagegaan of alle medewerkers, studenten en eventuele bezoekers aanwezig zijn of dat er nog mensen worden vermist. Het is daarom van belang dat de verzamelplaats niet wordt verlaten zonder dat hier toestemming voor is verleend door de bhv'er. Mocht je iemand missen, meld dit dan bij de bhv'er. Op de grotere locaties van het KW1C zijn meerdere verzamelplaatsen aangewezen, zodat er een alternatief is als een verzamelplaats niet bereikbaar is.",
            "Een AED (automatische externe defibrillator) wordt door de bhv'er gebruikt als een slachtoffer een hartstilstand heeft met als doel het hart van het slachtoffer weer te laten kloppen.",
            "Een EHBO-koffer wordt ook wel eens bhv-koffer genoemd. De EHBO-koffers zijn voorzien van diverse materialen en benodigdheden waarmee bhv'er snel kunt ingrijpen wanneer een slachtoffer letsel heeft opgelopen. ",
            "Er mag niets voor brandblussers/brandslanghaspels worden neergezet. Er dient minimaal een meter rondom te worden vrijgehouden. Er zijn verschillende typen brandblussers. In de regel wordt een brandblusser/brandslanghaspel alleen door een bhv'er gebruikt omdat de bhv'er hiervoor is opgeleid.",
            "Het spreekt voor zich dat vluchtwegen en nooduitgangen vrijgehouden moeten worden zodat iedere aanwezige op een veilige manier kan vluchten. In de wet is onder andere opgenomen dat vluchtwegen en nooduitgangen vrij dienen te zijn van obstakels. Het is dus niet vrijblijvend.",
            "Een handbrandmelder kun je met de hand activeren. Dit kun je doen door middel van het indrukken van het breekglaasje. Na het indrukken wordt het ontruimingsalarm geactiveerd. Hierdoor worden alle aanwezigen gewaarschuwd dat zij het gebouw moeten verlaten.",
            "Een automatische melder wordt geactiveerd door rook en/of temperatuur. Hierna wordt het ontruimingsalarm geactiveerd, zodat alle aanwezigen gewaarschuwd worden dat zij het gebouw moeten verlaten.",
            "Het is prima als je het landelijke alarmnummer belt, maar neem altijd contact op met het interne alarmnummer. Waarom? Het Koning Willem I College heeft veel locaties. Veel van deze locaties zijn vrij groot. Als een ambulance vertrekt naar het Koning Willem I College weten ze niet waar ze precies moeten zijn. Als je het interne alarmnummer belt, worden de bhv'ers ingeschakeld. Zij kunnen de ambulance opvangen en begeleiden naar de juiste plaats. Daarnaast zijn bhv'ers opgeleid om eerste hulp te verlenen. Zij zijn nagenoeg altijd sneller ter plaatse dan de ambulance. Hoe sneller zij worden opgeroepen, hoe eerder er hulp aanwezig is bij het slachtoffer. Maar ook bij brand kunnen de bhv'ers nog een bluspoging doen en ondersteunen bij een ontruiminging.",
        ];

        // Combine questions and answers into a single array
        $combinedArray = [];
        foreach ($questionsArray as $key => $question) {
            $combinedArray[] = ["question" => $question, "answer" => $answerArray[$key]];
        }

        // Shuffle the combined array
        fisherYatesShuffle($combinedArray);

        $combinedArray = array_slice($combinedArray, 0, 10);

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
        $correctAnswers = 0;

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
        <h1>
            Calaminator
        </h1>
        <div id="startQuiz">

            <p class="startQuizText">
                Dit is de calaminator. Een quiz waarin jij je kennis over bhv en calamiteiten bij het KW1C kunt testen. Succes!
            </p>
            <button id="start">Begin</button>
        </div>

        <div id="questions" class="hidden"></div>

        <script>

            const startButton = document.getElementById('start');
            const startQuiz = document.getElementById('startQuiz');
            const questionsContainer = document.getElementById('questions');

            const questionsArray = <?php echo json_encode($questionsArray); ?>;
            const answerArray = <?php echo json_encode($answerArray); ?>;
            let currentQuestionIndex = <?php echo $currentQuestionIndex; ?>;
            const userAnswers = <?php echo json_encode($userAnswers); ?>;
            let correctAnswers = <?php echo $correctAnswers; ?>;

            function showElement(element) {
                element.classList.remove('hidden');
                element.style.display = 'flex';
            }

            function hideElement(element) {
                element.classList.add('hidden');
                element.style.display = 'none';
            }


            function showQuestionAndAnswer(index) {
                questionsContainer.innerHTML = '';

                const question = questionsArray[index];
                const answer = answerArray[index];

                const questionDiv = document.createElement('div');
                questionDiv.className = 'questionDiv';
                questionDiv.innerHTML = `
                <h2 class="question">${question.question}</h2><br>
                <p class="choice">

                    ${question.options.map((option, i) => `<div class="test">
                        <input type="radio" id="antwoord${i + 1}" name="antwoorden" value="${i + 1}" required>
                        ${option.type === 'image' ? `<img src="${option.content}"><br>` : `<label class="labelChoice" for="antwoord${i + 1}">${option.content}</label><br></div>`}
                    `).join('')}

                </p>
                <div class="quiz-buttons">
                    <a class="homeLink" href="index.php">Home</a>
                    <button id="volgendeQuestion">Volgende</button>
                </div>

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
                    }
                });
            }

            function showAnswer(answer, isCorrect) {
                const answerDiv = document.createElement('div');
                answerDiv.innerHTML = `
<div class="questionDiv">
                        <div class="awnserExpl">
                            <p class="awnser">${isCorrect ? 'Goed' : 'Fout'}</p><br>
                            <p>${answer}</p>
                        </div>
                        <div class="quiz-buttons">
                            <a class="homeLink" href="index.php">Home</a>
                            <button id="volgendeAnswer">Volgende</button>
                        </div>
</div>
                    `;

                questionsContainer.appendChild(answerDiv);

                const nextButton = document.getElementById('volgendeAnswer');
                nextButton.addEventListener('click', function () {
                    hideElement(answerDiv);
                    currentQuestionIndex++;

                    if (currentQuestionIndex < questionsArray.length) {
                        showQuestionAndAnswer(currentQuestionIndex);
                    } else {
                        const resultMessage = `Je hebt ${correctAnswers} goede antwoorden.`;
                        questionsContainer.innerHTML = `<div class="end2"><div class="end"> ${resultMessage} </div> <a class="homeLink quiz-buttons end-button" href="index.php">Home</a></div>`;

                    }
                });
            }

            startButton.addEventListener('click', function ()
            {
                hideElement(startQuiz);
                showElement(questionsContainer);
                showQuestionAndAnswer(currentQuestionIndex);
            });

        </script>
    </main>
    <footer>

    </footer>
</body>

</html>
