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
$query = "SELECT id AS vraag_id, Vraag, Optie_type, Optie_content, AdviesTekst, Is_correct_answer
FROM Vragen;";
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
<script>
    function confirmDelete() {
        return confirm("Weet je zeker dat je deze vraag wilt verwijderen?");
    }
</script>
<center>
    <h2>Vraag Toevoegen</h2>
    <form method="POST" action="Toevoegen.php">
        <div class="vraag-container">
            <label for="vraag">Vraag:</label>
            <input type="text" name="vraag" required><br><br>
            <label for="optieType">Optie Type:</label>
            <input type="text" name="optieType" required><br><br>
            <label for="optieContent">Optie Content:</label>
            <input type="text" name="optieContent" required><br><br>
            <label for="adviesTekst">Advies Tekst:</label>
            <input type="text" name="adviesTekst" required><br><br>
            <label for="isCorrectAnswer">Is Correct Answer:</label>
            <input type="text" name="isCorrectAnswer" required><br><br>
            <input type="submit" value="Toevoegen" name="toevoegen">
        </div>
    </form>
</center>
<?php
//een while loop voor alles van de vragen de echo
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo '<center>';
    echo '<div class="flex-container">';
    echo "<p> Vraag: " . $row["Vraag"] . "</p>";
    echo "<p> Optie Type: " . $row["Optie_type"] . "</p>";
    echo "<p> Optie Content: " . $row["Optie_content"] . "</p>";
    echo "<p> Advies Tekst: " . $row["AdviesTekst"] . "</p>";
    echo "<p> Is Correct Answer: " . $row["Is_correct_answer"] . "</p>";
    echo '<p>';
    echo "<a href='update.php?id=" . $row["vraag_id"] . "'><img id='Prullenbak' src='../Images/Edit_icon-icons.com_71853.png'></a>";
    echo "<a href='delete.php?id=" . $row["vraag_id"] . "' onclick='return confirmDelete()'><img id='Prullenbak' src='../Images/prullenbak-928418914-612x612.jpg'></a>";
    echo '</p>';
    echo '</div>';
    echo '</center>';
}
?>
</body>
</html>
