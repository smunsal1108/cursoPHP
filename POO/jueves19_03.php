<?php
/* spl_autoload_register(
   function($clase){
    require_once "clases/".$clase.".php";
    }
);
 */
require 'vendor/autoload.php';

// Usar namespaces
use MiProyecto\Persona;
use MiProyecto\Vehiculo;
use MiProyecto\Usuario;


$empl = new Usuario("pepe", 23,"ds@fd.es", "098890098");
echo $empl->presentarse();
echo "<hr>";
$coche = new Vehiculo("SEAT", "Marbella");
echo $coche->info();

?>