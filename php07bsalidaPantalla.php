<?php
$empleado = [
    "nombre"=> "Federico",
    "apellidos"=> "García Pérez",
    "edad"=> 32
];

$ciudad = "Sevilla";
#Concatenación clásica
echo "<p>";
echo $GLOBALS["ciudad"] . " <----";
echo "</p>";
#Interpolación usando {} (sin concatenar) PARA PODER combinar literales con variables ARRAYS y otros
echo "<p>{$GLOBALS['ciudad']} </p>";
echo "<p>{$empleado["apellidos"]} </p>";

#echo con varios parámetros (sin puntos)
echo $GLOBALS["ciudad"], " <----";
# Uso de printf
printf("<p>%s <----</p>", $GLOBALS["ciudad"]);

?>