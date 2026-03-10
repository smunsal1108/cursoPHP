<?php
require_once "../libreriasCreadas/libreriaFicheros.php";
leer_pintar_JSON("../../JSON/acceso.json");

$cadena = file_get_contents("../../JSON/acceso.json");
$resultados = json_decode($cadena, true);

$indices = array_map(
    fn($registro) => $registro["id"],
    $resultados 
);

$nuevoUsuario = [
    "id" => max($indices)+1,
    "usuario" => "cynote",
    "clave" => "poli9",
];

array_push($resultados, $nuevoUsuario);
$jsonData = json_encode($resultados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
file_put_contents("../../JSON/acceso.json", $jsonData);
?>