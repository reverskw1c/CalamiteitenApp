<?php
include ("initialize.php");
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="/images/calm.jpg">
    <meta name="viewport" content="width= device-width, initial-scale-1"/>
    <title>
        CALM APP - Koning Willem 1 College
    </title>

    <!-- Opmaak -->
    <link rel="stylesheet" href="css/stylesheets.css">
    <!-- Opmaak -->

    <!--Bootstrap opmaak -->
    <link href= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</head>

<body>
        <div class="rodebalktop">
            </div>
            <!-- Homeknop -->
            <div class="homeknop-vak">
                <a href="index.php" class="homeknop-pijl">
                    <img class="pijl-img" src="images/arrow_left.jpg">
                </a>
            </div>

            <!-- Kop -->
            <div class="col-12">
                <h1 class="meldknop-titel">KW1C Alarmnummers</h1>
            </div>


            <!-- Algemeen knoppenoverzicht/lijst -->
            <div class="accordion-menu" id="Menu">
            <ul>
            <li class="accordion-items">
                    <!-- s'Hertogenbosch knop (1) -->
                    <div class="accordion-buttons" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" >’s-Hertogenbosch</div>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#Menu" >
                        <div class="accordion-body">
                                <p>J. van Maerlantstraat: </p>
                                <p><a class="number" href="tel:+06 - 1840 5695">06 - 1840 5695</a></p>

                                <br>

                                <p>Marathonloop </p>
                                <p><a class="number" href="tel:+073 - 6249 726">073 - 6249 726</a></p>

                                <br>

                                <p>Onderwijsboulevard: </p>
                                <p><a class="number" href="tel:+073 - 6249 443">073 - 6249 443</a></p>

                                <br>

                                <p>Stadionlaan: </p>
                                <p><a class="number" href="tel:+06 - 2881 6348">06 - 2881 6348</a></p>

                                <br>

                                <p>Vlijmenseweg: </p>
                                <p><a class="number" href="tel:+073 - 6249 626">073 - 6249 626</a></p>

                                <br>

                                <p>Weidonklaan: </p>
                                <p><a class="number" href="tel:+073 - 6249 422">073 - 6249 422</a></p>
                        </div>
                    </div>
                </li>

            <li class="accordion-items">
                    <!-- Rosmalen knop (2) -->
                    <div class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Rosmalen
                    </div>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#Menu">
                        <div class="accordion-body">
                                <p>De Kleine Elst: </p>
                                <p><a class="number" href="tel:+073 - 6456 620">073 - 6456 620</a></p>

                                <br>

                                <p>Meester Vriensstraat: </p>
                                <p> <a class="number" href="tel:+073 - 645 8000">073 - 645 8000</a></p>
                        </div>
                    </div>
                </li>

                <li class="accordion-items">
                    <!-- Cuijk knop (3) -->
                    <div class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Cuijk
                    </div>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#Menu">
                        <div class="accordion-body">
                                <p>Beversestraat: </p>
                                <p><a class="number" href="tel:+088 - 017 5555">088 - 017 5555</a></p>

                                <br>

                                <p>J. van Cuijkstraat: </p>
                                <p><a class="number" href="tel:+088 - 017 5555">088 - 017 5555</a></p>
                        </div>
                    </div>
                </li>

                <li class="accordion-items">
                    <!-- Oss knop (4) -->
                    <div class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Oss
                    </div>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#Menu">
                        <div class="accordion-body">
                                <p>Euterpelaan: </p>
                                <p><a class="number" href="tel:+088 - 017 5555">088 - 017 5555</a></p>

                                <br>

                                <p>Gasstraat Oost: </p>
                                <p><a class="number" href="tel:+088 - 017 5555">088 - 017 5555</a></p>

                                <br>

                                <p>Nelson Mandelablvd: </p>
                                <p><a class="number" href="tel:+088 - 017 5555">088 - 017 5555</a></p>
                        </div>
                    </div>
                </li>

                <li class="accordion-items">
                    <!-- Uden knop (5) -->
                    <div class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Uden
                    </div>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#Menu">
                        <div class="accordion-body">
                                <p>Udenseweg: </p>
                                <p><a class="number" href="tel:+088 - 017 5555">088 - 017 5555</a></p>
                        </div>
                    </div>
                </li>

                <li class="accordion-items">
                    <!-- Veghel knop (6) -->
                    <div class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Veghel
                    </div>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#Menu">
                        <div class="accordion-body">
                                <p>Muntelaar: </p>
                                <p><a class="number" href="tel:+088 - 017 5555">088 - 017 5555</a></p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <footer>
            <div class="rodebalkonderaan">
            </div>
        </footer>
    </body>
</html> 
