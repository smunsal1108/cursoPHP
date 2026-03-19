<?php
class ClasePadre {
    public $nombre;

    public function saludar() {
        return "Hola, soy " . $this->nombre;
    }
}

class ClaseHija extends ClasePadre {
    public function saludar() {
        return "¡Hola! Soy la versión hija de ". $this->nombre;
    }
}
$persona = new ClaseHija();
$persona->nombre = "Carolina";
echo $persona->saludar(); 



?>