<!DOCTYPE html>
<html lang="nl">
<head>
    <link rel="icon" type="image/x-icon" href="/images/calm.jpg">
    <!-- titel --> 
    <title>CALM</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/Index.css">
    <script src="scripts/scripts.js" defer></script>
</head>


<body>
<!--scripts-->


<!-- Wizard-venster voor introductie -->
<div class="wizard-container-intro" id="introWizard">
    <div class="wizard-content-intro">
        <div class="testbackground">
            <span class="Sluiting-wizard" id="closeIntroWizard">X</span>
        <div class="intro-tekst">

            <h2>Welkom bij CALM</h2>
            <br>
            <p>Een ongeval op het Koning Willem I College… wat nu? <br> <br>
                Iedereen wil aan het einde van de dag weer veilig naar huis. Daarom
                streeft het Koning Willem I College naar een veilige leer- en werkomgeving en naar het voorkomen van ongevallen.
                Helaas zit een ongeluk soms in een klein hoekje en kan zich toch een ongeval voordoen. <br> <br>Met deze applicatie
                hopen wij jou te informeren over veiligheid en wat te doen bij calamiteiten. <br> <br>Sluit dit venster, scroll naar beneden en verken de blauwe en groene knoppen. Zoom in als
                je de kamers beter wil bekijken en houd je telefoon in portret-weergave.
                <br> <br>
            </p>
        </div>
    </div>
</div>
</div>

<!-- rode balk -->
<header>
    <div class="rodebalktop">
    </div>

    <!-- knop naar meldknop-pagina  -->
    <div>
        <a href="meldknop.php" class="meldknopi">
            <img src="images/fullPhone2.jpg" alt="red-phone" class="red-phone vierkantlogo ">
        </a>
    </div>

    <!-- CALM logo -->
    <h1 class="Index-logo">
        <img src="images/logo_def-01.png" alt="calmlogo">
    </h1>
    <div id="home">
    <!-- knop naar makers-pagina -->
    <button class="makersbutton">
        <a href="makers.php" class="makerstitel">Makers</a>
    </button>

    <!-- knop naar quiz-pagina -->
    <button class="Quizbutton">
        <a href="quiztest.php" class="Quiztitel">Quiz</a>
    </button>

    <!-- knop naar wizard -->
    <button id="Uitlegbutton" class="Uitlegbutton">
        <a href="#" class="Uitlegtitel">Introductie</a>
    </button>
</header>

<!--Flat als achtergrond en buttons-->
<div class="flatgebouw-content">
    <div class="buttons-container gif-container">
    <img src="images/Gif1.gif"  alt="button1" class="button1 buttons animated-gif" id="button1">

    <img src="images/Gif1.gif" alt="button2" class="button2 buttons animated-gif" id="button2">

    <img src="images/Gif1.gif" alt="button3" class="button3 buttons animated-gif " id="button3">

    <img src="images/Gif1.gif" alt="button4" class="button4 buttons animated-gif" id="button4">

    <img src="images/Gif1.gif" alt="button5" class="button5 buttons animated-gif" id="button5">

    <img src="images/Gif1.gif" alt="button6" class="button6 buttons animated-gif" id="button6">

    <img src="images/Gif1.gif" alt="button7" class="button7 buttons animated-gif" id="button7">

    <img src="images/Gif1.gif" alt="button8" class="button8 buttons animated-gif" id="button8">

    <img src="images/Gif1.gif" alt="button9" class="button9 buttons animated-gif" id="button9">

    <img src="images/Gif1.gif" alt="button10" class="button10 buttons animated-gif" id="button10">

    <img src="images/Gif1.gif" alt="button11" class="button11 buttons animated-gif" id="button11">

    <img src="images/Gif1.gif" alt="button12" class="button12 buttons animated-gif" id="button12">

   <img src="images/Gif1.gif" alt="button13" class="button13 buttons animated-gif" id="button13">

  <img src="images/Gif1.gif" alt="button14" class="button14 buttons animated-gif" id="button14">

   <img src="images/Gif1.gif" alt="button15" class="button15 buttons animated-gif" id="button15">

  <img src="images/Gif1.gif" alt="button16" class="button16 buttons animated-gif" id="button16">

  <img src="images/Gif1.gif" alt="button17" class="button17 buttons animated-gif-blauw" id="button17">

  <img src="images/Gif1.gif" alt="button18" class="button18 buttons animated-gif-blauw" id="button18">

  <img src="images/Gif1.gif" alt="button19" class="button19 buttons animated-gif-blauw" id="button19">
    </div>
    </div>


