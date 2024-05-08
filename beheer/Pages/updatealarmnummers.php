<?php
// Start the session
session_start();

// Include necessary files
include "../Includes/db_functions.php";

// Check if the ID parameter is set
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Check if the form is submitted
    if (isset($_POST["bijwerken_alarm"])) {
        // Receive and process the submitted form data
        $alarmnummer = $_POST["alarmnummer"];
        $locatie = $_POST["locatie"];

        // Update the alarm number in the database
        startConnection("CalamiteitenApp");
        $query = "UPDATE Alarmnummers SET Alarmnummer = '$alarmnummer', Locatie = '$locatie' WHERE id = $id";
        executeQuery($query);

        // stuurt de persoon naar de geupdate overzicht
        header("Location: AlarmnOverzicht.php");
        exit();
    }

    // Pakt het alarmnummer van de database
    startConnection("CalamiteitenApp");
    $query = "SELECT * FROM Alarmnummers WHERE id = $id";
    $result = executeQuery($query);
    $row = $result->fetch(PDO::FETCH_ASSOC);

    // kijkt of het alarm nummer is gevonden
    if (!$row) {
        echo "Alarmnummer niet gevonden.";
        exit();
    }
} else {
    echo "Geen alarmnummer ID opgegeven.";
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
    // JavaScript function to confirm deletion
    function confirmDelete() {
        return confirm("Weet je zeker dat je dit Alarmnummer wilt verwijderen?");
    }
</script>
<center>
    <div class="vraag-container">
    <h2>Alarmnummer Bewerken</h2>
    <!-- Form voor alarm nummers -->
    <form method="POST" action="updatealarmnummers.php?id=<?php echo $id; ?>">
        <label for="alarmnummer">Alarmnummer:</label>
        <input type="text" name="alarmnummer" value="<?php echo $row['Alarmnummer']; ?>" required><br><br>
        <label for="locatie">Locatie:</label>
        <input type="text" name="locatie" value="<?php echo $row['Locatie']; ?>" required><br><br>
        <input type="submit" value="Bijwerken" name="bijwerken_alarm">
    </form>
</center>
</div>
</body>
</html>
