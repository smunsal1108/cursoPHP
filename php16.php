<?php
require_once "jueves26_externo.php";
mb_internal_encoding("UTF-8");
echo "<h2>Análisis y transformaciones de cadena</h2>";

$cadena = "¡La vida es bella!";

// --- Conteos usando expresiones regulares ---
$vocales = preg_match_all('/[aeiouáéíóú]/iu', $cadena);
$consonantes = preg_match_all('/[bcdfghjklmnpqrstvwxyz]/iu', $cadena);
$espacios = preg_match_all('/\s/', $cadena);
$digitos = preg_match_all('/\d/', $cadena);

// --- Transformaciones ---
$mayusculas = mb_strtoupper($cadena);
$minusculas = mb_strtolower($cadena);
$capitalizada = ucwords($cadena);

$invertida = invertir_cadena($cadena);
// --- Reemplazo de palabra ---
$cadenaReemplazada = str_replace("bella", "hermosa", $cadena);
$cadenaLimpia = "sará baras";

$conversion =[
    "á"=>"a",
    "à"=> "a",
    "é"=>"e",
    "í"=>"i",
    "ó"=>"o",
    "ú"=>"u",
    "ü"=>"u"
];

foreach($conversion as $conTilde => $sinTilde){
    $cadenaLimpia = str_replace($conTilde,$sinTilde, $cadenaLimpia);
};

// --- Palíndromo (ignorando espacios, acentos y signos) ---
$cadenaLimpia = preg_replace('/[^a-z]/iu', '', mb_strtolower($cadenaLimpia));


$esPalindromo = ($cadenaLimpia == invertir_cadena($cadenaLimpia)) ? true : false;

// --- Mostrar resultados ---
echo "<p>Cadena original: $cadena</p>";
echo "<p>Vocales: $vocales</p>";
echo "<p>Consonantes: $consonantes</p>";
echo "<p>Espacios: $espacios</p>";
echo "<p>Dígitos: $digitos</p>";

echo "<p>Mayúsculas: $mayusculas</p>";
echo "<p>Minúsculas: $minusculas</p>";
echo "<p>Capitalizada: $capitalizada</p>";
echo "<p>Cadena invertida1: $invertida</p>";
echo "<p>Cadena invertida2: ".invertir_cadena($cadena)."</p>";
echo "<p>Después del reemplazo: $cadenaReemplazada</p>";
echo "<p>Palíndromo: " . ($esPalindromo ? "Sí" : "No") . "</p>";

/* $prueba = "Holaáa";

$trans = Transliterator::create('NFD;[:Nonspacing Mark:] Remove; NFC');
$normalizado = $trans->transliterate($prueba);        // Quitar acentos
echo $normalizado; */
?>



