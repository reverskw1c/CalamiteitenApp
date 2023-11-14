<?php

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Map</title>
    <style>
        body {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            background-image: url("images/flat.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }

        .buttons {
            width: 270px;
            margin: 10px;
        }

        .wizard-container {
            display: none;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.7);
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

        .next-button {
            position: absolute;
            bottom: 10px;
            right: 10px;
            cursor: pointer;
        }

        .finish-button {
            position: absolute;
            bottom: 10px;
            right: 10px;
            cursor: pointer;
        }


        #button8, #button10, #button12 {
            position: relative;
            top: 342px;
            margin-left: 50px;
        }

        #button2, #button4, #button6 {
            position: relative;
            top: 330px;
            margin-left: 50px;
        }

        #button1, #button3, #button5, #button7, #button9, #button11 {
            margin-left: 140px;
            position: relative;
            top: 105px;
        }

        #newWizard {
            display: flex;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.7);
            justify-content: center;
            align-items: center;
        }

    </style>
</head>
<body>
<img src="images/Gif1.gif" alt="button1" class="button1 buttons" id="button1">

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


<!-- New Wizard-->
<div class="wizard-container" id="newWizard">
    <div class="wizard-content">
        <h2>New Wizard</h2>
        <div>
            <p>Slide 1 Content</p>
            <button class="next-button" id="next1">Next</button>
        </div>
        <div>
            <p>Slide 2 Content</p>
            <button class="next-button" id="next2">Next</button>
        </div>
        <div>
            <span class="close-button" id="closeNewWizard">X</span>
            <p>Slide 3 Content</p>
            <button id="finishButton" class="finish-button">Finish</button>
        </div>
    </div>
</div>

<!-- Wizard-vensters -->


<script>
    // Function to open the wizard window
    function openWizard(wizardId) {
        document.getElementById(wizardId).style.display = "flex";
    }

    // Function to close the wizard window
    function closeWizard(wizardId) {
        document.getElementById(wizardId).style.display = "none";
    }

    // Function to move to the next slide
    function nextSlide(currentSlideId, nextSlideId) {
        document.getElementById(currentSlideId).classList.remove('active');
        document.getElementById(nextSlideId).classList.add('active');
    }

    for (let i = 1; i <= 12; i++) {
        const buttonId = "button" + i;
        const wizardId = "wizard" + i;

        // Open the wizard when the button is clicked
        document.getElementById(buttonId).addEventListener("click", function () {
            openWizard(wizardId);
        });

        // Close the wizard when the close button is clicked
        document.getElementById("close" + i).addEventListener("click", function () {
            closeWizard(wizardId);
        });
    }
</script>
</body>
</html>
