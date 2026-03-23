<?php
interface Vehiculo {
    public function arrancar();
    public function detener();
}

class Coche implements Vehiculo {
    public function arrancar() {
        echo "El coche arranca<br>";
    }

    public function detener() {
        echo "El coche se detiene<br>";
    }
}

class Moto implements Vehiculo {
    public function arrancar() {
        echo "La moto arranca<br>";
    }

    public function detener() {
        echo "La moto se detiene<br>";
    }
}
//////////////////////
function iniciarVehiculo(Vehiculo $vehiculo) {
    $vehiculo->arrancar();
}

$coche = new Coche();
$moto = new Moto();
iniciarVehiculo($coche);
iniciarVehiculo($moto);

?>