<?php
spl_autoload_register(
    function($clase){
        require_once "clases/".$clase.".php";
    }
);

// Crear objetos
$persona1 = new Persona("Francisco José", 32);
$vehiculo1 = new Vehiculo("SEAT", "Marbella");

// Usar métodos
echo $persona1->saludar();
echo "<hr>";
echo $vehiculo1->info();

?>