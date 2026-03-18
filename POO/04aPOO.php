<?php
echo "<h1>Encapsulamiento básico y alternativas en el control de datos de entrada el constructor</h1>";
echo "<h2>Asignar un valor por defecto</h2>";
class Personas {
    private $nombre;

    public function __construct($nombre) {
        if (!empty($nombre)) {
            $this->nombre = $nombre;
        } else {
            $this->nombre = "Sin nombre";
        }
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        if (!empty($nombre)) {
            $this->nombre = $nombre;
        } else $this->nombre = "Sin nombre asignado";
    }
}

$persona = new Personas(""); // Pruébese con una cadena no vacía al iniciarlo


// Esto daría error:
// echo $p->nombre;

echo $persona->getNombre(); // 
echo "<hr>";
$persona->setNombre("Ciriaco");
echo $persona->getNombre()."<==="; //Ciriaco
echo "<hr>";
$persona->setNombre(""); // 
echo $persona->getNombre()."<==="; // 


echo "<h2>Lanzar una excepción</h2>";
class Individuos {
    private $nombre;

    public function __construct($nombre) {
        if (empty($nombre)) {
            throw new Exception("El nombre no puede estar vacío");
        }
        $this->nombre = $nombre;
    }
   
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        if (!empty($nombre)) {
            $this->nombre = $nombre;
        } else $this->nombre = "Sin nombre asignado";
    }
}

try {
    $individuo = new Individuos("Casimiro"); // probar con valores no vacíos
    echo $individuo->getNombre(); // 
    echo "<hr>";
    $individuo->setNombre("Ciriaco");
    echo $individuo->getNombre()."<==="; //Ciriaco
    echo "<hr>";
    $individuo->setNombre(""); // 
    echo $individuo->getNombre()."<==="; // 

} catch (Exception $error) {
    echo $error->getMessage(); // Llama al método getMessage() del objeto $error que es una instancia de la clase Exception
} 


// Esto daría error:
// echo $p->nombre;


echo "<h2>Reutilizar el <code>setter</code></h2>";
class Alumnos {
    private $nombre;

    public function __construct($nombre) {
        $this->setNombre($nombre); // reutilizamos la  validación
    }

    public function setNombre($nombre) {
        if (empty($nombre)) {
            $this->nombre = "Desconocido";
        } else {
            $this->nombre = $nombre;
        }
    }

    public function getNombre() {
        return $this->nombre;
    }
}
$alumno = new Alumnos(""); // Pruébese con una cadena no vacía al iniciarlo


// Esto daría error:
// echo $p->nombre;

echo $alumno->getNombre(); // 
echo "<hr>";
$alumno->setNombre("Ciriaco");
echo $alumno->getNombre()."<==="; //Ciriaco
echo "<hr>";
$alumno->setNombre(""); // 
echo $alumno->getNombre()."<==="; // 
?>