<?php
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
        "Lengua"=>"",
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
    <link rel="stylesheet" href="lunes02_03.css">
    <title>Pintar tabla con inyecciones PHP</title>
</head>
<body>
    <h1>Gestión de alumnos</h1>
    <nav>
        <a href="">Añadir</a><a href="">Eliminar</a><a href="">Modificar</a>
    </nav>
    <main>
        <!-- incluir mi tabla dinámicamente-->
        <table>
            <tr><? $encabezados=array_keys($alumnos[0]); 
                foreach ($encabezados as $encabezado): ?>
                    <th><?=ucwords($encabezado)?></th>
                <?endforeach?>
            </tr>
            <?
                foreach ($alumnos as $alumno):?>
                <tr>
                    <? foreach ($alumno as $valor):?>
                        <td><?=$valor!="" ? $valor : "❌"?></td>
                    <?endforeach?>
                </tr>
            <?endforeach?>
        </table>
    </main>
    <footer>
        <p>Hay <?=count($alumnos)?> alumnos matriculados</p>
    </footer>
</body>
</html>