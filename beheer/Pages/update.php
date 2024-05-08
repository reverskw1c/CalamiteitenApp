<?php
// Start de sessie
session_start();

// Inclusie van vereiste bestanden
include "../Includes/db_functions.php";

// Controleer of de ID-parameter is ingesteld
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Controleer of het formulier is ingediend
    if (isset($_POST["toevoegen_vraag"])) {
        // Ontvang en verwerk de ingediende formuliergegevens
        $vraag = $_POST["vraag"];
        $optieType = $_POST["optieType"];
        $optieContent = $_POST["optieContent"];
        $adviesTekst = $_POST["adviesTekst"];
        $isCorrectAnswer = $_POST["isCorrectAnswer"];

        // Update de activiteit in de database
        startConnection("CalamiteitenApp");
        $query = "UPDATE Vragen SET Vraag = '$vraag', Optie_type = '$optieType', Optie_content = '$optieContent', AdviesTekst = '$adviesTekst', Is_correct_answer = '$isCorrectAnswer' WHERE id = $id";
        executeQuery($query);

        // Redirect naar de pagina met de bijgewerkte vragen
        header("Location: Overzicht.php");
        exit();
    }

    // Haal de activiteit op uit de database
    startConnection("CalamiteitenApp");
    $query = "SELECT * FROM Vragen WHERE id = $id";
    $result = executeQuery($query);
    $row = $result->fetch(PDO::FETCH_ASSOC);

    // Controleer of de activiteit is gevonden
    if (!$row) {
        echo "Vraag niet gevonden.";
        exit();
    }
} else {
    echo "Geen vraag ID opgegeven.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Calamiteiten App</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/style.css">
    <link rel="icon" type="image/x-icon" href="Images/Logo_KoningWillemCollege_.png">
</head>
<body>
<script>
    // JavaScript-functie om bevestiging te vragen bij verwijderen
    function confirmDelete() {
        return confirm("Weet je zeker dat je deze Vraag wilt verwijderen?");
    }
</script>
<center>
    <h2>Vraag Bewerken</h2>
        <!-- Formulier voor vragen -->
    <div class="vraag-container">
            <form method="POST" action="update.php?id=<?php echo $id; ?>">
            <label for="vraag">Vraag:</label>
            <input type="text" name="vraag" value="<?php echo $row['Vraag']; ?>" required><br><br>
            <label for="optieType">Optie Type:</label>
            <input type="text" name="optieType" value="<?php echo $row['Optie_type']; ?>" required><br><br>
            <label for="optieContent">Optie Content:</label>
            <input type="text" name="optieContent" value="<?php echo $row['Optie_content']; ?>" required><br><br>
            <label for="adviesTekst">Advies Tekst:</label>
            <input type="text" name="adviesTekst" value="<?php echo $row['AdviesTekst']; ?>" required><br><br>
            <label for="isCorrectAnswer">Is Correct Answer:</label>
            <input type="text" name="isCorrectAnswer" value="<?php echo $row['Is_correct_answer']; ?>" required><br><br>
            <input type="submit" value="Bijwerken" name="toevoegen_vraag">
        </form>
</center>
</div>
</body>
</html>
``