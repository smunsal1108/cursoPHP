<?php 

include_once "../dia-4_02_03_2026/02_lunes02_externo.php";

/*
Para hacer la función del palindromo haremos el siguiente flujo:
    1. Quitar los espacios en blanco
    2. Ponerlo todo en minuscula
    3. Hacer que se voltee la cadena
    4. Devolver la cadena
*/

function palindromo($cadena) {
    $cadenaLimpia = str_replace(" ", "", $cadena);
    $cadenaLimpia = mb_strtolower($cadenaLimpia);
    
    if (!preg_match('/[áéíóúÁÉÍÓÚñÑ]/u', $cadenaLimpia)) {
        $cadenaInvertida = strrev($cadenaLimpia);
    } else {
        $cadenaInvertida = invertir_cadena($cadenaLimpia);
    }

    if ($cadenaInvertida == $cadenaLimpia) {
        return "Es un palindromo";
    } else {
        return "NO es un palindromo";
    }

}

?>