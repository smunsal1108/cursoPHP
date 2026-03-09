<link rel="stylesheet" href="lunes02_03.css">
<?
$alumnos = [
    [
        "nombre" => "Ana",
        "edad" => 16,
        "curso" => "4º ESO",
        "asignaturas" => [
            "matemáticas" => 8,
            "inglés" => 9
            ],
        "Beca" => true
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
        "beca"=> false
    ],
    [
        "nombre" => "Lucia",
        "edad" => 16,
        "curso" => "4º ESO",
        "asignaturas" => [
            "matemáticas" => 9,
            "lengua" => 9,
            "inglés" => 10,
            "Educación Física" => 7
            ],
        "beca" => true
    ]
];
if (count($alumnos)==0){
    echo "<p>No hay alumnos.</p>";
} else {
    echo "<table>";
    $encabezados = array_keys($alumnos[0]);
    echo "<tr>";
    foreach ($encabezados as  $encabezado){
        echo "<th>".ucwords($encabezado)."</th>";
    }
    echo "</tr>";
    foreach ($alumnos as $alumno){
        echo "<tr>";
        foreach ($alumno as $valor){
            
            if (is_array($valor)) {
                echo "<td>";
                foreach ($valor as $nom_asig => $nota){
                    echo nl2br("$nom_asig: $nota \n");
                }
                echo "</td>";
            } else if ($valor && is_bool($valor)){
                echo "<td>✅</td>";
            } else if (!$valor && is_bool($valor)){
                echo "<td>❌</td>";
            } else if (is_numeric($valor)){
                echo "<td class='numero'>$valor</td>";
            } else { 
                echo "<td>$valor</td>";
            }

        }
        echo "</tr>";
    }
    echo "<tr><td colspan=".count($encabezados).">Hay ".count($alumnos)." alumnos matriculados</td></tr>";
    echo "</table>";
}

?>
