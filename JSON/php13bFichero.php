<?php
$cadena = file_get_contents("fichero.txt");
echo "<pre>";
echo $cadena;
echo "</pre>";

/* echo "<p>Vamos a añadir texto al fichero</p>";
$añadido = PHP_EOL."Ahora mismo no se me ocurre nada.";
file_put_contents("fichero.txt", $añadido, FILE_APPEND); */

/* echo "<p>Vamos a sustituir el contenido del fichero</p>";
$añadido = "Ahora mismo no se me ocurre nada.";
file_put_contents("fichero.txt", $añadido);
 */

/* $cadena_sustituir = "Quijote";
$añadido = str_replace($cadena_sustituir, "Casimiro",$cadena);
file_put_contents("fichero.txt", $añadido); */

$cadena = file_get_contents("fichero.txt");
echo "<pre>";
echo $cadena;
echo "</pre>";
?>