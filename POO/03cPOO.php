<?php
echo "<h1>Simulando la sobrecarga de constructores</h1>";
echo "<h2>Alternativa usando parámetros en el constructor como ya hemos visto</h2>";
class Personas {
    private $nombre;
    private $edad;

    public function __construct($nombre="Desconocido", $edad=0) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    public function mostrar() {
       echo "<p>Nombre: $this->nombre, Edad: $this->edad</p>";
   }
}

$personas = [new Personas("Ana", 25),new Personas("Luis"),new Personas()];

foreach ($personas as $persona){
    $persona -> mostrar();
}
echo "<h2>Usando <code>func_get_args()</code> y <code>func_num_args()</code></h2>";
class Individuos {
    private $nombre;
    private $edad;

    public function __construct() {
        $args = func_get_args();
        $num = func_num_args();

        if ($num == 2) {
            $this->nombre = $args[0];
            $this->edad = $args[1];
        } elseif ($num == 1) {
            $this->nombre = $args[0];
            $this->edad = 0;
        } else {
            $this->nombre = "Desconocido";
            $this->edad = 0;
        }
    }
    public function mostrar() {
       echo "<p>Nombre: $this->nombre, Edad: $this->edad</p>";
   }
}
$individuos = [new Individuos("Ana", 25),new Individuos("Luis"),new Individuos()];

foreach ($individuos as $individuo){
    $individuo -> mostrar();
}
?>