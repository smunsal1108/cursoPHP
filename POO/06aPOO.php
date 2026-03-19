<?php
class ClasePadre {
    public $nombre;

    public function saludar() {
        return "<p>Hola, soy " . $this->nombre."</p>";
    }
}

class ClaseHija extends ClasePadre {
    public function despedirse() {
        return "<p>". $this->nombre." se va</p>";
    }
}

$persona = new ClaseHija();
$persona->nombre = "Casimiro";

echo $persona->saludar();      // desde una instancia de la hija puedo usar método del padre (si es public o protected)
echo $persona->despedirse();   

?>