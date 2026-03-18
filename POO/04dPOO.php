<?php
class Alumnos {
    private $nota;

    public function setNota($nota) {
        if ($nota >= 0 && $nota <= 10) {
            $this->nota = $nota;
        } else {
            echo "Nota inválida\n";
        }
    }

    public function getNota() {
        return $this->nota;
    }

    public function aprobado() {
        return $this->nota >= 5;
    }
}

$alumno = new Alumnos();
$alumno->setNota(7);

echo $alumno->getNota(); // 7

if ($alumno->aprobado()) {
    echo "<p>Aprobado</p>";
}
?>