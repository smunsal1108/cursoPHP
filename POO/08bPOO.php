<?php
interface MetodoPago {
    public function pagar(float $cantidad): string;
}
interface Logger {
    public function log(string $mensaje): void;
}
// definimos las clases
class PagoTarjeta implements MetodoPago {
    public function pagar(float $cantidad): string {
        return "Pago de $cantidad € realizado con tarjeta.";
    }
}

class PagoPaypal implements MetodoPago {
    public function pagar(float $cantidad): string {
        return "Pago de $cantidad € realizado con PayPal.";
    }
}

class FileLogger implements Logger {
    public function log(string $mensaje): void {
        file_put_contents("log.txt", $mensaje . PHP_EOL, FILE_APPEND);
    }
}

class ProcesadorPagos {
    private MetodoPago $metodoPago;
    private Logger $logger;

    public function __construct(MetodoPago $metodoPago, Logger $logger) {
        $this->metodoPago = $metodoPago;
        $this->logger = $logger;
    }

    public function procesar(float $cantidad): string {
        $resultado = $this->metodoPago->pagar($cantidad);
        $this->logger->log($resultado);
        return $resultado;
    }
}

///// secuencial /////
$logger = new FileLogger();

// Cambia el método de pago sin tocar la lógica
$pago1 = new ProcesadorPagos(new PagoTarjeta(), $logger);
echo $pago1->procesar(100);

$pago2 = new ProcesadorPagos(new PagoPaypal(), $logger);
echo $pago2->procesar(50);
?>