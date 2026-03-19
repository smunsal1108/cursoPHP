<?php
class ClasePadre {
    public $nombre;

    public function saludar() {
        return "Hola, soy " . $this->nombre;
    }
}

class ClaseHija extends ClasePadre {
    public function saludar() {
        return parent::saludar() . " y soy un método en una clase hija que emplea el método del padre.";
    }
}

$persona1 = new ClaseHija();
$persona1->nombre = "Cristina";
echo $persona1->saludar(); 
echo "<hr>";
$persona2 = new ClasePadre();
$persona2->nombre = "Casimiro";
echo $persona2->saludar(); 
?>