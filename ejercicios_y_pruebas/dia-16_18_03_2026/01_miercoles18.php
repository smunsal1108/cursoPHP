<?php

namespace Ejercicios1;
class Persona {
    public $nombre = "Juan";
    private $apellidos = "García Pérez";
}

$persona1 = new Persona();

echo (gettype($persona1));

$persona1 -> nombre = "Casimiro"; //lo puedo modificar por que es public
//$persona1 -> apellidos = "Ynoteveo Pi"; //no podría ya que al ser privado o protected no puedo acceder desde fuera

echo $persona1 -> nombre;
echo "<hr>";

class Individuo {
    private $nombre = "Pepe";

    public function modifNombre($nombre) { //modificando la propiedad nombre
        $this -> nombre = $nombre;
    }
    
    public function mostrarNombre() { //capturando la propiedad nombre
        return $this -> nombre;
    }
}

$ind1 = new Individuo();

echo $ind1 -> mostrarNombre();
$ind1 -> modifNombre("Juan");
echo "<p>".$ind1 -> mostrarNombre()."</p>";

?>

<p><?=$ind1 -> mostrarNombre();?> en HTML</p>
