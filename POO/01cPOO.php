<?php
class Personas {
    protected $nombre;
}

class Alumno extends Personas {

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

}

$alumno = new Alumno();

//echo $persona->nombre = "Casimiro";// Daría error al estar encapsulado.

$alumno->setNombre("Casimiro");

echo $alumno->getNombre();

?>