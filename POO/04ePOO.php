<?php
class Empleados {
    protected $salario;

    public function setSalario($salario) {
        if ($salario > 0) {
            $this->salario = $salario;
        }
    }

    public function getSalario() {
        return $this->salario;
    }
}

class Gerentes extends Empleados {
    public function aumentarSalario($cantidad) {
        $this->salario += $cantidad; // permitido (protected)
    }
}

$gerente = new Gerentes();
$gerente->setSalario(2000);
$gerente->aumentarSalario(500);

echo $gerente->getSalario(); // 2500
?>