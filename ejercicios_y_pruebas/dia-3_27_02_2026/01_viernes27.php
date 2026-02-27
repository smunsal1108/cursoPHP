<?php 
/* Orden de relevancia de los operadores

1. (**)
2. (%)  
3. (* o /)
4. (+ o -)


Operadores incrementos / decremento
*/

$dni = 34054262;
$numLetra = $dni % 23;
$letras = "TRWAGMYFPDXBNJZSQVHLCKE";

$dato = 314;
//$valor = 3;
// echo $dato > 50 ? "Número alto" : "Número bajo";
// echo $valor ?? "No existe";

// echo 2==2 && 6<=9," | ";

echo "<hr>";
print_r($dato);
echo "<hr>";
var_dump($dato);
echo "<hr>";
print_r($letras);
echo "<hr>";
var_dump($letras);
$lista = [2, "hola", true, 45.90];
var_dump($lista);

?>