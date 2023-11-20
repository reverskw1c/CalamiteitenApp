<?php
include("includes/header.php");
include("includes/footer.php");
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Map</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: scroll;
            display: grid;
            gap: 37px;
            background-image: url(images/betere_flatgebouw.png);
            background-repeat: no-repeat;
            background-attachment: scroll;
            background-size: 100% auto;
        }

        .buttons {
            width: 120px;
        }

        .button12{
        margin-bottom: ;
        }

        .wizard-container {
            display: none;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            justify-content: center;
            align-items: center;
        }

        .wizard-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            position: relative;
        }

        .close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }


        #introductieBox{
            position: fixed;
            margin: 50%;
            transform: translate(-50%, -50%);
            width: 50%;
            height: 10%;
            background: #F9E7E7;
            border-radius: 10px;
        }

        .close-button{
            width: 10%;
            float: inline-end;
        }
    </style>
</head>
<body>



<!-- Introductiewizard -->
<div id="introductieBox">
    <div class="titeltekst">
        <img class="close-button img-fluid d-flex" src= "<?php echo WWW_ROOT . '/images/close.png'?>"  onclick="closeModel()">
        <h2>Dit is een test<h2>
    </div>
    <p>Klik om te slepen</p>
</div>




<img src="images/Gif1.gif"  alt="button1" class="button1 buttons" id="button1">

<img src="images/Gif1.gif" alt="button2" class="button2 buttons" id="button2">

<img src="images/Gif1.gif" alt="button3" class="button3 buttons" id="button3">

<img src="images/Gif1.gif" alt="button4" class="button4 buttons" id="button4">

<img src="images/Gif1.gif" alt="button5" class="button5 buttons" id="button5">

<img src="images/Gif1.gif" alt="button6" class="button6 buttons" id="button6">

<img src="images/Gif1.gif" alt="button7" class="button7 buttons" id="button7">

<img src="images/Gif1.gif" alt="button8" class="button8 buttons" id="button8">

<img src="images/Gif1.gif" alt="button9" class="button9 buttons" id="button9">

<img src="images/Gif1.gif" alt="button10" class="button10 buttons" id="button10">

<img src="images/Gif1.gif" alt="button11" class="button11 buttons" id="button11">

<img src="images/Gif1.gif" alt="button12" class="button12 buttons" id="button12">




<!-- Wizard-vensters -->

<div class="wizard-container" id="wizard1">
    <div class="wizard-content">
        <span class="close-button" id="close1">X</span>
        <h2>Wizard 1</h2>
        <p>Dit is de inhoud van wizard 1.</p>
    </div>
</div>

<div class="wizard-container" id="wizard2">
    <div class="wizard-content">
        <span class="close-button" id="close2">X</span>
        <h2>Wizard 2</h2>
        <p>Dit is de inhoud van wizard 2.</p>
    </div>
</div>


<div class="wizard-container" id="wizard3">
    <div class="wizard-content">
        <span class="close-button" id="close3">X</span>
        <h2>Wizard 3</h2>
        <p>Dit is de inhoud van wizard 3.</p>
    </div>
</div>



<div class="wizard-container" id="wizard4">
    <div class="wizard-content">
        <span class="close-button" id="close4">X</span>
        <h2>Wizard 4</h2>
        <p>Dit is de inhoud van wizard 4.</p>
    </div>
</div>


<div class="wizard-container" id="wizard5">
    <div class="wizard-content">
        <span class="close-button" id="close5">X</span>
        <h2>Wizard 5</h2>
        <p>Dit is de inhoud van wizard 5.</p>
    </div>
</div>


<div class="wizard-container" id="wizard6">
    <div class="wizard-content">
        <span class="close-button" id="close6">X</span>
        <h2>Wizard 6</h2>
        <p>Dit is de inhoud van wizard 6.</p>
    </div>
</div>

<div class="wizard-container" id="wizard7">
    <div class="wizard-content">
        <span class="close-button" id="close7">X</span>
        <h2>Wizard 7</h2>
        <p>Dit is de inhoud van wizard 7.</p>
    </div>
</div>


<div class="wizard-container" id="wizard8">
    <div class="wizard-content">
        <span class="close-button" id="close8">X</span>
        <h2>Wizard 8</h2>
        <p>Dit is de inhoud van wizard 8.</p>
    </div>
</div>



<div class="wizard-container" id="wizard9">
    <div class="wizard-content">
        <span class="close-button" id="close9">X</span>
        <h2>Wizard 9</h2>
        <p>Dit is de inhoud van wizard 9.</p>
    </div>
</div>


<div class="wizard-container" id="wizard10">
    <div class="wizard-content">
        <span class="close-button" id="close10">X</span>
        <h2>Wizard 10</h2>
        <p>Dit is de inhoud van wizard 10.</p>
    </div>
</div>


<div class="wizard-container" id="wizard11">
    <div class="wizard-content">
        <span class="close-button" id="close11">X</span>
        <h2>Wizard 11</h2>
        <p>Dit is de inhoud van wizard 11.</p>
    </div>
</div>


<div class="wizard-container" id="wizard12">
    <div class="wizard-content">
        <span class="close-button" id="close12">X</span>
        <h2>Wizard 12</h2>
        <p>Dit is de inhoud van wizard 12.</p>
    </div>
</div>

<script>
    // Function to open the wizard window
    function openWizard(wizardId) {
        document.getElementById(wizardId).style.display = "flex";
    }

    // Function to close the wizard window
    function closeWizard(wizardId) {
        document.getElementById(wizardId).style.display = "none";
    }

    // Add click event listeners for all buttons
    for (let i = 1; i <= 12; i++) {
        const buttonId = "button" + i;
        const wizardId = "wizard" + i;

        // Open the wizard when the button is clicked
        document.getElementById(buttonId).addEventListener("click", function() {
            openWizard(wizardId);
        });

        // Close the wizard when the close button is clicked
        document.getElementById("close" + i).addEventListener("click", function() {
            closeWizard(wizardId);
        });
    }

    // Sluit de wizard met de sluitknop

    let introductieBox = document.getElementById("introductieBox");

    function closeModel(){
        introductieBox.style.display = "none";
    }




</script>
</body>
</html>