<?php
/* Ejercicio 4: Herencia
Instrucciones:
1.	Crea una clase Vehiculo con propiedad velocidad y método acelerar().
2.	Haz que Coche herede de Vehiculo.
3.	Crea un objeto miCoche y llama a acelerar().
 */
namespace Ejercicio2;
class Vehiculo {
    protected $velocidad = 0;

    public function acelerar($cantidad = 10) {
        $this->velocidad += $cantidad;
        echo "<p>Velocidad: $this->velocidad km/h</p>";
    }
}

class Coche extends Vehiculo {
    private $color;
    public function setColor() {
        $this -> color;
    }
    public function getColor() {
        return $this -> color;
    }
}

$miCoche = new Coche();
$miCoche->acelerar(20);


?>