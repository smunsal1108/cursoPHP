<?php 

function invertir_cadena($cadena) {
    $array = mb_str_split($cadena);
    $array_new = array_reverse($array);
    return implode("",$array_new);
}

?>