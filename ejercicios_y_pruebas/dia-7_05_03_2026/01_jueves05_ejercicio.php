<?php
// Crea un programa en PHP que tenga las siguientes funcionalidades:
/* 1. Reciba una cadena de texto. 
   2. Cuente cuántas vocales, consonantes, dígitos y espacios contiene.
   3. Muestre la cadena en mayúsculas, minúsculas y con la primera letra de cada palabra en
      mayúscula.
   4. Invierta la cadena.
   5. Reemplace una palabra específica por otra.
*/

$cadena = "Los jueves y viernes van después de los miércoles";

//$cadena = preg_replace("/[áéíóúÁÉÍÓÚ]/", $cadena);

$numVocales = preg_match_all("/[aeiouáéíóúAEIOUÁÉÍÓÚ]/iu", $cadena); //Patrón con vocales
echo "<p>Vocales: $numVocales</p>";

$numExcla = preg_match_all("/[¡¿!?]/iu", $cadena);
echo "<p>Exclamaciones o signos de pregunta: $numExcla</p>";

$numDigitos = preg_match_all("/[0-9]/iu", $cadena);
echo "<p>Digitos: $numDigitos</p>";

$numLetras = preg_match_all("/[a-zA-ZáéíóúAEIOUÁÉÍÓÚ]/iu", $cadena);
echo "<p>Digitos: $numLetras</p>";

$consonantes = preg_match_all('/[bcdfghjklmnpqrstvwxyz]/iu', $cadena);
echo "<p>Digitos: $consonantes</p>";



?>