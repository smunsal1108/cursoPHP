<?php
include "../jueves26_externo.php";
$archivo = "acceso.json";

/* Leer archivo */
$contenido = file_get_contents($archivo);

/* Convertir JSON a array */
$datos = json_decode($contenido, true);
pintar_tabla($datos);
/* ID que queremos eliminar */
$idEliminar = 2;
$bandera = false;
/* Recorrer array y eliminar */
foreach ($datos as $clave => $valor) {
    if ($valor["id"] == $idEliminar) {
        unset($datos[$clave]);
        $bandera = true;
    }
}
if ($bandera){
    /* Reindexar array */
    $datos = array_values($datos);

    /* Convertir a JSON */
    $json = json_encode($datos, JSON_PRETTY_PRINT);

    /* Guardar archivo */
    file_put_contents($archivo, $json);
} else {
    echo "<p>No existe el id indicado</p>";
}

/* la forma más elegante
$posicion=array_search($idEliminar,array_column($datos,"id"));

if($posicion===false){
    echo "<p>No existe el id indicado</p>";
}else{
    unset($datos[$posicion]);
} */
?>