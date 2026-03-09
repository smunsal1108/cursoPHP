<?php

$empleados = [
    ["nombre"=>"Ana",
    "departamento"=>"Ventas",
    "salario"=>1500],
    ["nombre"=>"Luis",
    "departamento"=>"IT",
    "salario"=>2000],
    ["nombre"=>"Marta",
    "departamento"=>"Ventas",
    "salario"=>1700],
    ["nombre"=>"Pedro",
    "departamento"=>"IT",
    "salario"=>2200]
];
# Caso 1
$empleadosIT = array_filter($empleados, fn($empleado) => $empleado["departamento"] == "IT");
$salarioMedioIT = array_reduce($empleadosIT, fn($acumulador, $empleado) => $acumulador + $empleado["salario"], 0) / count($empleadosIT);

echo "<p>Salario medio IT: $salarioMedioIT</p>";

# Caso 2
$mejorPagado = array_reduce($empleados, function($mejor, $empleado) {
    return ($mejor === null || $empleado["salario"] > $mejor["salario"]) ? $empleado : $mejor;
}, null);

echo "<p>Mejor pagado: {$mejorPagado['nombre']} con {$mejorPagado['salario']}</p>";

# Caso 3
$agrupados = [];

foreach($empleados as $empleado) {
    $departamento = $empleado["departamento"];
    if (!isset($agrupados[$departamento])) {
        $agrupados[$departamento] = [];
    }
    $agrupados[$departamento][] = $empleado;
}
echo "<pre>";
print_r($agrupados);
echo "</pre>";
?>