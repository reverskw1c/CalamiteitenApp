<?php
include "../Includes/db_functions.php";

//maakt connectie met de calamiteitenapp database
startConnection("CalamiteitenApp");

//kijkt of alles is ingevuld in de form en geeft variabelen mee
if (isset($_POST['toevoegen'])) {
    $vraag = $_POST['vraag'];
    $optieType = $_POST['optieType'];
    $optieContent = $_POST['optieContent'];
    $adviesTekst = $_POST['adviesTekst'];
    $isCorrectAnswer = $_POST['isCorrectAnswer'];

    // Query voor het invoegen van gegevens in de database
    $query = "INSERT INTO Vragen (Vraag, Optie_type, Optie_content, AdviesTekst, Is_correct_answer) 
              VALUES ('$vraag', '$optieType', '$optieContent', '$adviesTekst', '$isCorrectAnswer')";

    // Uitvoeren van de query
    $result = executeQuery($query);

    //geeft een result met of het gelukt is de ja of de nee
    if ($result) {
        echo "Vraag succesvol toegevoegd! Klik <a href='../Pages/Overzicht.php'>hier</a> om naar de overzichtspagina te gaan.";
    } else {
        echo "Er is een fout opgetreden bij het toevoegen van de vraag. Klik <a href='../Pages/Overzicht.php'>hier</a> om terug te gaan naar de startpagina.";
    }
}
try {
    // Code die het probleem veroorzaakt
} catch (PDOException $e) {
    // Optioneel: Log de gedetailleerde fout voor de beheerder
    error_log("Fout bij ophalen gegevens: " . $e->getMessage());

    // Toon de gebruikersvriendelijke foutmelding
    echo "Helaas is er iets fout gegaan bij het ophalen van de gegevens. Probeer het later opnieuw of neem contact op met de beheerder.";
} catch (Exception $ex) {
    // Andere algemene uitzonderingen
    echo "Er is een onverwachte fout opgetreden. Neem contact op met de beheerder.";
}

?>
