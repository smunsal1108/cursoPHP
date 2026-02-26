<?php 

$otra_global = "Gustavo";

function prueba() {
    $var_local = "Casimiro y ".$otra_global;
    return $var_local;
}

$var_global = "hola";

echo "<p>$var_global".prueba()."</p>";

?>