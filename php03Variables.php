<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP3 Variables</title>
</head>
<body>
<h1>Ejemplo PHP3</h1>
<h2>Suma de cadena y entero</h2>
    <? 
    $cadena="5"; //esto es una cadena
    $entero=3; //esto es un entero
    echo $cadena+$entero;  //8 
    ?>
<h2>Variables sensibles a mayúsculas y minúsculas</h2>
<?
    $mi_variable_bonita = "Tegucigalpa";
    $mi_Variable_Bonita = "Pernambuco";
    echo $mi_variable_bonita." y ".$mi_Variable_Bonita;
        // Para concatenar cadenas podemos usar el .(punto)
    echo "<hr>";
    echo "$mi_variable_bonita y $mi_Variable_Bonita"; //alternativa muy usada
?>

<h2>Variables numéricas</h2>
<?php
$entero=2002; // Números sin decimales
$real=3.0; // Números con o sin decimal
echo $entero / $real;
?>
<h2>Variables alfanuméricas</h2>
<?php
$cadena="Hola amigo";
$cp = "41003";
echo $cadena, " ", $cp; // tambien podemos usar la , en echo para concatenar aunque realmente no concatena, lo que hace es sacar por pantalla cada cadena
echo nl2br("\n"); // para que "entienda" el salto de línea
echo $cadena." ".$cp;  // . concatena
echo nl2br("\n");
echo "$cadena $cp";
echo nl2br("\n");
echo '$cadena $cp'; // ¡Sólo se pueden incluir variables en comillas dobles!
?>
<h2>Variables booleanas</h2>
<?php
$becado=true;
$activo = false;
echo "<p>Becado: $becado</p>" ; // devuelve 1 si es true
echo "<p>Activo: $activo</p>" ; // devuelve "" si es false
if (!$activo) { echo "FALSO";}
?>
<h2>Arrays</h2>
<?
$listado=["Federico", "Ana", "Casimiro",567];
echo $listado[0];
$ciudades=["Sevilla", "Málaga", "Cádiz"];
echo "<p>$ciudades[2]</p>";
$ciudades[1] = "Córdoba";
echo "<p>$ciudades[1]</p>";
//echo ($ciudades); // Da eror porque echo no puede convertir un array en string que es lo que sabe imprimir
print_r($ciudades); // print_r, sí lo puede imprimir
echo("<pre>");
print_r($ciudades);
echo("</pre>");
foreach ($ciudades as $ciudad) {
    echo "<p>$ciudad</p>";
}
?>
<h2>Comillas invertidas</h2>
<?
$salida = `dir`;
echo "<pre>$salida</pre>";
?>
</body>
</html>