<?php

$otra_global = "Gustavo";
$var_global = "hola";
function prueba(){
    global $otra_global;
    $var_local="Casimiro y ".$otra_global;
    $var_local=$var_local." ".$GLOBALS["var_global"];
    return $var_local;
}




// echo "<p>$var_global $var_local</p>"; // da error porque no podemos usar una variable local fuera de su ámbito
echo "<p>$var_global ".prueba()."</p>"; // podemos usarla devolviéndola con un return


$array = [1,5,9];
$array = [
    0=>1,
    1=>5,
    2=>9
];

$edades =[
    "Casimiro"=>34,
    "Carlos"=>21,
    "Ana María" => 42,
    "Gustavo"=>22
];

echo $edades["Carlos"];

echo "<pre>";
print_r ($GLOBALS);
echo "</pre>";
echo "<pre>";
print_r ($_SERVER);
echo "</pre>";

?>