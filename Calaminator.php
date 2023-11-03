<?php

?>

<HTML>
<head>
    <title>
        Calaminator
    </title>

</head>

<body>
<form action="quiz.php" method="post">
    <h1 style="font-size: 100px; text-align: center; margin-top: 68px;s">Calaminator</h1>
    <hr style="height: 10px; background-color: #333; border: none; margin-top: 10rem;">

    <div class="question" id="vraag1">
        <h2 style="font-size: 60px; margin-top: 10rem">Vraag 1:</h2>
        <p style="font-size: 45px">Wat moet je doen bij een calamiteit?</p>
        <div class="antwoord-buttons">
            <input type="radio" name="antwoorden" value="goed">
            <label for="goed" style="font-size: 40px">Rustig blijven, aan jouw eigen veiligheid denken en het
                alarmnummer bellen. </label>
            <br> <br> <br>
            <input type="radio" name="antwoorden" value="fout">
            <label for="fout" style="font-size: 40px">Naar de eerste dichtstbijzijnde uitgang rennen. </label>
        </div>

        <a href="andere_pagina.php" class="btn btn-primary btn-lg" style="font-size: 60px; padding: 20px 40px;">Volgende</a>
</body>

</HTML>


<style>
    input[type="radio"] {
        width: 50px;
        height: 40px;
    }
    .btn-primary {
        font-size: 35px; /* Aanpassen van de lettergrootte */
        padding: 20px 20px;
        position: absolute;
        top: 70rem;
        right: 80px;
</style>