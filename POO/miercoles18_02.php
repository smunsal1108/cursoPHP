<?php
class Persona {
    private $nombre;
    private $apellidos;
    private $edad;
    private $desempleado;

    public function __construct($nombre, $apellidos, $edad, $desempleado = true){
        $this -> nombre = $nombre;
        $this -> apellidos = $apellidos;
        $this -> edad = $edad;
        $this -> desempleado = $desempleado;
    }
    public function mostrarDatos(){
        echo "<ul>";
        echo "<li>Nombre: ".$this->nombre."</li>";
        echo "<li>Apellidos: ".$this->apellidos."</li>";
        echo "<li>Edad: ".$this->edad."</li>";
        if ($this->desempleado) echo "<li>Desempleado</li>";
        else echo "<li>Trabajando</li>";
        echo "</ul>";
    }
    public function getDatos(){
        return [
            "nombre" => $this->nombre,
            "apellidos" => $this->apellidos,
            "edad" => $this->edad,
            "desempleado" => $this->desempleado
        ];
    }
    public function setDatos($nombre, $apellidos, $edad=0, $desempleado = true){
        $this -> nombre = $nombre;
        $this -> apellidos = $apellidos;
        $this -> edad = $edad;
        $this -> desempleado = $desempleado;
    }
}

$persona1 = new Persona("Casimiro", "Ynoteveo Pi", 43);

$persona1 -> mostrarDatos();

print_r($persona1->getDatos());
$persona1 -> setDatos("Rosario", "López Gómez", 32, false);
$persona1 -> mostrarDatos();
?>