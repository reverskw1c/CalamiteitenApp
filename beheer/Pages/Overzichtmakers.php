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

// Standaard query zonder filters
$query = "SELECT Naam, Functie from Inloggegevens";
$result = executeQuery($query);

?>
    <!DOCTYPE html>
    <html lang="nl">
    <head>
        <title>CalamiteitenApp</title>
        <!-- Declaratie tekenset -->
        <meta charset="UTF-8">
        <!-- Declaratie viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Link naar het stylesheet -->
        <link rel="stylesheet" href="../Styles/style.css">
        <link rel="icon" type="image/x-icon" href="Images/Logo_KoningWillemCollege_.png">
    </head>
    <body>
    <?php include "../Includes/header.php";?>
    <?php
    //een while loop voor alles van de vragen de echo
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo '<center>';
        echo '<div class="flex-container">';
        echo "<p> Naam " . $row["Naam"] . "</p>";
        echo "<p> Functie: " . $row["Functie"] . "</p>";
        echo '</div>';
        echo '</center>';
    }
    ?>
    </body>
</html>

