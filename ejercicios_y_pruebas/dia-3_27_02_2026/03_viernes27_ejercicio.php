<?php 
$lista1 = [10,7,5,4,2,2];
$lista2 = [8,4,7,1,10];

// ¿Cómo genero otro array con los que no se repiten en ninguno de los dos quitando duplicados?

$array1 = array_unique(array_diff($lista1, $lista2));
$array2 = array_unique(array_diff($lista2, $lista1));

$arrayFinal = array_merge($array1, $array2);

print "<pre>"; print_r($arrayFinal); print "</pre>";

// $resultado = [5,2,8,1];

?>