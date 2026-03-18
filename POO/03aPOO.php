<?php
class Personas {
    public $edad;
    protected $altura;
    private $nombre;

    public function __construct($nombre, $edad, $altura) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->altura = $altura;
    }
    public function mostrar(){
        echo "<ul>";
        echo "<li>Nombre: $this->nombre</li>"; 
        echo "<li>Edad: $this->edad</li>"; 
        echo "<li>Altura: $this->altura</li>";
        echo "</ul>";
    }
}

$persona1 = new Personas("Casimiro", 43, 1.73);
$persona1 -> mostrar();
?>