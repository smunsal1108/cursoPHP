<?php
class Empleado {
    public $nombre;
    private $edad;
    protected $ciudad;

    public function __construct($nombre, $edad, $ciudad="no indicada"){
        $this -> nombre = $nombre;
        $this -> edad = $edad;
        $this -> ciudad = $ciudad;
    }

    public function getNombre(){
        return $this->nombre;
    }

    private function getDatos() {
        return [
            "nombre"=>$this->nombre,
            "edad"=>$this->edad,
            "ciudad"=>$this->ciudad
        ];
    }

    public function setDatos($datos){
        $this -> nombre = $datos["nombre"];
        $this -> edad = $datos["edad"];
        $this -> ciudad = $datos["ciudad"];
    }

    public function pintarDatos(){
        echo "<table>";
        echo "<tr><th>Nombre</th><th>Edad</th><th>Ciudad</th></tr>";
        echo "<tr><td>".$this->nombre."</td>";
        echo "<td>".$this->edad."</td>";
        echo "<td>".$this->ciudad."</td></tr>";
        echo "<table>";
    }
}

class ClaseHija extends Empleado{
    private $puesto;
    public function getEdad(){
        return $this->edad;
    }
    public function getCiudad(){
        return $this->ciudad;
    }
}

$hija = new ClaseHija("Carlos", 56, "Logroño", "Técnico");
echo $hija->getNombre(); // funciona porque es método público del padre
//echo $hija->getEdad(); // error porque es privada del padre
echo $hija->getCiudad(); 


$empleado1 = new Empleado("Casimiro", 32);
$empleado1 -> nombre = "Pedro";
echo $empleado1 -> nombre;
//echo $empleado1 -> edad; // por ser $edad private

echo $empleado1 -> getNombre();
//$datos = $empleado1 -> getDatos(); // por ser getDatos private
//echo "Edad: ".$datos["edad"]; // por ser getDatos private
//echo "ciudad: ".$datos["ciudad"]; // por ser getDatos private
echo "<hr>";
$nuevosDatos = [
        "nombre"=>"Federico",
        "edad"=>21,
        "ciudad"=>"Malpica de Bergantiños"
    ];

$empleado1 -> setDatos($nuevosDatos);

$empleado1 -> pintarDatos();
?>