<?php
$array = [23, 56, 23, "hola", false];
$array = [
    0=>23,
    11=>56,
    2=>23,
    3=>"hola",
    7=>false
];
echo $array[11];
$paises  = [
    "españa"=> ["madrid","sevilla", "málaga"],
    "francia"=> ["parís"],
    "portugal"=> ["lisboa"]
];

//echo $paises["francia"];
$nombre = "casimiro";
foreach ($paises as $pais => $ciudades){
    foreach ($ciudades as $ciudad){
        echo "<p>$pais: $ciudad</p>";
    }
    
}

echo "<pre>";
print_r($paises);
echo "</pre>";
echo "<pre>";
print_r($GLOBALS);
echo "</pre>";
echo $GLOBALS["nombre"];
global $nombre;

?>