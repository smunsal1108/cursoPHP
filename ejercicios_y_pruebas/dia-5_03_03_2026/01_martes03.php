<?php 
//require_once "03_lunes02_externo.php";

$alumnos = [
    [
        "nombre" => "Ana",
        "edad" => 16,
        "curso" => "4º ESO",
        "matemáticas" => 8,
        "lengua" => null,
        "inglés" => 9
    ],
    [
        "nombre" => "Carlos",
        "edad" => 17,
        "curso" => "1º Bachillerato",
        "matemáticas" => 6,
                        //<--- Aquí no existe lengua porque optativo. Esto nos genera un problema, que hay que solucionar.
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
    <link rel="stylesheet" href="../dia-4_02_03_2026/03_lunes_02.css">
    <title>Pintar tablas con inyecciones PHP</title>
</head>
<body>
    <h1>Gestión de alumnos</h1>
    <nav>
        <a href="">Añadir</a>
        <a href="">Eliminar</a>
        <a href="">Modificar</a>
    </nav>
    <main>
        <!-- Aquí vamos a crear nuestra tabla dinamicamente -->
         <table>
            <!-- Método 1. Hacerlo con las llaves -->
            
            <!-- Método 2. Hacerlo dos puntos y endforeach -->
            <tr>
                <?  $encabezados=array_keys($alumnos[0]); 
                    foreach ($encabezados as $elementos): 
                ?>
                
                <th> <?=ucwords($elementos)?> </th>  
                
                <? endforeach; ?>
            </tr>

            <? foreach ($alumnos as $alumno): ?>
                <tr>
                    <? foreach ($alumno as $valor): ?>
                        <td><?=$valor ?></td>
                        <td><?=$valor ?></td>
                    <? endforeach; ?>
                </tr>
            <? endforeach; ?>

         </table>
    </main>
    <footer>
        <p>Hay <?=count($alumnos)?> alumnos matriculados</p>
    </footer>
</body>
</html>