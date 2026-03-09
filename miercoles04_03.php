<?php
require_once "jueves26_externo.php";
$cadena="Ojo rojo";

echo "<p>".palindromo($cadena)."</p>";

//Elementos con más de una aparición
$valores = [2, 5, 2, 7, 5, 9, 5, 2];
$repetidos = array_count_values($valores);
print_r($repetidos);
$filtrados= array_filter($repetidos, fn($valor)=>$valor>1);
print_r($filtrados);
$solucion = array_keys($filtrados);
echo "<pre>";print_r($solucion);echo "</pre>";

// Intercambiar claves y valores
// Resultado esperado: [25 => ["Juan", "Luis"], 30 => ["Ana"]]
$personas = ["Juan" => 25,"Ana" => 30,"Luis" => 25];

$solucion=[];
foreach ($personas as $clave => $valor){
    $solucion[$valor][]=$clave;
    //echo "<pre>";print_r($solucion);echo "</pre>";  
}
echo "<pre>";print_r($solucion);echo "</pre>";

//
$nombres = ["Juan", "Ana", "Pedro"];
$edades = [25, 30, 22];

$solucion = array_combine($nombres, $edades);
echo "<pre>";print_r($solucion);echo "</pre>";
$nombres = ["Juan"];
$edades = [25,30];
$longMax = max(count($nombres), count($edades));
$nombres = array_pad($nombres, $longMax, "NM");
$edades = array_pad($edades, $longMax, null);


$solucion = array_combine($nombres, $edades);
echo "<pre>";print_r($solucion);echo "</pre>";
?>