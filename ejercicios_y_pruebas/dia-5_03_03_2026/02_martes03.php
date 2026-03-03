<link rel="stylesheet" href="../dia-4_02_03_2026/03_lunes_02.css">

<?php 
$alumnos = [
    [
        "nombre" => "Ana",
        "edad" => 16,
        "curso" => "4º ESO",
        "asignaturas" => [
            "matemáticas" => 8,
            "inglés" => 9
            ],
        "beca" => true
    ],
    [
        "nombre" => "Carlos",
        "edad" => 17,
        "curso" => "1º Bachillerato",
        "asignaturas" => [
            "matemáticas" => 6,
            "lengua" => 8,
            "inglés" => 7
            ],
        "beca" => false
    ],
    [
        "nombre" => "Lucia",
        "edad" => 16,
        "curso" => "4º ESO",
        "asignaturas" => [
            "matemáticas" => 9,
            "lengua" => 9,
            "inglés" => 10,
            "educación física" => 7
            ],
        "beca" => true
    ]
];

if (count($alumnos) == 0) { 
        echo "No hay alumnos existentes";
    } else {
        echo "<table>";
        $encabezado = array_keys($alumnos[0]);
        echo "<tr>";
        foreach ($encabezado as $elementos) {
            $elementos = ucwords($elementos);
            echo "<th>$elementos</th>";
        }
        echo "</tr>";
        foreach ($alumnos as $alumno) {
            echo "<tr>";
            foreach ($alumno as $valor) {
            echo "<td class='color'>";    
                if (is_array($valor)) {
                    foreach ($valor as $nom_asig => $nota) {
                        echo nl2br("$nom_asig: $nota \n");
                    }

                } else if ($valor && is_bool($valor)) {
                    echo "✅";
                } else if (!$valor && is_bool($valor)) {
                    echo "❌";
                } else {
                    echo $valor;
                }
            echo "</td>";
            }
        }
        echo "<tr><td colspan=".count($encabezado).">Hay ".count($alumnos)." alumnos matriculados</td></tr>";
        echo "</table>";
    }

?>