<!-- Wizard-vensters -->
<!--wizard 1-->
<div class="wizard-container" id="wizard1">
    <div class="wizard-content">
        <div class="wizard-menu">
            <div class="img-fluid"> 
            <img src="images/wizardfoto/bhv.jpg" alt="bhv-vest" class="img-default">
            </div>
            <span class="close-button" id="close1">X</span>
            </div> 
            <div class="info-wizard">
                <p>Bedrijfshulpverleners (bhv’ers) zijn getrainde medewerkers die specifieke taken
                    hebben tijdens calamiteiten. Ze zijn opgeleid om eerste hulp te verlenen, kleine branden
                    te blussen en een gebouw of locatie te ontruimen. Bhv’ers zijn het eerste aanspreekpunt
                    bij calamiteiten en werken nauw samen met hulpdiensten om de veiligheid van iedereen te waarborgen.
                    Je kunt de bhv’ers alarmeren door het interne alarmnummer te bellen.</p>
            </div>
      </div>
</div>

<!-- wizard 2-->
<div class="wizard-container" id="wizard2">
    <div class="wizard-content">
        <div class="wizard-menu">
            <div class="img-fluid"> 
            <img src="images/wizardfoto/ontruimingsplattegrond_lobby.jpg" alt="plattegrond" class="img-default-2">
            </div> 
            <span class="close-button" id="close2">X</span>
            </div> 
            <div class="info-wizard">
                <p>De ontruimingsplattegronden zijn duidelijk zichtbare plattegronden die strategisch zijn
                    geplaatst in de gebouwen. Ze tonen onder andere de locaties van nooduitgangen, vluchtroutes,
                    verzamelplaatsen, blusmiddelen en AED’s. De ontruimingsplattegronden zijn een soort gids en
                    kunnen worden bekeken als er geen calamiteit gaande is.
                </p>
            </div>
      </div>
</div>

<!-- wizard 3-->
<div class="wizard-container" id="wizard3">
    <div class="wizard-content">
        <div class="wizard-menu">
            <div class="img-fluid"> 
            <img src="images/rookmelder0.png" alt="rookmelder" class="img-nondefault">
            </div> 
            <span class="close-button" id="close3">X</span>
            </div> 
            <div class="info-wizard">
                <p>Automatische melders activeren zelf het brandalarm wanneer er rook
                of hitte wordt gedetecteerd. Een verschil met de handbrandmelders is
                dat het ontruimingsalarm alleen in dat specifiek deel van het gebouw
                afgaat. De andere delen van het gebouw volgen als de brand niet wordt gedoofd.</p>
            </div>
      </div>
</div>

<!-- wizard 4-->
<div class="wizard-container" id="wizard4">
    <div class="wizard-content">
        <div class="wizard-menu">
            <div class="img-fluid"> 
            <img src="images/wizardfoto/blusdeken.jpg" alt="blusdeken" class="img-default">
            </div> 
            <span class="close-button" id="close4">X</span>
            </div> 
            <div class="info-wizard">
            	<p>Een blusdeken is een speciaal ontworpen deken die kan worden gebruikt om kleine
                    branden te doven door de zuurstof af te snijden en de vlammen te smoren. De blusdeken wordt
                    alleen gebruikt door een bhv’er.
                    Er mogen geen spullen voor de blusdekens geplaatst worden.
                    Veiligheid is een gedeelde verantwoordelijkheid. Alleen samen kunnen we ervoor
                    zorgen dat de blusdekens beschikbaar en bereikbaar zijn.
                </p>
            </div>
      </div>
