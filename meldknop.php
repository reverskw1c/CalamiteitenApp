<!DOCTYPE html>
   <html lang="nl"> 
   <!-- Header --> 

    <?php
    //Header
    include("includes/header.php");
    ?>
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
                    <div class="accordion-buttons" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        s'Hertogenbosch
                    </div>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion-menu">
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
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion-menu">
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
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion-menu">
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
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordion-menu">
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
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordion-menu">
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
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordion-menu">
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
