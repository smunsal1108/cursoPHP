<?php 
/* Nos aseguramos que en php.ini no está comentado extension=intl (tras cambiarlo reinicia el servicio Apache)
*/
    var_dump(extension_loaded('intl'));
    // https://www.php.net/manual/en/function.grapheme-extract.php
?>