</div>

<!-- wizard 5-->
<div class="wizard-container" id="wizard5">
    <div class="wizard-content">
        <div class="wizard-menu">
            <div class="img-fluid"> 
            <img src="images/wizardfoto/brandblusser.jpg" alt="brandblusser" class="img-default-2">
            </div> 
            <span class="close-button" id="close5">X</span>
            </div> 
            <div class="info-wizard">
            <p>De bhv’er gebruikt blusmiddelen bij (kleine) branden.
                Een brandblusser is draagbaar om beginnende branden te bestrijden.
                Een brandslanghaspel is rechtstreeks aangesloten op de watervoorziening.
                Er mogen geen spullen voor de blusmiddelen geplaatst worden.
                Veiligheid is een gedeelde verantwoordelijkheid. Alleen samen kunnen we ervoor zorgen dat
                de blusmiddelen beschikbaar en bereikbaar zijn.</p>
            </div>
      </div>
</div>

<!-- wizard 6-->
<div class="wizard-container" id="wizard6">
    <div class="wizard-content">
        <div class="wizard-menu">
            <div class="img-fluid"> 
            <img src="images/wizardfoto/EHBO.jpg" alt="ehbo" class="img-default">
            </div> 
            <span class="close-button" id="close6">X</span>
            </div> 
            <div class="info-wizard">
                <p>De bhv’er gebruikt de EHBO-koffer bij het verlenen van eerste hulp bij (kleine) verwondingen.
                    De EHBO-koffers zijn strategisch geplaatst binnen de locaties van het KW1C en bevatten benodigdheden en apparatuur om
                    eerste hulp te verlenen.
                    Veiligheid is een gedeelde verantwoordelijkheid. Alleen samen kunnen we ervoor zorgen
                    dat de EHBO-koffers beschikbaar zijn en er voldoende voorraad in zit. </p>
            </div>
      </div>
</div>

<!-- wizard 7-->
<div class="wizard-container" id="wizard7">
    <div class="wizard-content">
        <div class="wizard-menu">
            <div class="img-fluid"> 
            <img src="images/wizardfoto/evacuatiestoel.jpg" alt="evacuatiestoel" class="img-default">
            </div> 
            <span class="close-button" id="close7">X</span>
            </div> 
            <div class="info-wizard">
                <p>De bhv’er gebruikt de evacuatiestoel (evac-chair) bij het vervoeren van mensen met een
                    beperkte mobiliteit of slachtoffers tijdens een calamiteit.
                    Alleen de bhv’ers zullen de evac-chair gebruiken, omdat zij hiervoor getraind zijn.
                    Veiligheid is een gedeelde verantwoordelijkheid. Alleen samen kunnen we ervoor zorgen
                    dat de evac-chairs beschikbaar en bereikbaar zijn</p>
            </div>
      </div>
</div>

<!-- wizard 8-->
<div class="wizard-container" id="wizard8">
    <div class="wizard-content">
        <div class="wizard-menu">
            <div class="img-fluid"> 
            <img src="images/wizardfoto/AED_lobby.jpg" alt="aed" class="img-default">
            </div> 
            <span class="close-button" id="close8">X</span>
            </div> 
            <div class="info-wizard">
                <p>De Automatische Externe Defibrillator (AED) wordt ingezet in het geval dat iemand een hartstilstand krijgt.
                    De AED is een draagbaar apparaat dat wordt gebruikt om het hartritme te herstellen. Op alle locaties is
                    minstens een AED aanwezig.

                    Alleen de bhv’ers zullen de AED gebruiken, omdat zij hiervoor getraind zijn.

                    Bel zo snel mogelijk naar het interne alarmnummer als je een bewusteloos persoon aantreft.</p>
            </div>
      </div>
</div>

