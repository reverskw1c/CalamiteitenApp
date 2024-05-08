<?php
// Inclusie van vereiste bestanden
include "../Includes/db_functions.php";

// Maak verbinding met de CalamiteitenApp-database
startConnection("CalamiteitenApp");

// Controleer of alles is ingevuld in het formulier en geef variabelen door
if (isset($_POST['toevoegen'])) {
    $alarmnummer = $_POST['alarmnummer'];
    $locatie = $_POST['locatie'];

    // Query voor het invoegen van gegevens in de database
    $query = "INSERT INTO Alarmnummers (Alarmnummer, Locatie) 
              VALUES ('$alarmnummer', '$locatie')";

    // Uitvoeren van de query
    $result = executeQuery($query);

    // Toon een resultaat of het succesvol was of niet
    if ($result) {
        echo "Alarmnummer succesvol toegevoegd! Klik <a href='../Pages/Overzicht.php'>hier</a> om naar de overzichtspagina te gaan.";
    } else {
        echo "Er is een fout opgetreden bij het toevoegen van het alarmnummer. Klik <a href='../Pages/Overzicht.php'>hier</a> om terug te gaan naar de startpagina.";
    }
}

try {
    // Code die het probleem kan veroorzaken
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
