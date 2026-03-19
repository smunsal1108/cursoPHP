<?php

/* spl_autoload_register(
    function($clase){
        require_once "../../POO/clases".$clase.".php";
    }    
); */

require_once "../../POO/vendor/autoload.php";

use MiProyecto\Persona;
use MiProyecto\Vehiculo;
use MiProyecto\Usuario;

$emp1 = new Usuario("pepe", 23, "ds@fd.es", "0083123021");

echo $emp1 -> presentarse();
echo "<hr>";
$coche = new Vehiculo("SEAT", "Marbella");
echo $coche -> info();

?>