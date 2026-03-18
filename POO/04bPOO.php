<?php
class CuentasBancarias {
    private $saldo;

    public function __construct($saldoInicial) {
        $this->saldo = $saldoInicial;
    }

    public function ingresar($cantidad) {
        if ($cantidad > 0) {
            $this->saldo += $cantidad;
        }
    }

    public function retirar($cantidad) {
        if ($cantidad > 0 && $cantidad <= $this->saldo) {
            $this->saldo -= $cantidad;
        } else {
            echo "<p>Operación no válida</p>";
        }
    }

    public function getSaldo() {
        return $this->saldo;
    }
}

$cuenta = new CuentasBancarias(100);

$cuenta->ingresar(50);
echo "<p>".$cuenta->getSaldo()."</p>"; // 150
$cuenta->retirar(30);

echo "<p>".$cuenta->getSaldo()."</p>";// 120
$cuenta->retirar(200); // Operación no válida
$cuenta->retirar(30);
echo "<p>".$cuenta->getSaldo()."</p>";// 90