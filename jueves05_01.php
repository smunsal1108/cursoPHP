<?php
$cadena = "¡Los jueves 34y los viernes van después del miércoles!";
mb_internal_encoding("UTF-8");
//$cadena = preg_replace(, , $cadena), 

$cadena = str_replace("á","a",$cadena);
$numVocales = preg_match_all("/[aeiouáéíóúAEIOUÁÉÍÓÚ]/iu", $cadena);
echo "<p>Vocales: $numVocales</p>";
$numExcla = preg_match_all("/[¡¿!?]/iu", $cadena);
echo "<p>¡¿!?: $numExcla</p>";
$numDigitos = preg_match_all("/[0-9]/iu", $cadena);
echo "<p>Dígitos: $numDigitos</p>";
$numLetras = preg_match_all("/[a-zA-ZáéíóúAEIOUÁÉÍÓÚ]/iu", $cadena);
echo "<p>Dígitos: $numLetras</p>";
$consonantes = preg_match_all('/[bcdfghjklmnpqrstvwxyz]/iu', $cadena);
echo "<p>Consonantes: $consonantes</p>";
$todosMenosNumeros = preg_match_all('/[^0-9]/iu', $cadena);
?>