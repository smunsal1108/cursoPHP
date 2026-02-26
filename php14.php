<?php

declare(strict_types=1);

function obtenerNombre(string $nombre): string {
    return "Hola " . $nombre;
}

function dividir(float $a, float $b): float {
    if ($b === 0.0) {
        throw new Exception("No se puede dividir entre 0");
    }
    return $a / $b;
}

try {
    echo dividir(10.0, 0.0);
} catch (Exception $e) {
    echo "Error controlado: " . $e->getMessage();
}

echo "<p>".obtenerNombre('Carlos')."</p>";
echo "<p>".dividir(10.0, 2.0)."</p>";

////////////////////////////////////////////
function procesar(int|string $valor): string {
    return "<p>Valor recibido: " . $valor."</p>"    ;
}

echo procesar(10);
echo procesar("texto");
?>