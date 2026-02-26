<?php
echo "<h2>Elementos con más de una aparición</h2>";
$valores = [2, 5, 2, 7, 5, 9, 5, 2];

// Contar cuántas veces aparece cada elemento
$frecuencias = array_count_values($valores);

// Filtrar los que aparecen más de una vez
$filtrados = array_filter($frecuencias, function($cantidad) {
    return $cantidad > 1;
});
//  guardo como valores los índices de los elementos filtrados
$repetidos = array_keys($filtrados);

// Versión compacta: Contar cuántas veces aparece cada elemento y quedarnos solo con los que aparecen más de una vez
//$repetidos = array_keys(array_filter(array_count_values($valores), fn($cantidad) => $cantidad > 1));

echo "<pre>";
print_r($repetidos);
echo "</pre>";



// Resultado: [2, 5]
echo "<h2>Intercambiar claves y valores</h2>";

$personas = [
    "Juan" => 25,
    "Ana" => 30,
    "Luis" => 25
];

$resultado = [];

foreach ($personas as $nombre => $edad) {
    // Inicializar la edad como array si no existe
    $resultado[$edad][] = $nombre;
}

echo "<pre>";
print_r($resultado);
echo "</pre>";


echo "<h2>Combinar arrays con claves iguales</h2>";
$nombres = ["Juan", "Ana", "Pedro"];
$edades = [25, 30, 22];

// Combinar usando array_combine() ¡CUIDADO SI LOS ARRAYS TIENEN DIFERENTE LONGITUD NO FUNCIONA!
$personas = array_combine($nombres, $edades);

echo "<pre>";
print_r($personas);
echo "</pre>";
?>