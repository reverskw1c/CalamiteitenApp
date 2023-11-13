<?php 

//functie url_for= functie om pad te vinden/genereren. Deze wordt gedefinieerd met een string (bijv. $script_path)
// Dit echo je in php om dynamisch een pad te vinden, voor bijv. stylesheets. 
// bijv. href="<?php echo url_for('/css/stylesheets.css) ? >"/>

function url_for($script_path) {
    // add the leading '/' if not present 
    if($script_path[0] != '/') {
        $script_path = "/" . $script_path; 
}
//pad wordt gegenereerd/gedefinieerd met rootlocatie + pad van script achter '/' (dynamisch). 
return $_SERVER['DOCUMENT_ROOT'] . $script_path;  
}
?>