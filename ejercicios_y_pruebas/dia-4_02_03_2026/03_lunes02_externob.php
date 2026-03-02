<?php 
require_once "03_lunes02_externo.php";

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
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="03_lunes_02.css">
    <title>Pintar tablas</title>
</head>
<body>
    <h1>Gestión de alumnos</h1>
    <nav>
        <a href="">Añadir</a>
        <a href="">Eliminar</a>
        <a href="">Modificar</a>
    </nav>
    <?php 
        pintar_tabla($alumnos);
    ?>
    <footer>
        <p>Hay <?=count($alumnos)?> alumnos matriculados</p>
    </footer>
</body>
</html>