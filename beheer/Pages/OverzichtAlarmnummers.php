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

// Standaard query zonder filters voor Alarmnummers
$queryAlarmnummers = "SELECT id, Alarmnummer, Locatie FROM Alarmnummers;";
$resultAlarmnummers = executeQuery($queryAlarmnummers);

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>CalamiteitenApp</title>
    <!-- Declaratie tekenset -->
    <meta charset="UTF-8">
    <!-- Declaratie viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Link naar het stylesheet -->
    <link rel="stylesheet" href="../Styles/style.css">
    <link rel="icon" type="image/x-icon" href="Images/Logo_KoningWillemCollege_.png">
</head>
<body>
<?php include "../Includes/header.php";?>
<script>
    function confirmDelete() {
        return confirm("Weet je zeker dat je dit Alarmnummer wilt verwijderen?");
    }
</script>
<center>
    <h2>Alarmnummer Toevoegen</h2>
    <form method="POST" action="AlarmnummerToevoegen.php">
        <div class="vraag-container">
            <!-- Voeg hier de invoervelden voor het toevoegen van een alarmnummer toe -->
            <label for="alarmnummer">Alarmnummer:</label>
            <input type="text" name="alarmnummer" required><br><br>
            <label for="locatie">Locatie:</label>
            <input type="text" name="locatie" required><br><br>
            <input type="submit" value="Toevoegen" name="toevoegen">
        </div>
    </form>
</center>

<?php
// Loop voor het weergeven van gegevens uit de Alarmnummers-tabel
while ($row = $resultAlarmnummers->fetch(PDO::FETCH_ASSOC)) {
    echo '<center>';
    echo '<div class="flex-container">';
    echo "<p> Alarmnummer: " . $row["Alarmnummer"] . "</p>";
    echo "<p> Locatie:" . $row["Locatie"] . "</p>";
    echo '<p>';
    echo "<a href='updatealarmnummers.php?id=" . $row["id"] . "'><img id='Prullenbak' src='../Images/Edit_icon-icons.com_71853.png'></a>";
    echo "<a href='DeleteAlarmnummers.php?id=" . $row["id"] . "' onclick='return confirmDelete()'><img id='Prullenbak' src='../Images/prullenbak-928418914-612x612.jpg'></a>";
    echo '</p>';
    echo '</div>';
    echo '</center>';
}
?>

</body>
</html>
