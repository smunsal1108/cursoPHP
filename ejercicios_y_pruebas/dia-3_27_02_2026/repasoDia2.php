<?php

$hola = "Hola";

$paises = [
    "españa" => "madrid",
    "francia" => "paris",
    "portugal" => "lisboa"

];

$paises2 = [
    "españa" => ["madrid","sevilla", "málaga"],
    "francia" => ["paris"],
    "portugal" => ["lisboa"]

];

// echo $paises["francia"];

// foreach ($paises as $pais => $capital) {
//     echo " ".$capital." ";    
// }

foreach ($paises2 as $pais => $capital) {
    foreach ($capital as $valor) {
        echo "<p>$pais: $valor</p>";
    }    
}

echo "<pre>";
print_r($paises2);
echo "</pre>";

echo "<pre>";
print_r($GLOBALS);
print_r($GLOBALS["hola"]);
echo "</pre>";

echo "<pre></pre>";
?>