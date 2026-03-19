<?php
namespace MiProyecto; // cuando se usa Composer + PSR-4 autoload
class Persona {
    private $nombre;
    private $edad;

    public function __construct($nombre, $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function saludar(){
        return "Hola, mi nombre es ".$this->nombre." y tengo ".$this->edad." años.";
    }
}

?>