<?php 

function pintar_tabla($registros) {
    if (count($registros) == 0) { 
        echo "No hay registros existentes";
    } else {
        echo "<table>";
        $encabezado = array_keys($registros[0]);
        echo "<tr>";
        foreach ($encabezado as $elementos) {
            $elementos = ucwords($elementos);
            echo "<th>$elementos</th>";
        }
        echo "</tr>";
        foreach ($registros as $registro) {
            echo "<tr>";   
        foreach ($registro as $valores) {
                echo "<td>$valores</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}


?>