<!-- wizard 9-->
<div class="wizard-container" id="wizard9">
    <div class="wizard-content">
        <div class="wizard-menu">
            <div class="img-fluid"> 
            <img src="images/wizardfoto/noodknop.jpg" alt="noodstop" class="img-default">
            </div> 
            <span class="close-button" id="close9">X</span>
            </div> 
            <div class="info-wizard">
                <p>Noodstoppen zijn ontworpen om direct de werking van machines, apparatuur of gasstromen te
                    laten stoppen in geval van een noodsituatie. Hierdoor kunnen gevaarlijke situaties worden
                    beëindigd. Het activeren van een noodstop is eenvoudig en effectief, en het kan levens redden.
                    Het is belangrijk dat je weet waar de noodstoppen geplaatst zijn en begrijpt hoe ze geactiveerd worden.</p>
            </div>
      </div>
</div>

<!-- wizard 10-->
<div class="wizard-container" id="wizard10">
    <div class="wizard-content">
        <div class="wizard-menu">
            <div class="img-fluid"> 
            <img src="images/wizardfoto/3e_verdieping_brand_alarm.jpg" alt="handbrandmelder" class="img-default">
            </div> 
            <span class="close-button" id="close10">X</span>
            </div> 
            <div class="info-wizard">
                <p>Brandmelders zijn van groot belang bij het KW1C. Handbrandmelders zijn hulpmiddelen die
                    een aanwezige in staat stelt om handmatig een brandalarm te activeren als er brand of
                    rook wordt waargenomen. Het activeren van een handbrandmelder zorgt ervoor dat er in
                    het hele gebouw een ontruimingsalarm afgaat en de bhv’ers worden gealarmeerd.</p>
            </div>
      </div>
</div>

<!-- wizard 11-->
<div class="wizard-container" id="wizard11">
    <div class="wizard-content">
        <div class="wizard-menu">
            <div class="img-fluid"> 
            <img src="images/wizardfoto/verzamelplek.jpg" alt="verzamelplaats" class="img-default">
            </div> 
            <span class="close-button" id="close11">X</span>
            </div> 
            <div class="info-wizard">
                <p>Bij een ontruiming is de verzamelplaats het aangewezen ontmoetingspunt waar alle studenten,
                    medewerkers en bezoekers zich moeten verzamelen. Hier wordt gecontroleerd of iedereen veilig is.

                    Blijf op de verzamelplaats totdat je instructies ontvangt van de bhv’er om veilig terug te keren naar het gebouw.

                    Kijk op de ontruimingsplattegrond om te zien waar de ontruimingsplaats van jouw locatie is.</p>
            </div>
      </div>
</div>

<!-- wizard 12-->
<div class="wizard-container" id="wizard12">
    <div class="wizard-content">
        <div class="wizard-menu">
            <div class="img-fluid"> 
            <img src="images/wizardfoto/noodroute.jpg" alt="nooddeur" class="img-default-2">
            </div> 
            <span class="close-button" id="close12">X</span>
            </div> 
            <div class="info-wizard">
                <p>Het KW1C wil voorkomen dat er calamiteiten plaatsvinden. Toch kan er soms iets misgaan.
                    Om ervoor te zorgen dat iedereen veilig de gebouwen kan verlaten tijdens een calamiteit zijn er
                    vluchtroutes en nooddeuren aanwezig.
                    Vluchtroutes zijn gangen die speciaal ontworpen zijn om een veilige en snelle ontruiming mogelijk
                    te maken. Deze routes zijn duidelijk aangegeven en moeten te allen tijde vrij toegankelijk zijn.
                    Nooddeuren zijn speciaal ontworpen deuren die gemakkelijk en snel kunnen worden geopend tijdens
                    calamiteiten. Ze mogen niet worden geblokkeerd worden en ze zijn duidelijk herkenbaar
                </p>
            </div>
      </div>
</div>

