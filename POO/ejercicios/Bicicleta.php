<?php

class Bicicleta extends Vehiculo {
    private $tipo;

    public function __construct($tipo) {
        $this->tipo = $tipo;
    }

    public function acelerar($cantidad = 0) {
        $this->velocidad += 2;
    }

    public function mostrar() {
        echo "🚲 Bicicleta: $this->tipo - Velocidad: ".$this->getVelocidad()."<br>";
    }

    public function toArray() {
        return [
            "tipo" => "bicicleta",
            "tipo_bici" => $this->tipo
        ];
    }
}



?>