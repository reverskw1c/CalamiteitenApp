<?php 
    /*locatie includes folder */ 
    $include_end = strpos($_SERVER['SCRIPT_NAME'], '/includes') + 16; 

    /*project folder */ 
    $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $include_end); 
    
    /*haalt dynamisch rootlocatie + project folder op met $doc_root. */  
    define("WWW_ROOT", $doc_root); 

    require_once('functions.php'); 
?>