<?php
class Persona {
    public $nombre = "Juan";
    private $apellidos = "García Pérez";
}

$persona1 = new Persona();
$persona2 = new Persona();

echo (gettype($persona1));

$persona1 -> nombre = "Casimiro"; // lo puedo cambiar porque es public
//$persona2 -> apellidos = "Ynoteveo Pi"; // hay que comentarlo porque si no daría error
echo $persona1 -> nombre;
echo "<hr>";

class Individuo {
    private $nombre ="Juan";
    
    public function modifNombre($nombre){ // modificando la propiedad nombre
        $this -> nombre = $nombre;
    }
    public function mostrarNombre(){ // capturando la propiedad nombre
        return $this -> nombre;
    }
}

$ind1 = new Individuo();

echo $ind1 -> mostrarNombre();
$ind1 -> modifNombre("Casimiro");

echo "<p>".$ind1 -> mostrarNombre()."</p>";


?>

<p><?=$ind1 -> mostrarNombre()?> en HTML directamente</p>