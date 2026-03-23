<?php
/* Ejercicio 2: Constructor y método de cambio
1.	Modifica la clase Coche para que tenga un constructor que reciba marca, modelo y color.
2.	Añade un método pintar($nuevoColor) que cambie el color del coche.
3.	Crea un objeto y cambia el color usando el método.
 */
class Coche {
    public $marca;
    public $modelo;
    public $color;

    public function __construct($marca, $modelo, $color) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
    }

    public function pintar($nuevoColor) {
        $this->color = $nuevoColor;
    }

    public function mostrarCoche() {
        echo "<p>
        Marca: $this->marca, 
        Modelo: $this->modelo, 
        Color: $this->color
        </p>";
    }
}

$miCoche = new Coche("Ford", "Focus", "Gris plata");
$miCoche->pintar("Negro");
$miCoche->mostrarCoche();
?>