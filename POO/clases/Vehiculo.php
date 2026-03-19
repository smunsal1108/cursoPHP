<?php
namespace MiProyecto; // cuando se usa Composer + PSR-4 autoload
class Vehiculo {
    private $marca;
    private $modelo;

    public function __construct($marca, $modelo){
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function info(){
        return "Vehículo: ".$this->marca." ".$this->modelo;
    }
}


?>