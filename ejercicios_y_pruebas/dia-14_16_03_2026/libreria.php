<?php
function leer_json($fichero){
    if(!file_exists($fichero)) return [];
    $cadena = file_get_contents($fichero);
    $datos = json_decode($cadena, true);
    return $datos ? $datos : [];
}

function guardar_json($datos, $fichero){
    // Ahora crea el fichero si no existe
    $cadena = json_encode($datos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    file_put_contents($fichero, $cadena, LOCK_EX);
    return true;
}

function buscar_en_json($datoInput, $campo, $fichero){
    $registros = leer_json($fichero);
    foreach ($registros as $registro){
        if(isset($registro[$campo]) && $registro[$campo]==$datoInput){
            return $registro;
        }
    }
    return false;
}

function buscar_en_json_registros($datoInput, $campo, $registros){
    $encontrados = [];
    foreach ($registros as $registro){
        if(isset($registro[$campo]) && $registro[$campo]==$datoInput){
            $encontrados[]=$registro;
        }
    }
    return $encontrados;
}

function buscar_parcial_en_json_registros($datoInput, $campo, $registros){
    $encontrados = [];
    foreach ($registros as $registro){
        if(isset($registro[$campo]) && str_contains(strtolower($registro[$campo]), strtolower($datoInput))){
            $encontrados[]=$registro;
        }
    }
    return $encontrados;
}

function insertar_registro_json($nuevo, $fichero, $campo=null){
    $registros = leer_json($fichero);
    if ($campo) {
        $indices = array_column($registros, $campo);
        $nuevo = [$campo => empty($indices) ? 1 : max($indices)+1] + $nuevo;
    }
    array_push($registros, $nuevo);
    return guardar_json($registros, $fichero);
}

function borrar_registro_json($campo, $elegido, $fichero){
    $registros = leer_json($fichero);
    foreach ($registros as $clave=>$registro){
        if ($registro[$campo]==$elegido) {
            unset($registros[$clave]);
        }
    }
    guardar_json(array_values($registros), $fichero);
}

function actualizar_registros_json($campoPK, $valorPK, $campoModif, $valorCampoModif, $fichero){
    $registros = leer_json($fichero);
    $encontrado = false;
    foreach ($registros as $clave=>$registro){
        if ($registro[$campoPK]==$valorPK) {
            $registros[$clave][$campoModif] = $valorCampoModif; // ✅ corregido
            $encontrado = true;
        }
    }
    if ($encontrado) {
        guardar_json($registros, $fichero);
        return "OK";
    } else {
        return "ERROR_NOT_FOUND";
    }

    return guardar_json($registros, $fichero);
}


/* FUNCIÓN ESPECÍFICA PARA UN SOLO CAMPO (en este caso fecha);

    function agregar_fecha_json($fichero) {
    $datos = leer_json($fichero);
    $fecha = date("d-m-Y");
    foreach ($datos as &$usuario) {
        if (!isset($usuario["fecha"])) $usuario["fecha"] = $fecha;
    }
    guardar_json($datos, $fichero);
} */

    // FUNCIÓN GENERAL, PARA CUALQUIER CAMPO QUE SE QUEIRA AGREGAR.
    function agregar_campo_json($fichero, $campo) {
    $datos = leer_json($fichero);
    if ($campo == "fecha") $valorCampo = date("d-m-Y"); // SE DEBE DE ESPECIFICAR LAS CONDICIONES PARA CADA NUEVO CAMPO
    if ($campo == "email") $valorCampo = "example@gmail.com";
    if ($campo == "desempleado") $valorCampo = true;
    foreach ($datos as &$usuario) {
        if (!isset($usuario[$campo])) $usuario[$campo] = $valorCampo;
    }
    guardar_json($datos, $fichero);
}

function pintar_tabla($registros, $campoPK=null, $columnas=null){
    if (!is_array($registros)) echo "<p>Dato a mostrar no es un array</p>";
    else if (count($registros)==0){
        echo "<p>No hay registros</p>";
    } else {
        $valido = true;
        foreach ($registros as $clave => $valor){
            if (!is_numeric($clave)) $valido=false;
            else if (!is_array($valor)) $valido = false;
            else {
                foreach ($valor as $nomPropiedad =>$valorPropiedad){
                    if (!is_string($nomPropiedad)) $valido = false;
                }
            }
        }

        if ($valido){
            echo "<table>";
            $registros=array_values($registros);
            // Si se han indicado las columnas seran estas los encabezados
            if ($columnas) $encabezados = $columnas;
            else $encabezados = array_keys($registros[0]);
            echo "<tr>";
            foreach ($encabezados as  $encabezado){
                echo "<th>".ucwords($encabezado)."</th>";
            }
            echo "<th>Operaciones</th>";
            echo "</tr>";
            foreach ($registros as $registro){
                echo "<tr>";
                foreach ($encabezados as $col){
                    echo "<td>".htmlspecialchars($registro[$col]) ?? ''."</td>";
                }
                if ($campoPK && isset($registro[$campoPK])){
                    $campoRefer = $registro[$campoPK];
                    echo "<td>";
                    echo "<a title='Eliminar el registro' href='?   opcion=borrar&campoRefer=$campoRefer'>🗑️</a>";
                    echo "<a title='Editar el registro' href='?opcion=editar&campoRefer=$campoRefer'>✏️</a>";
                    echo "</td>";
                }
                echo "</tr>";
            }  
            echo "</table>";
        } else echo "<p>Datos a mostrar no es un array de arrays asociativo correcto</p>";
    }
}
?>