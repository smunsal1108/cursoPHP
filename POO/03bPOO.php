<?php
class Persona {
   public $edad;
   protected $altura;
   private $nombre;
   public function __construct($nombre="Desconocido", $edad=0, $altura=0) {
       $this->nombre = $nombre;
       $this->edad = $edad;
       $this->altura = $altura;
   }
   public function mostrar() {
       echo "<p>Nombre: $this->nombre, Edad: $this->edad, Altura: $this->altura</p>";
   }
}

$persona1 = new Persona("Luis", 42, 1.83);
$persona2 = new Persona(); // usa valores por defecto

$persona1->mostrar(); // Nombre: Luis, Edad: 42, Altura: 1.83

$persona2->mostrar(); // Nombre: Desconocido, Edad: 0, Altura: 0
echo "<hr>";
$personas = [new Persona("Luis", 42, 1.83), new Persona()]; // array de objetos
foreach ($personas as $persona){
    $persona -> mostrar();
}
?>