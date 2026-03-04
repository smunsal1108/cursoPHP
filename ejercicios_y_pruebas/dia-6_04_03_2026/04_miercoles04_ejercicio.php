<?php 

// Ejercicio 1. Elementos con más de una aparición
// Nosotros queremos que de este array con valores repetidos saque aquellos valores que se repiten más veces --> $valores = [2, 5, 2, 7, 5, 9, 5, 2];
// Como resultado --> Resultado esperado: [2, 5]

$valores = [2, 5, 2, 7, 5, 9, 5, 2];

$repetidos = array_count_values($valores);

$filtrados = array_filter($repetidos, fn($valor) => $valor>1);

$solucion = array_keys($filtrados);

echo "<pre>"; 
print_r($solucion);
echo "</pre>";

echo "<hr>";

// Ejercicio 2. Intercambiar claves y valores
// Nosotros queremos que de este array se intercambien las claves por los valores y viceversa y los agrupe si tienen el mismo valor inicial que tenian --> $personas = [ "Juan" => 25, "Ana" => 30, "Luis" => 25];
// Resultado ---> [25 => ["Juan", "Luis"], 30 => ["Ana"]]

$personas = [ "Juan" => 25, "Ana" => 30, "Luis" => 25];

$solucion = [];

foreach ($personas as $clave => $valor) {
    $solucion[$valor][] = $clave;
}

echo "<pre>"; 
print_r($solucion);
echo "</pre>";

echo "<hr>";

// Ejercicio 3. Combinar arrays de diferente longitud

$nombres = ["Juan", "Ana", "Luis"];
$edades = [25, 30];

$longMax = max(count($nombres), count($edades));
$nombres = array_pad($nombres, $longMax, null);
$edades = array_pad($edades, $longMax, null);

$solucion = array_combine($nombres, $edades);

echo "<pre>"; 
print_r($solucion);
echo "</pre>";



?>