<?php
/**
 * User: Serezo Popelier
 * Date: 29-11-2023
 * File: CalamiteitenApp
 */

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
    $vraagID = $_GET["id"];

    // Verwijder de vraag uit de database
    $query = "DELETE FROM Vragen WHERE id = $vraagID";
    executeQuery($query);

    // Redirect naar de overzicht.php-pagina
    header("Location: Overzicht.php");
    exit();
} else {
    echo "Geen vraag ID opgegeven.";
    exit();
}

