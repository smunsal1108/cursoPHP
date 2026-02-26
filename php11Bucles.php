<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            display:flex;
        }
        table, tr, td {
            border:2px red solid;
        }
        table {
            border-collapse: collapse;
            margin:5px;
        }
    </style>
    <title>PHP11 Bucles</title>
</head>
<body>
<?php
echo "<h1>Bucles</h1>";
/* for*/
$array=["h","k","l","p","j","a"];
echo "<table><caption>for</caption>";
for ($i = 0; $i < count($array); $i++) {
    echo "<tr><td>$i: Contenido $array[$i]</td></tr>";
}
echo"</table>";

/* while*/
echo "<table><caption>while</caption>";
$i = 0;
while ($i < count($array)) {
    echo "<tr><td>$i: Contenido $array[$i]</td></tr>";
    $i++;
}
echo"</table>";

/* do..while*/
echo "<table><caption>do..while</caption>";
$i = 0;
do {
    echo "<tr><td>$i: Contenido $array[$i]</td></tr>";
    $i++;
} while ($i < count($array));
echo"</table>";

/* foreach, la forma compacta de recorrer arrays*/
$matriz = [0, 5, 34, 167, 324];
echo "<table><caption>foreach <strong>1</strong></caption>";
foreach ($matriz as $valor) { // $valor es el contenido
    echo "<tr><td class='texto'>Contenido $valor</td></tr>";
}
echo"</table>";
/* si necesitamos clave, valor */

echo "<table><caption>foreach <strong>2</strong></caption>";
foreach ($matriz as $i => $valor) { // $valor es el contenido
    echo "<tr><td class='texto'>posición $i $valor</td></tr>";
}
echo"</table>";


$matriz = ["red" => "rojo", "green" => "verde", "blue" => "azul"];
echo "<table><caption>foreach <strong>3</strong</caption>";
foreach ($matriz as $i => $x) {//$i es el índice y $x es el contenido en cada elemento a recorrer
    print "<tr><td>$i </td><td>contenido $x</td></tr>";
}
echo"</table>";

$matriz = ["Antonio" => 150,  "Ana" => 200, "Casimiro" =>25];
echo "<table><caption>foreach <strong>4</strong</caption>";
echo "<tr><th>Nombre</th><th>Puntos</th><th>Distancia</th></tr>";
arsort($matriz);
// ["Ana" => 200, "Antonio" => 150, "Casimiro" =>25];
foreach ($matriz as $indice => $valor) {
    $diferencia = max($matriz)-$valor;
    echo "<tr><td>$indice</td><td>$valor</td><td>$diferencia</td></tr>";
}
echo"</table>";
?> 
</body>
</html>