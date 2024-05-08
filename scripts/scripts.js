// Functie om een cookie in te stellen
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

// Functie om de waarde van een cookie op te halen
function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

// Functie om de introductiewizard te sluiten en de cookie in te stellen wanneer de gebruiker op 'sluiten' klikt
function closeIntroWizard() {
    var introWizard = document.getElementById('introWizard');
    var closeButton = document.getElementById('closeIntroWizard');

    // Toon de close button voor heropenen
    closeButton.style.display = "block";

    // Stel de cookie in om bij te houden dat de gebruiker de intro heeft gesloten
    setCookie('introWizardClosed', 'true', 365); // Hier is de cookie-instelling geldig voor 1 jaar

    // Verberg de intro wizard
    introWizard.style.display = "none";
}

// Functie om de introductiewizard te tonen of te verbergen op basis van de cookie-status
function handleIntroWizard() {
    var introWizard = document.getElementById('introWizard');

    // Controleer of de introWizardClosed-cookie is ingesteld
    var introWizardClosed = getCookie('introWizardClosed');
    if (introWizardClosed !== 'true') {
        // Toon de introductiewizard als de cookie niet is ingesteld
        introWizard.style.display = 'flex';
    }
}

// Voeg een eventlistener toe aan de Uitlegbutton
var Uitlegbutton = document.getElementById('Uitlegbutton');
if (Uitlegbutton) {
    Uitlegbutton.addEventListener('click', function () {
        openIntroWizard();
    });
    console.log("Uitlegbutton gevonden");
} else {
    console.log("Uitlegbutton niet gevonden");
}

window.addEventListener('load', function () {
    console.log("Pagina geladen");

    // Voeg de event listener toe voor het sluiten van de wizard
    var closeButton = document.getElementById('closeIntroWizard');
    if (closeButton) {
        closeButton.addEventListener('click', function () {
            closeIntroWizard();
        });
        console.log("closeButton gevonden");
    } else {
        console.log("closeButton niet gevonden");
    }

    // Roep de handleIntroWizard functie op om de wizard te tonen/verbergen op basis van de cookie-status
    handleIntroWizard();
});





// Houd bij welke wizard geopend is
var openWizardId = null;

// Function to open the wizard window
function openWizard(wizardId) {
    // Controleer of er al een andere wizard open is
    if (openWizardId !== null) {
        // Sluit de huidige open wizard voordat je een nieuwe opent
        closeWizard(openWizardId);
    }

    // Open de nieuwe wizard
    document.getElementById(wizardId).style.display = "flex";

    // Update de openWizardId variabele
    openWizardId = wizardId;
}

// Function to close the wizard window
function closeWizard(wizardId) {
    document.getElementById(wizardId).style.display = "none";

    // Reset de openWizardId variabele
    openWizardId = null;
}

$(document).ready(function () {
    // Vierkantlogo
    var logo = $(".vierkantlogo");
    var logoOffset = logo.offset().top;

    $(window).scroll(function () {
        logo.toggleClass("fixed", $(window).scrollTop() > logoOffset);
    });

    // Makersbutton
    var makersButton = $(".Uitlegbutton");
    var makersOffset = makersButton.offset().top;

    $(window).scroll(function () {
        makersButton.toggleClass("fixed", $(window).scrollTop() > makersOffset);
    });

    // Quizbutton
    var quizButton = $(".Quizbutton");
    var quizOffset = quizButton.offset().top;

    $(window).scroll(function () {
        quizButton.toggleClass("fixed", $(window).scrollTop() > quizOffset);
    });

    // Add click event listeners for all buttons
    for (let i = 1; i <= 19; i++) {
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
});

function openIntroWizard() {
    document.getElementById('introWizard').style.display = "flex";
    $(".vierkantlogo, .makersbutton, .Quizbutton").removeClass("fixed");
}



