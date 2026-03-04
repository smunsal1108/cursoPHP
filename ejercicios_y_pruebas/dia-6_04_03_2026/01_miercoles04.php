<link rel="stylesheet" href="../dia-4_02_03_2026/03_lunes_02.css">

<?php 

include_once "../dia-4_02_03_2026/03_lunes02_externo.php";

$edades = [23, 45, 11, 90, 44];

// Array filter. Filtramos bajo unas condiciones concretas y aquellos elementos que las cumplan serán añadidos en un nuevo array 
$pares = array_filter($edades, fn($edad) => $edad % 2 == 0);

echo "<pre>"; 
print_r($pares);
echo "</pre>";

echo "<hr>";

// Array map. Transformamos todos los elementos del array y los colocamos en un nuevo array del mismo tamaño
$doble = array_map(fn($edad) => $edad * 2, $edades);

echo "<pre>"; 
print_r($doble);
echo "</pre>";

echo "<hr>";

// Array reduce. Reduce todos los valores del array en un solo valor acumulado
$suma = array_reduce($edades, fn($acum, $edad) => $acum + $edad, 0);

echo "<p> La suma de todas las edades es igual a $suma </p>";

echo "<hr>";

//Mini ejercicio. Haciendo uso del array_filter, filtra aquellos alumnos de 4º ESO

$alumnos = [
    [
        "nombre" => "Ana",
        "edad" => 16,
        "curso" => "4º ESO",
        "matemáticas" => 8,
        "lengua" => "",
        "inglés" => 10
    ],
    [
        "nombre" => "Carlos",
        "edad" => 17,
        "curso" => "1º Bachillerato",
        "matemáticas" => 6,
        "lengua" => 8,
        "inglés" => 7
    ],
    [
        "nombre" => "Lucia",
        "edad" => 16,
        "curso" => "4º ESO",
        "matemáticas" => 9,
        "lengua" => 2,
        "inglés" => 10
    ]
];

$alumCuarto = array_filter($alumnos, fn($alumno) => $alumno["curso"] == "4º ESO");

echo "<pre>"; 
pintar_tabla($alumCuarto);
echo "</pre>";

echo "<hr>";

//Ahora se necesita filtrar aquellos alumnos que SI tengan una nota en la asignatura de lengua.

$alumLengua = array_filter($alumnos, fn($alumno) => !empty($alumno["lengua"]));
pintar_tabla($alumLengua);

echo "<hr>";

$nombres = array_map(fn($alumno) => $alumno["nombre"], $alumnos); //Para poder usar la función pintar_tabla, necesitamos pasarle un array de arrays. Ahora mimso como está solo le estamos pasando un único array.  
$nombres = array_map(fn($alumno) => ["nombre" => $alumno["nombre"]], $alumnos); //Para ello agrupamos $alumno["nombre"] entre corchetes para convertirlo en un array de arrays. Y para poder cambiar la clave (que actualmente es 0), le tenemos que reasignar esa clave con la clave nueva. Siendo por ejemplo nombre --> ["nombre => $alumnos["nombre"]]. 

$nombres = array_map(fn($alumno) => ["nombre" => $alumno["nombre"], "curso" => $alumno["curso"]], $alumnos);

echo "<pre>"; 
print_r($nombres);
echo "</pre>";

pintar_tabla($nombres);

echo "<hr>";

// Ahora se pide añadir un campo "aprobado" con valor Sí o No. Dependiendo de la media de asignaturas

$alumnosConEstado = array_map(
    function ($alumno) {
        $media = ($alumno["matemáticas"] + (is_numeric($alumno["lengua"]) ? $alumno["lengua"] : 0) + $alumno["inglés"]) / 3;
        $media >=5 ? $alumno["aprobado"]="Si" : $alumno["aprobado"]="No"; 
        return $alumno;
        }

    , $alumnos);

    echo "<pre>"; 
    pintar_tabla($alumnosConEstado);
    echo "</pre>";


// Ahora, se pide obtener el alumno con mayor nota en inglés usando array_reduce()

$mejorIngles = array_reduce($alumnos,
    function ($mejor, $alumno) {
        if ($mejor === null || $alumno["inglés"] > $mejor["inglés"]) { //Según el tipo de dato que se esté trabajando en el acumulador ($mejor), se tiene que devolver ese mismo tipo de dato y no otro. Por ejemplo si estás trabajando con un array, no puedes devolver otra cosa que NO SEA un array.
            return $alumno;
        }
        return $mejor;}
        , null);

echo "<pre>"; 
print_r($mejorIngles);
echo "</pre>"; 

echo "<hr>";

$mejorNotaIngles = array_reduce($alumnos, 
    function ($maximaNota, $alumno) {
        if ($alumno["inglés"] > $maximaNota) {
            return $alumno["inglés"];
        }
        return $maximaNota;
    }
    
, 0);

$alumnoMejorNota = array_filter($alumnos, fn($alumno) => $alumno["inglés"] == $mejorNotaIngles);

pintar_tabla($alumnoMejorNota)

?>

