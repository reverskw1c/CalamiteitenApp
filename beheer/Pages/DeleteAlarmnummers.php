<?php
// Inclusie van benodigde bestanden
include "../Includes/db_functions.php";

// Start de sessie
session_start();

// Maak verbinding met de database
startConnection("CalamiteitenApp");

// Controleer of de gebruiker is ingelogd
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Gebruiker is niet ingelogd, stuur door naar login.php
    header('Location: Inloggen.php');
    exit();
}

// Controleer of de ID-parameter is ingesteld
if (isset($_GET["id"])) {
    $alarmnummerID = $_GET["id"];

    // Verwijder het alarmnummer uit de database
    $query = "DELETE FROM Alarmnummers WHERE id = $alarmnummerID";
    executeQuery($query);

    // Redirect naar de overzicht.php-pagina voor alarmnummers
    header("Location: Overzicht.php");
    exit();
} else {
    echo "Geen alarmnummer ID opgegeven.";
    exit();
}
?>
