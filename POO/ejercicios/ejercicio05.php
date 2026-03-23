<?php
/* Ejercicio 5: Polimorfismo
Instrucciones:
1.	Crea otra clase Bicicleta que también herede de Vehiculo.
2.	Sobrescribe el método acelerar() para que la bicicleta solo aumente 2 km/h por llamada, sin importar el parámetro.
3.	Instancia ambos objetos y llama al método acelerar() para cada uno, comparando el resultado. */
namespace Ejercicio5;
class Vehiculo {
    protected $velocidad = 0;

    public function acelerar($cantidad) {
        $this->velocidad += $cantidad;
        echo "<p>Velocidad: $this->velocidad km/h</p>";
    }
}

class Coche extends Vehiculo {}

class Bicicleta extends Vehiculo {
    public function acelerar($cantidad = 0) {
        $this->velocidad += 2;
        echo "<p>Velocidad bicicleta: $this->velocidad km/h</p>";
    }

    public function pintar() {

    }
}

$coche = new Coche();
$bici = new Bicicleta();

$coche->acelerar(20);
$bici->acelerar();
?>