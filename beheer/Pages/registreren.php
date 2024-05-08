<?php
/**
 * User: Serezo Popelier
 * Date: 27-11-2023
 * File: CalamiteitenApp
 */
?>
<?php
//Include het bestand met de db functions
include "../Includes/db_functions.php";

//maakt connectie met de calamiteitenapp database
startConnection("CalamiteitenApp");

//kijkt of alles is ingevuld in de vorm en geef alles een varabiale mee
if (isset($_POST['registreren'])) {
    $naam = $_POST['naam'];
    $gebruikersnaam = $_POST['gebruikersnaam'];
    $rawWachtwoord = $_POST['wachtwoord'];
    $functie = $_POST['functie'];

    // Hash het wachtwoord
    $gehashtWachtwoord = password_hash($rawWachtwoord, PASSWORD_DEFAULT);

    // Voeg het gehashte wachtwoord toe aan de database
    $query = "INSERT INTO Inloggegevens (Naam, Gebruikersnaam, Wachtwoord, Functie) 
              VALUES ('$naam', '$gebruikersnaam', '$gehashtWachtwoord', '$functie')";
    $result = executeQuery($query);

    //kijkt of het registeren gelukt is de ja of de nee
    if ($result) {
        echo "Gebruiker succesvol geregistreerd!";
    } else {
        echo "Er is een fout opgetreden bij de registratie.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registreren</title>
</head>
<body>
<h2>Registreren</h2>
<form method="post" action="registreren.php">
    <label for="naam">Naam:</label>
    <input type="text" name="naam" required>
    <label for="gebruikersnaam">Gebruikersnaam:</label>
    <input type="text" name="gebruikersnaam" required>
    <label for="wachtwoord">Wachtwoord:</label>
    <input type="password" name="wachtwoord" required>
    <label for="functie">Functie:</label>
    <input type="text" name="functie" required>
    <input type="submit" name="registreren" value="Registreren">
</form>
</body>
</html>
