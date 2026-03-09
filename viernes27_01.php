<?php
$valor2 = 3**4+2*6/2-1/4;
$dni=34054262;
$numLetra = $dni % 23;

$letras = "TRWAGMYFPDXBNJZSQVHLCKE";
echo "$dni$letras[$numLetra]";


$dato = 314;
//$valor =3;
echo $dato>50 ? "Número alto" : "Número bajo";
$valor ?? 0;

echo 2==2 && 6<=9," | ";
echo "<hr>";
print_r($dato);
var_dump($dato);
echo "<hr>";
print_r($letras);
var_dump($letras);
$lista =[2, "hola", true, 45.90];
echo "<hr>";
echo "<pre>";
print_r($lista);
echo "</pre>";
echo "<pre>";
var_dump($lista);
echo "</pre>";
?>