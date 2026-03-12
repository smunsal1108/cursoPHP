<?php

require_once "../libreriasCreadas/libreriaFicheros.php";

session_start();
$usuario = $_SESSION["usu"];
$fichero = $_SESSION["fich"];
$cadena = file_get_contents($fichero);
$jugadores = json_decode($cadena, true);

//Forma 1 de no mostrar la clave (Aspersan). Este modifica el array original
/* foreach ($jugadores as &$jugador) {
    unset($jugador["clave"]);
}
pintar_tabla($jugadores);
 */


//Forma 2 de no mostrar la clave (Por indice). Este modifica el array original
/* foreach ($jugadores as $indice => $jugador) {
    unset($jugadores[$indice]["clave"]);
}
pintar_tabla($jugadores); */


//Forma 3 de no mostrar la clave. Este modifica una copia del array original.
foreach ($jugadores as $jugador) {
    unset($jugador["clave"]);
    $jugadoresFiltrados[] = $jugador;
}
pintar_tabla($jugadoresFiltrados);


?>