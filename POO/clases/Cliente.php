<?php
namespace MiProyecto;
class Cliente {
    public $nombre;
    public $edad;
    public $email;
    public $telefono;

    public function __construct($datos){
        $this->nombre = htmlspecialchars(trim($datos["nombre"]));
        $this->edad = htmlspecialchars(trim($datos["edad"]));
        $this->email = htmlspecialchars(trim($datos["email"]));
        $this->telefono = htmlspecialchars(trim($datos["telefono"]));
    }

    public function presentarse(){
        return "Hola, soy $this->nombre, tengo $this->edad años, mi email es $this->email y mi teléfono $this->telefono.";
    }

    public function controlNombre(){
        if (strlen($this->nombre) <= 15 && !empty($this->nombre) && preg_match('/^[A-Za-záéíóúÁÉÍÓÚñÑ ]+$/ui', $this->nombre)) return true;
        else return false;
    }
}
?>