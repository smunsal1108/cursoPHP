<?php

function pintar_tabla($registros) {
    if (count($registros) == 0) { 
        echo "No hay registros existentes";
    } else {
        echo "<table>";
        $registros = array_values($registros); //Hay reindexar los indices del array que le llega, ya que de no ser así, nunca encontrará  el elemento con ese indice.
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

function leer_pintar_CSV($fichero) {
    $cadena = file_get_contents($fichero);
    $array = explode("\n", $cadena);
    $contenidos = array_map(fn($linea) => explode(";", $linea), $array);
    $cabecera = array_shift($contenidos);
    $registros = array_map(fn($registro) => array_combine($cabecera, $registro), $contenidos);
    pintar_tabla($registros);
}

function leer_pintar_JSON($fichero) {
    $cadena = @file_get_contents($fichero);
    $resultado = json_decode($cadena, true);
    pintar_tabla($resultado);
}

?>