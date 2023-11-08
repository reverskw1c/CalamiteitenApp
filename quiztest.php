<!DOCTYPE html>
<html>
<head>
    <title>Toggle Element with JavaScript</title>
    <style>
        #myElement {
            display: none;
        }
    </style>
</head>
<body>
<button id="toggleButton">volgende</button>

<div id="myElement">
    This is a hidden element.
</div>

<script>
    const toggleButton = document.getElementById('toggleButton');
    const myElement = document.getElementById('myElement');

    toggleButton.addEventListener('click', function () {
        if (myElement.style.display === 'none') {
            myElement.style.display = 'block';
        } else {
            myElement.style.display = 'none';
        }
    });
</script>
</body>
</html>