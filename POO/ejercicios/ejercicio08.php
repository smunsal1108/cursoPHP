<?php
/* Ejercicio 8: Leer JSON y mostrar objetos
Instrucciones:
1.	Crea un método estático mostrarCochesDesdeJSON($archivo) en la clase Coche.
2.	Este método leerá coches.json, convertirá cada elemento en un objeto Coche y mostrará la información con mostrarCoche().
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

    public function mostrarCoche() {
        echo "<p>
        Marca: $this->marca, 
        Modelo: $this->modelo, 
        Color: $this->color
        </p>";
    }

    public static function mostrarCochesDesdeJSON($archivo) {
        $coches = json_decode(file_get_contents($archivo), true);

        foreach ($coches as $coche) {
            $objeto = new Coche(
                $coche['marca'], 
                $coche['modelo'], 
                $coche['color']
                );
            $objeto->mostrarCoche();
        }
    }
}

Coche::mostrarCochesDesdeJSON("coches.json");
?>