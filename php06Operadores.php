<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP6 Operadores</title>
</head>
<body>
<?php
$dato1 = 23;
$dato2 = 13;
$dato3 = 3;
$dato4 = "Crisóstomo de luna";
echo $dato5 = ($dato1+10-$dato2)* $dato3, " | ";
echo ($dato3**2)/4, " | ";
echo $dato1 % $dato3, " | ";
$beca=false;
$x = 3;
$x++; // x vale 4 es lo mismo que x=x+1;
$x +=6; # $x valdrá 10, suma  6 a 4 inicial y luego asigna

echo "$x | ";
$cadena = "Hola ";
$cadena .= "mundo"; # $cadena ahora vale "hola mundo"
echo "$cadena | ";
/* La coma se usa para separar parámetros en ciertas funciones o instrucciones, como echo o print, dando un efecto de concatenación */
echo 2==2 && 6<=9," | "; // si las dos son ciertas devuelve 1, si no, nada
echo 2==2 || 96<=9," | "; // si una de las dos es cierta devuelve 1, si no, nada
echo 2==2 xor 6<=9," | "; // Dejará un  hueco porque vale false
if  (1==true) 
    echo "1 y true son iguales | ";

if (1!==true) {
    echo "1 y true no son idénticos | ";
}
echo "<hr><p>El operador ?</p>";
$numero = 1;
echo ($numero > 6) ?  'mayor que 6 |' : 'menor o igual que 6 |'; 
// operacion_a_evaluar ? lo que hará si TRUE : lo que hará si FALSE

echo !$beca || $dato1>34 ? "tiene beca" : "no tiene beca",  " |"; // La coma se usa para separar parámetros en ciertas funciones o instrucciones, como echo o print.

echo "<hr><p>El operador ??</p>";
$variable = "Casimiro"; 
echo $variable ?? 'No está'; // Se mostrará el mensaje "No existe" si es null o el valor de la propia variable

echo "<hr><p>Acumuladores</p>"; 

$i=1;
$i++; //2
echo "$i | ";
$x = 4;
echo $x++." | ".$x." | ";

$p = 72;
echo ++$p;


?>
</body>
</html>