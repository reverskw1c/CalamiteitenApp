<?php 
    /*locatie includes folder */ 
    $include_end = strpos($_SERVER['SCRIPT_NAME'], '/includes') + 16;  

    /*project folder */ 
    $doc_root = $_SERVER['SERVER_NAME']; 
    
    /*haalt dynamisch rootlocatie + project folder op met $doc_root. */  
    define("WWW_ROOT", $_SERVER['SERVER_NAME']); 

    require_once('functions.php'); 

    
?>