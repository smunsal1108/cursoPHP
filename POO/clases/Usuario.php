<?php
namespace MiProyecto;
class Usuario {
    public $nombre;
    public $edad;
    public $email;
    public $telefono;

    public function __construct($nombre, $edad, $email, $telefono){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->email = $email;
        $this->telefono = $telefono;
    }

    public function presentarse(){
        return "Hola, soy $this->nombre, tengo $this->edad años, mi email es $this->email y mi teléfono $this->telefono.";
    }
}
?>