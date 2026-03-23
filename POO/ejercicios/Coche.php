<?php
class Coche extends Vehiculo {
    private $marca, $modelo, $color, $combustible, $precio;

    public function __construct($m, $mo, $c, $co, $p) {
        $this->marca = $m;
        $this->modelo = $mo;
        $this->color = $c;
        $this->combustible = $co;
        $this->precio = $p;
    }

    public function mostrar() {
        echo "🚗 Coche: $this->marca $this->modelo - $this->color - $this->combustible - $this->precio € - Velocidad: ".$this->getVelocidad()."<br>";
    }

    public function toArray() {
        return [
            "tipo" => "coche",
            "marca" => $this->marca,
            "modelo" => $this->modelo,
            "color" => $this->color,
            "combustible" => $this->combustible,
            "precio" => $this->precio
        ];
    }
}

?>