<?php
/* Ejercicio 1: Crear una clase simple
1.	Crea una clase Coche con estas propiedades: marca, modelo y color.
2.	Crea un método mostrarCoche() que imprima las propiedades del coche.
3.	Instancia un objeto miCoche y asigna valores a sus propiedades.
4.	Llama al método mostrarCoche().
 */
namespace Ejercicio1;
class Coche {
    public $marca;
    public $modelo;
    public $color;

    public function mostrarCoche() {
        echo "<p>
        Marca: $this->marca, 
        Modelo: $this->modelo, 
        Color: $this->color
        </p>";
    }
}

// Instancias
$miCoche = new Coche();
$miCoche->marca = "FIAT";
$miCoche->modelo = "Panda";
$miCoche->color = "Blanco";

$miCoche->mostrarCoche();
?>