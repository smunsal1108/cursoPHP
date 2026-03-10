<?php 
require_once "../libreriasCreadas/libreriaFicheros.php";

/* $cadena = file_get_contents("../../JSON/datos.csv");

echo "<pre> $cadena </pre>";

$array = explode("\n", $cadena);

echo "<pre>";
print_r($array);
echo "</pre>";

echo "<hr>";

$contenidos = array_map(fn($linea) => explode(";", $linea), $array);

echo "<pre>";
print_r($contenidos);
echo "</pre>";

echo "<hr>";

$cabecera = array_shift($contenidos);
echo "<pre>";
print_r($cabecera);
echo "</pre>";

echo "<pre>";
print_r($contenidos);
echo "</pre>";

echo "<hr>";

$registros = array_map(fn($registro) => array_combine($cabecera, $registro), $contenidos);

echo "<pre>";
print_r($registros);
echo "</pre>";

echo "<hr>";

pintar_tabla($registros); */

leer_pintar_CSV("../../JSON/datos.csv");


?>