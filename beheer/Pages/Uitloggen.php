<?php
/**
 * User: Serezo Popelier
 * Date: 27-11-2023
 * File: CalamiteitenApp
 */
?>
<?php
//start de session
session_start();

// Sessie vernietigen en alle sessie variabelen wissen
session_destroy();

// Doorverwijzen naar de indexpagina
header("../Pages/inloggen.php");
exit();
?>
