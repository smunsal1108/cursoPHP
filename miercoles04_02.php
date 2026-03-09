<?php
require_once "jueves26_externo.php";
$empleados = [    
    ["nombre"=>"Ana","departamento"=>"Ventas","salario"=>1500.12],    ["nombre"=>"Luis","departamento"=>"IT","salario"=>2000.34],  
    ["nombre"=>"Marta","departamento"=>"Ventas","salario"=>1700.12],
    ["nombre"=>"Pedro","departamento"=>"IT","salario"=>2200.67]
];
//Calcular el salario medio del departamento IT.
// array_filter() / array_reduce()
$dptoIT = array_filter($empleados, fn($empleado)=>$empleado["departamento"]=="IT");

$suma = array_reduce($dptoIT, 
    fn($acum, $empleado)=> $acum+$empleado["salario"]
    ,0);
echo "Media de salairio de IT: ".round($suma/count($dptoIT),2)." €";

//Obtener el empleado mejor pagado.
// array_reduce()
$EmpleadoMejorPagado = array_reduce($empleados, 
    function ($mejor, $empleado) {
    if ($mejor === null || $empleado["salario"] > $mejor["salario"]) return $empleado;
    return $mejor;
    }
    , null);
    echo "<p>Empleado mejor pagado: ".$EmpleadoMejorPagado["nombre"]."</p>";
//Crear un array agrupado por departamento. FOREACH()

$agrupados = [];

foreach($empleados as $empleado){
    if (!isset($agrupados[$empleado["departamento"]])){
        $agrupados[$empleado["departamento"]]=[];
    }
    $agrupados[$empleado["departamento"]][]=$empleado;
    //array_push($agrupados[$empleado["departamento"]], $empleado);
    echo "<pre>";
    print_r($agrupados);
    echo "</pre>";
}











/* 
$empleados = [    
    ["nombre"=>"Ana","departamento"=>"Ventas","salario"=>1500],    ["nombre"=>"Luis","departamento"=>"IT","salario"=>2000],    ["nombre"=>"Marta","departamento"=>"Ventas","salario"=>1700],
    ["nombre"=>"Pedro","departamento"=>"IT","salario"=>2200]
];

$grouped_array = [];
$departmens = array_map(function($employee) {
    return $employee["departamento"];
}, $empleados);
foreach($empleados as $employee) {
    $department = $employee["departamento"];
    $mappedEmployee = [
        "nombre" => $employee["nombre"],
        "salario" => $employee["salario"]
    ];
    if (!isset($grouped_array[$department])) {
        $grouped_array[$department] = [];
    }
    $grouped_array[$department][] = $mappedEmployee;
}
print_r($grouped_array); */


?>