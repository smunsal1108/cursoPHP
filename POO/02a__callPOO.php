<?php
class Ejemplo {
    private function metodoPrivado() {
        echo "<p>Hola mundo cruel</p>";
    }

    public function __call($nombre, $argumentos) {
        throw new Exception("<p>No puedes acceder al método <strong>$nombre</strong></p>");
    }
}

try {
    $objeto = new Ejemplo();
    $objeto->metodoPrivado();
} catch (Exception $error) {
    echo $error->getMessage();
}


?>