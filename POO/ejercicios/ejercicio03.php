<?php
/* Ejercicio 3: Encapsulamiento
1.	Haz que las propiedades de Coche sean private.
2.	Crea métodos getMarca(), getModelo(), getColor() y setColor($color).
3.	Prueba acceder y modificar las propiedades usando los métodos.
 */
class Coche {
    private $marca;
    private $modelo;
    private $color;

    public function __construct($marca, $modelo, $color) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
    }

    public function getMarca() { 
        return $this->marca; 
        }
    public function getModelo() { 
        return $this->modelo; 
        }
    public function getColor() { 
        return $this->color; 
        }

    public function setColor($color) {
        $this->color = $color;
    }

    public function mostrarCoche() {
        echo "<p>
        Marca: $this->marca, 
        Modelo: $this->modelo, 
        Color: $this->color
        </p>";
    }
}

$coche = new Coche("Seat", "Ibiza", "Blanco");
$coche->setColor("Rojo");
$coche->mostrarCoche();
?>