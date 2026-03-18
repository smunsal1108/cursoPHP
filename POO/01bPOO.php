<?php
class Personas {
    private $nombre;
    public function setNombre($nombre){
        $this->nombre = $nombre;
        }
        public function getNombre(){
            return $this->nombre;
        }
    }

$persona = new Personas();

//echo $persona->nombre = "Casimiro";// Daría error al estar encapsulado.


$persona->setNombre("Casimiro");
echo $persona->getNombre();


?>