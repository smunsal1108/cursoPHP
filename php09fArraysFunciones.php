<link rel="stylesheet" href="lunes02_03.css">
<?php
require_once "jueves26_externo.php";
$alumnos = [
    [
        "nombre" => "Ana",
        "edad" => 16,
        "curso" => "4º ESO",
        "matemáticas" => 8,
        "lengua" => 2,
        "inglés" => 3
    ],
    [
        "nombre" => "Carlos",
        "edad" => 17,
        "curso" => "1º Bachillerato",
        "matemáticas" => 6,
        "lengua"=>5,
        "inglés" => 7
    ],
    [
        "nombre" => "Lucia",
        "edad" => 16,
        "curso" => "4º ESO",
        "matemáticas" => 9,
        "lengua" => "",
        "inglés" => 10
    ]
];
// array_filter() Alumnos de 4º ESO
$cuartoESO = array_filter($alumnos, fn($alumno) => $alumno["curso"] == "4º ESO");
pintar_tabla($cuartoESO);

// array_filter() Alumnos que tengan nota en lengua (no vacía)
$conLengua = array_filter($alumnos, fn($alumno) => !empty($alumno["lengua"]));
pintar_tabla($conLengua);

// array_map() Obtener sólo los nombres
$nombres = array_map(fn($alumno) => $alumno["nombre"], $alumnos);
// devuelve un array no asociativo
print_r($nombres);

// array_map() Añadir campo "aprobado
$alumnosConEstado = array_map(
    function($alumno) {
        $media = ($alumno["matemáticas"] + 
              ($alumno["lengua"]!="" ? $alumno["lengua"] : 0) + 
              $alumno["inglés"]) / 3;
        $alumno["aprobado"] = $media >= 5 ? "Sí" : "No";
        return $alumno;} ,
    $alumnos);

pintar_tabla($alumnosConEstado);

// array_reduce Obtener el alumno con mayor nota en inglés
$mejorIngles = array_reduce($alumnos, function ($mejor, $alumno) {
    if ($mejor === null || $alumno["inglés"] > $mejor["inglés"]) {
        return $alumno;
    }
    return $mejor;
}, null);

print_r($mejorIngles);
?>