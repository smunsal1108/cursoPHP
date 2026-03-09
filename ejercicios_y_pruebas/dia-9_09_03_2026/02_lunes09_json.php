<?php 

$cadena = file_get_contents("../../JSON/fichero.txt");
echo $cadena;

echo "<hr>";
echo "<pre> $cadena </pre>";
echo "<hr>";

$cadena = file_get_contents("codigo.php");
echo htmlspecialchars($cadena);

echo "<hr>";
echo "<pre>".htmlspecialchars($cadena)."</pre>";
echo "<hr>";

$cadena = file_get_contents("../../JSON/datos.csv");
echo $cadena;

echo "<hr>";
echo "<pre> $cadena </pre>";
echo "<hr>";


?>