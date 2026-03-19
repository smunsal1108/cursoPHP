<?php

class Empleado {
    public $nombre;
    private $edad;
    protected $ciudad;

    public function __construct($nombre, $edad, $ciudad="No indicada") {
        $this -> nombre = $nombre;
        $this -> edad = $edad;
        $this -> ciudad = $ciudad;
    }

    public function getEdad() {
        return $this -> edad;
    }
    
    
    public function getDatos() {
        return [
            "nombre"=>$this->nombre,
            "edad"=>$this->edad,
            "ciudad"=>$this->ciudad,
        ];
    }

    public function setEdad($edad) {
        $this -> edad = $edad;
    }
    
    public function setDatos($datos) {
        $this -> nombre = $datos["nombre"];
        $this -> edad = $datos["edad"];
        $this -> ciudad = $datos["ciudad"];
    }

    public function pintarDatos(){
        //$datos = $this->getDatos();
        echo "<table>";
        echo "<tr><th>Nombre</th><th>Edad</th><th>Ciudad</th></tr>";
        echo "<td>".$this->nombre."</td>";
        echo "<td>".$this->edad."</td>";
        echo "<td>".$this->ciudad."</td>";
        echo"</table>";
    }

}

class claseHija extends Empleado{
    private $puesto;
    /* public function getEdad() {
        return $this -> edad;           NO SE PUEDE PORQUE ES PRIVADO DEL PADRE
    } */
    
    public function getCiudad() {
        return $this -> ciudad;
    }
}

$hija = new claseHija("Carlos", 56, "Logroño", "Técnico");
echo $hija -> getCiudad();
echo $hija -> getEdad(); //error porque es privada del padre


$empleado1 = new Empleado("Casimiro", 32);
$empleado1 -> nombre = "Juan";
echo $empleado1 -> nombre;

echo "<p>".$empleado1 -> getEdad()."</p>";

echo "<pre>";
print_r($empleado1 -> getDatos());
echo "</pre>";

echo "<hr>";

$nuevosDatos = [
    "nombre"=>"Federico",
    "edad"=>21,
    "ciudad"=>"Sevilla",
];

$empleado1 -> setDatos($nuevosDatos);
echo "<pre>";
print_r($empleado1 -> getDatos());
echo "</pre>";

echo "<hr>";

echo $empleado1 -> pintarDatos();

?>