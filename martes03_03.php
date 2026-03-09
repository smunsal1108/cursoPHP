<?php
$edades = [23,12,67,17,18,40];

/* $mayores =[];

foreach($edades as $edad) {
    if ($edad>=18){
        $mayores[]=$edad;
    }
} */

//$mayores = array_filter($edades, function ($edad){  return $edad>=18;});

$mayores = array_filter($edades, fn($edad)=>$edad>=18);

echo "<pre>";
print_r($mayores);
echo "</pre>";

$capitales = ["madrid","paris","lisboa","roma", "munich"];

$filtrados = array_filter($capitales,fn($capital)=>strlen($capital)>=6);
echo "<pre>";
print_r($filtrados);
echo "</pre>";

$filtrados = array_filter($capitales,fn($capital)=>substr($capital,0,1)=="m");
echo "<pre>";
print_r($filtrados);
echo "</pre>";

$codigos = ["41005", "41012", "32001", "28010"];

$prov = array_map(fn($codigo)=>substr($codigo,0,2), $codigos);
echo "<pre>";
print_r($prov);
echo "</pre>";

$numeros = [23,45,1,34,12];

$cubos = array_map(
    fn($numero)=>$numero**3, 
    $numeros
);

echo "<pre>";
print_r($cubos);
echo "</pre>";

$cubos = array_map(
    fn($numero)=>$numero**3, 
    $numeros
);

?>