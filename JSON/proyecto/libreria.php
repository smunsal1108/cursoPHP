<?php

// Vamos a crear nuestra propia libreria con una serie de funciones que nos sirva para cualquier funcionalidad repetetitiva (por ejemplo, pintar una tabla con datos).

function leer_json($fichero) { //Primero vamos a identificar que funcionalidad va a cubrir está función. En nuestro caso, queremos poder leer un fichero json.
    if (!file_exists($fichero)) return []; // Luego vamos a pensar en los casos posibles de los datos que nos envian haciendonos preguntas. ¿El fichero existe?
    $cadena = file_get_contents($fichero);
    $datos = json_decode($cadena, true);
    return $datos ? $datos : [];
}

function guardar_json($datos, $fichero){
    if (!file_exists($fichero)) return false;
    $cadena = json_encode($datos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    file_put_contents($fichero, $cadena);
    return true;
}

function buscar_en_json($datoInput, $campo, $fichero) {
    $encontrados = [];
    $registros = leer_json($fichero);
    foreach ($registros as $registro) {
        if (isset($registro[$campo]) && $registro[$campo]==$datoInput) $encontrados[] = $registro;
    }
    return $encontrados;
}

function insertar_registro_json($nuevo, $fichero, $campo=null){
    $registros = leer_json($fichero);
    if ($campo) {
        $indices = array_column($registros, $campo);
        $nuevo[$campo] = empty($indices) ? 1 : max($indices)+1;
    }
    array_push($registros, $nuevo);
    guardar_json($registros, $fichero);
}

function borrar_registro_json($campo, $persona, $fichero) {
    $registros = leer_json($fichero);
    foreach ($registros as $clave => $registro) {
        if ($registro[$campo] == $persona) { 
            unset($registros[$clave]);
        }
    }
    guardar_json(array_values($registros), $fichero);
}

function actualizar_registros_json($campoPK, $valorPK, $campoModif, $valorCampoModif, $fichero) {
    $registros = leer_json($fichero);
    foreach ($registros as $clave => $registro) {
        if ($registro[$campoPK] == $valorPK) {
            $registro[$campoModif] = $valorCampoModif;
        }
    }
    guardar_json($registros, $fichero);
    return true;
}


function pintar_tabla($registros, $campoPK=null) { //Recibe un array de arrays asociativo
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
        foreach ($registro as $campo) {
                echo "<td>".htmlspecialchars($campo)."</td>";
            }
            if ($campoPK && isset($registro[$campoPK])) {
                $campoRefer = $registro[$campoPK];
                echo "<td>";
                echo "<a href='?opcion=borrar&campoRefer=$campoRefer'>Elimintar ❌</a>";
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}

?>