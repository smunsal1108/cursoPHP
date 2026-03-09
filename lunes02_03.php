<link rel="stylesheet" href="lunes02_03.css">
<?php
require_once "jueves26_externo.php";
$alumnos = [
    [
        "nombre" => "Ana",
        "edad" => 16,
        "curso" => "4º ESO",
        "matemáticas" => 8,
        "lengua" => 7,
        "inglés" => 9
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
        "lengua" => 9,
        "inglés" => 10
    ]
];

//echo "<tr><th>Nombre</th><th>Edad</th><th>Curso</th><th>Matemáticas</th><th>Lengua</th><th>Inglés</th></tr>";
pintar_tabla($alumnos);



?>