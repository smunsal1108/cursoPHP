<?php
class Ejemplo {

    public function metodoPublico() {
        echo "<p>Método público</p>";
    }

    protected function metodoProtegido() {
        echo "<p>Método protegido</p>";
    }

    private function metodoPrivado() {
        echo "<p>Método privado</p>";
    }

    public function probarInterno() {
        // Desde dentro de la clase se puede acceder a TODO
        $this->metodoPublico();
        $this->metodoProtegido();
        $this->metodoPrivado();
    }   
}

$objeto = new Ejemplo();
try {
    $objeto -> probarInterno();
    $objeto->metodoPublico();     // Funciona bien
    $objeto->metodoProtegido();  // Da error al llamarlo desde fuera de la clase
    $objeto->metodoPrivado();    // Da error al llamarlo desde fuera de la clase
} catch (Throwable $error) {
    echo "Error capturado: " . $error->getMessage();
}

?>