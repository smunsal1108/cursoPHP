<?php

include "02_lunes02_externo.php";

// strtolower --> Devuelve toda la cadena en mínuscula
$cadena1 = "Buenos días, mi nombre es Saúl";
$cadenaMinuscula = strtolower($cadena1);
echo "<p>$cadenaMinuscula</p>";

echo "<hr>";

// strtoupper --> Devuelve toda la cadena en mayúscula (a excepción de los caracteres con tilde, que siguen estando en minúscula).
$cadena1 = "Buenos días, mi nombre es Saúl";
$cadenaMayuscula = strtoupper($cadena1);
echo "<p>$cadenaMayuscula</p>";

echo "<hr>";

$cadena1 = "Buenos días, mi nombre es Saúl"; 
$cadenaSegmento = substr($cadena1, 0); // El offset sirve para ignorar los caracteres que deseemos. Si especificamos solo el offset desde 0, nos devolverá toda la cadena, ya que no está ignorando ninguno.
echo "<p>$cadenaSegmento</p>";
$cadenaSegmento = substr($cadena1, 14); // Sin embargo, si especificamos solo el offset desde un valor diferente a 0 (como por ejemplo 14), nos devolverá la cadena desde la posición en adelante que hayamos especificado (ya que estaría ignorando desde 0 hasta 14).
echo "<p>$cadenaSegmento</p>";
$cadenaSegmento = substr($cadena1, 0, 4); // Si además del offset, especificamos el length, estaremos diciendo hasta donde queremos que extraiga
echo "<p>$cadenaSegmento</p>";

echo "<hr>";

$cadena1 = "Buenos días, mi nombre es Saúl y mi apellido es Muñoz";
$busqueda = "no";
$cadenaSegmentoCount = substr_count($cadena1, $busqueda); // Te duelve el número de veces que sale un caracter o valor (por ejemplo, si pongo la palabra "mi", me dice que aparece 2 veces)
echo "<p>$cadenaSegmentoCount</p>";

echo "<hr>";

$cadena1 = "Buenos días, mi nombre es Saúl"; //Esta frase tiene 32
$cadenaTamaño = strlen($cadena1); // Te duelve el número de caracteres que contiene la cadena
echo "<p>$cadenaTamaño</p>";

echo "<hr>";

$cadena1 = "Buenos días, mi nombre es Saúl";
$cadenaPosicion = strpos($cadena1, "a"); // Te indica en que posición se encuetra el caracter indicado (OJO, TE DICE EL PRIMER CARACTER QUE ENCUENTRE EN ESA POSICIÓN)
echo "<p>$cadenaPosicion</p>";

echo "<hr>";

$cadena1 = "Mi nombre es Saúl";
$cadenaToArray = mb_str_split($cadena1); // Convierte cada caracter de la cadena en un nuevo elemento de un array
echo"<pre>"; print_r ($cadenaToArray); echo"</pre>";

echo "<hr>";

$cadena1 = "Buenos días, mi nombre es Saúl";
$cadenaMayusculaVerdadero = mb_strtoupper($cadena1); // Hace lo mismo que el strtoupper, pero con la diferencia de que sí te coloca los caracteres especiales en mayusculas (como por ejemplo caracteres con tilde ---> ó)
echo "<p>$cadenaMayusculaVerdadero</p>";

echo "<hr>";

$cadena1 = "Buenos días, mi nombre es Saúl";
$nuevaCadena = str_replace("Saúl", "Mario", $cadena1, $contador); // Sirve para buscar un texto y cambiarlo por otro. Además, si añades una variable de $contador (o como quieras llamarla) te dice cuantos cambios se han hecho.
echo"<p>$nuevaCadena</p>";
echo"<p>Se hicieron $contador cambios</p>";

echo "<hr>";

$cadena1 = "Buenos días, mi nombre es Saúl";
$palindromo = "radar";
$cadenaInvertida = strrev(mb_strtolower($cadena1)); // Invierte una cadena. Sirve para palabras palindromas (OJO, no transforma los caracteres especiales como las tildes)
echo"<p>$cadenaInvertida</p>";

echo "<hr>";

$cadena1 = " Buenos días, mi nombre es Saúl ";
$cadenaSinEspaciosPrincipioFinal = trim($cadena1);
echo"<p>$cadenaSinEspaciosPrincipioFinal</p>";

echo "<hr>";

echo invertir_cadena($cadena1);

?>