<!-- wizard 13-->
<div class="wizard-container" id="wizard13">
    <div class="wizard-content">
        <div class="wizard-menu">
            <div class="img-fluid">
                <img src="images/wizardfoto/nooddouche.jpg" alt="nooddouche" class="img-default-2">
            </div>
            <span class="close-button" id="close13">X</span>
        </div>
        <div class="info-wizard">
            <p>Nooddouches en oogspoeldouches zijn speciaal ontworpen om direct hulp te bieden
                wanneer er gevaarlijke stoffen op het lichaam of in het oog terecht zijn gekomen.
                Deze hulpmiddelen zijn aanwezig als er met gevaarlijke stoffen wordt gewerkt.
                Veiligheid is een gedeelde verantwoordelijkheid. Alleen samen kunnen we ervoor
                zorgen dat de nooddouches en oogspoeldouches beschikbaar en bereikbaar zijn</p>
        </div>
    </div>
</div>

<!-- wizard 14-->
<div class="wizard-container" id="wizard14">
    <div class="wizard-content">
        <div class="wizard-menu">
            <div class="img-fluid">
                <img src="images/wizardfoto/red-phone.jpg" alt="alarmnummersweb" class="img-nondefault">
            </div>
            <span class="close-button" id="close14">X</span>
        </div>
        <div class="info-wizard">
            <p>Oh nee, Pietje Paniek is uitgegleden. Gelukkig wist zijn klasgenoot snel te handelen door het interne alarmnummer van het KW1C te bellen. Alle interne alarmnummers van het KW1C staan in deze CALM-app.</p>
        </div>
    </div>
</div>

<!-- wizard 15-->
<div class="wizard-container" id="wizard15">
    <div class="wizard-content">
        <div class="wizard-menu">
            <div class="img-fluid">
                <img src="images/wizardfoto/alarmkaart_lobby.jpg" alt="alarmkaart" class="img-default-2">
            </div>
            <span class="close-button" id="close15">X</span>
        </div>
        <div class="info-wizard">
            <p>De alarmkaart geeft korte richtlijnen aan om snel en doeltreffend te handelen
                bij drie meest waarschijnlijke calamiteiten en toont het interne alarmnummer van de locatie.

                Krijg je te maken met een calamiteit bel dan dit nummer om de bhv’ers te alarmeren.

                In bijna alle ruimtes hangt een alarmkaart. Zorg dat je weet wat je moet doen bij een calamiteit,
                samen zorgen we voor een veilig KW1C.
            </p>
        </div>
    </div>
</div>

<!-- wizard 16-->
<div class="wizard-container" id="wizard16">
    <div class="wizard-content">
        <div class="wizard-menu">
            <div class="img-fluid">
                <img src="images/bijbrandgeenlift.gif" alt="alarmkaart" class="img-default-2">
            </div>
            <span class="close-button" id="close16">X</span>
        </div>
        <div class="info-wizard">
            <p>De lift mag niet worden gebruikt tijdens een brand. De lift zal automatisch
                naar beneden worden gestuurd, waar de deuren worden geopend. De lift is dan
                ook niet meer te gebruiken. Maak dus altijd gebruik van de aangegeven vluchtroute en nooduitgang.</p>
        </div>
    </div>
</div>

<!-- wizard 17-->
<div class="wizard-container" id="wizard17">
    <div class="wizard-content-lang">
        <div class="wizard-menu">
            <span class="close-button" id="close17">X</span>
        </div>
        <div class="info-wizard">
            <h1>Wat te doen bij een ontruiming? Ontruimingsalarm</h1>
            <p><br>Bij een ontruiming is het belangrijk om georganiseerd te handelen om de veiligheid van alle
                aanwezigen te waarborgen. Als er een ontruiming plaatsvindt, gelden de volgende stappen:<br>

                <br>· Blijf kalm.

                <br>· Blijf bewust van je eigen veiligheid.

                <br>· Volg ontruimingsalarmen en instructies van een bhv’er onmiddellijk op.

                <br>· Dit is niet vrijblijvend.

                <br>· Laat persoonlijke bezittingen achter. Je veiligheid heeft prioriteit boven materiële zaken. Tenzij er specifiek wordt aangegeven dat je je persoonlijke bezittingen juist wel moet meenemen.

                <br>· Maak GEEN gebruik van de liften.

                <br> · Verlaat het gebouw via de dichtstbijzijnde en veilige vluchtroute. Blijf als groep bij elkaar en volg de docent naar buiten. Kom je onderweg minder validen of slachtoffers tegen, vraag of je hen kunt helpen.

                <br> · Ga naar de verzamelplaats. Mis je iemand, geef dit aan bij de bhv’er. Blijf op de verzamelplaats totdat de bhv’er anders aangeeft.<br>
            </p>
        </div>
    </div>
