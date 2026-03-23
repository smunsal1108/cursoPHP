<?php
class Vehiculo {
    protected $velocidad = 0;

    public function acelerar($cantidad = 10) {
        $this->velocidad += $cantidad;
    }

    public function getVelocidad() {
        return $this->velocidad;
    }
}
?>