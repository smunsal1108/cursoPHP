<?php
require 'vendor/autoload.php';

// Usar namespaces
use MiProyecto\Persona;
use MiProyecto\Vehiculo;

// Crear objetos
$persona1 = new Persona("Juan", 30);
$vehiculo1 = new Vehiculo("Toyota", "Corolla");

// Usar métodos
echo $persona1->saludar();
echo "<hr>";
echo $vehiculo1->info();
?>