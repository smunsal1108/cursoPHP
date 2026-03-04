<link rel="stylesheet" href="../dia-4_02_03_2026/03_lunes_02.css">

<?php

include_once "../dia-4_02_03_2026/03_lunes02_externo.php";

//Ejercicio 1: Conseguir realizar lo siguiente
/* -> Calcular el salario medio del departamento IT. 
   -> Obtener el empleado mejor pagado.
   -> Crear un array agrupado por departamento. FOR EACH
*/

$empleados = [
["nombre"=>"Ana","departamento"=>"Ventas","salario"=>1500],
["nombre"=>"Luis","departamento"=>"IT","salario"=>2000],
["nombre"=>"Marta","departamento"=>"Ventas","salario"=>1700],
["nombre"=>"Pedro","departamento"=>"IT","salario"=>2200]
];

// Calcular el salario medio del departamento IT. 
$departamentoIT = array_filter($empleados, fn($empleado) => $empleado["departamento"] == "IT");

echo "<pre>"; 
print_r($departamentoIT);
echo "</pre>";

pintar_tabla($departamentoIT);

echo "<hr>";

$sumaSalario = array_reduce($empleados, fn($suma, $empleado)=> $suma + $empleado["salario"] , 0);
$mediaSalario = round($sumaSalario/count($departamentoIT), 2);
echo $mediaSalario;

echo "<hr>";

// Obtener el empleado mejor pagado.

$mejorPagado = array_reduce($empleados, 
    function ($maxSalario, $empleado) {
        if ($empleado["salario"] > $maxSalario) {
            return $empleado["salario"];
        }
        return $maxSalario;
    }
,0);

$empleadoMejorPagado = array_filter($empleados, fn($empleado) => $empleado["salario"] == $mejorPagado);

pintar_tabla($empleadoMejorPagado);

echo "<hr>";

// Crear un array agrupado por departamento. FOR EACH

// Como sería: Departamento (Array) --> Ventas (Array 0) [empleados de ventas] y IT (Array 1) [empleados de it]

foreach ($empleados as $empleado) {
    $nombreDpt = $empleado["departamento"];

    if (!isset($dpt[$nombreDpt])) {
        $dpt[$nombreDpt] = [];
    }
    
    $dpt[$nombreDpt][] = $empleado;

}
    
echo "<pre>"; 
print_r($dpt);
echo "</pre>";

?>