<?php
class Ejemplos {

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

$objeto = new Ejemplos();

$objeto->metodoPublico();     // Funciona bien

$objeto->metodoProtegido();  // Da error
$objeto->metodoPrivado();    // Da error
?>