</div>

<!-- wizard 18-->
<div class="wizard-container" id="wizard18">
    <div class="wizard-content-lang">
        <div class="wizard-menu">
            <span class="close-button" id="close18">X</span>
        </div>
        <div class="info-wizard">
            <h1>Wat te doen bij een ongeval?</h1>
            <p><br>Iedereen wil aan het einde van de dag weer veilig naar huis toe gaan. Daarom streeft het KW1C naar een veilige
                omgeving en het voorkomen van ongevallen. Helaas zit een ongeluk soms in een klein hoekje en kan zich toch
                een ongeval (met letsel) voordoen.
                <br>
                <br>Als er een ongeval plaatsvindt en je ziet dit gebeuren of je komt hierbij uit dan gelden de volgende stappen:

                <br> · Blijf kalm.

                <br>· Denk eerst aan je eigen veiligheid. Zorg ervoor dat de plaats van het ongeval veilig is voor jou en anderen voordat je iets onderneemt. Schakel het gevaar uit als dat nodig/mogelijk is.

                <br> · Ga na of slachtoffer nog reageert of bewusteloos is.

                <br> · Bel het interne alarmnummer om de bhv’ers op te roepen. Stel het slachtoffer gerust.

                <br>· Verleen hulp als je hiervoor getraind bent. Verplaats het slachtoffer niet als je hier geen training voor hebt gevolgd.

                <br>· Blijf bij het slachtoffer totdat de bhv’ers aanwezig zijn. Observeer het slachtoffer of de toestand niet verslechtert.

                 Als je betrokken bent bij het ongeval kan dit ervoor zorgen dat je wat van slag bent. Meld daarom altijd wat je hebt meegemaakt.<br>
            </p>
        </div>
    </div>
</div>

<!-- wizard 19-->
<div class="wizard-container" id="wizard19">
    <div class="wizard-content-lang">
        <div class="wizard-menu">
            <span class="close-button" id="close19">X</span>
        </div>
        <div class="info-wizard19">
            <h1>
                Wat te doen bij een brand?
            </h1>
            <br>
            <p>Mocht er een brand zijn uitgebroken is het cruciaal dat iedereen weet wat hij/zij moet doen.
                Volg daarom de volgende stappen:

                <br>· Blijf kalm.

                <br> · Denk eerst aan je eigen veiligheid. Druk een handbrandmelder in.

                <br>· Bel het interne alarmnummer om de bhv’ers te informeren.

                <br>· Laat het blussen van branden over aan de opgeleide bhv’ers

                <br>· Vermijd rook, want deze is giftig. Blijf zo laag mogelijk door te bukken, maar ga niet kruipen.

                <br>· Sluit ramen, deuren en ventilatieroosters.

                <br> · Neem geen tassen of andere spullen mee naar buiten.

                <br>· Maak GEEN gebruik van de liften

                <br>· Verlaat het gebouw via de dichtstbijzijnde en veilige vluchtroute.

                <br>· Blijf als groep bij elkaar en volg de docent naar buiten

                <br>· Kom je onderweg slachtoffers tegen, vraag of je hen kunt helpen.

                <br>· Ga naar de verzamelplaatsen.

                <br>· Mis je iemand , geef dit aan bij de bhv’er. Blijf op de verzamelplaats totdat de bhv’er anders aangeeft

                <br>· Volg de instructies op die de bhv’ers aangeven. Dit is niet vrijblijvend.<br>
            </p>
        </div>
    </div>
</div>
</div>
<div id="homeMobiel">
    <p>
        Open deze applicatie op een mobiel scherm in portrait modus.<br><br><br>
        <img src="images/turnphone.png">
    </p>

</div>
</body>
</html>





