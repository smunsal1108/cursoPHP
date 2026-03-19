<?php
class Persona {
    protected $nombre;
    private $apellidos;
}

class Alumno extends Persona {
    private $edad;
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

}
$persona = new Persona()
$alumno = new Alumno();

//echo $persona->nombre = "Casimiro";// Daría error al estar encapsulado.

$alumno->setNombre("Casimiro");

echo $alumno->getNombre();

?>