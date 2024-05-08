<?php
/**
 * User: Serezo Popelier
 * Date: 27-11-2023
 * File: CalamiteitenApp
 */
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>CalamiteitenApp</title>
    <!-- declaration character set -->
    <meta charset="UTF-8">
    <!-- Declaration viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link to the stylesheet -->
    <link rel="stylesheet" href="../Styles/style.css">
    <link rel="icon" type="image/x-icon" href="">
</head>
<body>
<?php include "../Includes/header.php";?>
<center>
    <div class="login-container">
        <h2>Inloggen</h2>
        <form method="post" action="">
            <label for="gebruikersnaam">Gebruikersnaam:</label>
            <input type="text" name="gebruikersnaam" required><br><br>
            <label for="wachtwoord">Wachtwoord:</label>
            <input type="password" name="wachtwoord" required><br><br>
            <input type="submit" value="Inloggen" name="inloggen">
        </form>
    </div>
</center>
</body>
<?php
// Start the session
session_start();
$_SESSION["loggedin"] = FALSE;
$_SESSION["gebruikersnaam"] = FALSE;

// Include het bestand met de database functions
include "../Includes/db_functions.php";

// Kijkt of de form is ingevuld
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Maakt connectie met de database
    startConnection("CalamiteitenApp");

    // Pakt de Gebruiksnaam en wachtwoord
    $gebruikersnaam = $_POST['gebruikersnaam'];
    $wachtwoord = $_POST['wachtwoord'];

    $query = "SELECT * FROM Inloggegevens WHERE Gebruikersnaam = '$gebruikersnaam'";
    $result = executeQuery($query);

    if ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        // Controleer het gehashte wachtwoord
        if (password_verify($wachtwoord, $row['Wachtwoord'])) {
            // Log in
            $_SESSION["loggedin"] = TRUE;
            $_SESSION["gebruikersnaam"] = $gebruikersnaam;
            header("Location: Overzicht.php");
        } else {
            // Verkeerd wachtwoord geeft een foutmelding
            echo '<center><p>Verkeerd wachtwoord of gebruikersnaam</p></center>';
        }
    } else {
        // Gebruiker niet gevonden
        echo '<center><p>Gebruiker niet gevonden</p></center>';
    }

}
?>
</html>
