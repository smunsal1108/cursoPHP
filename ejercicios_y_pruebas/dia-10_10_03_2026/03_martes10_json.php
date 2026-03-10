<?php 
require_once "../libreriasCreadas/libreriaFicheros.php";

/* $cadena = @file_get_contents("../../JSON/acceso.json");
echo "<pre>";
print_r($cadena);
echo "</pre>";

echo "<hr>";

$resultado = json_decode($cadena, true);
echo "<pre>";
print_r($resultado);
echo "</pre>";

echo "<hr>";

pintar_tabla($resultado);

echo "<hr>";
$resultado = json_decode($cadena, false); //Array de objetos
echo "<pre>";
print_r($resultado);
echo "</pre>"; */


leer_pintar_JSON("../../JSON/banderas_azules.json");

?>