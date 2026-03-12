<?php

session_start();
$usuario = $_SESSION["usu"];
$fichero = $_SESSION["fich"];
$cadena = file_get_contents($fichero);
$jugadores = json_decode($cadena, true);

foreach ($jugadores as $jugador) {
    if ($jugador["usuario"] == $usuario) {
        echo "<table>";
        echo "<tr><th>Id</th><th>Nombre</th><th>Apellidos</th><th>Puntuación</th></tr>";
        echo "<tr><td>".$jugador["id"]."</td><td>".$jugador["nombre"]."</td><td>".$jugador["apellidos"]."</td><td>".$jugador["puntuacion"]."</td></tr>";
        echo "</table>";
    }
}

echo "<a href='02_jueves12.php?opcion=1'>Volver al menú</a>";

?>