<?php

// Función que devulelve True si se encuentra el usuario con la clave y false si no se encuentra ni uno ni otro
function usu_clave_correctas($usuario, $clave, $fichero, $campo1, $campo2){
    $cadena = file_get_contents($fichero);
    $jugadores = json_decode($cadena, true);
    foreach ($jugadores as $jugador) {
        if ($jugador[$campo1] == $usuario && password_verify($clave, $jugador[$campo2])) return true;
        return false;
    }

}

if ($_SERVER["REQUEST_METHOD"] == "POST" || $_GET["opcion"] == 1) {
    $usuario = htmlspecialchars(trim($_POST["usuario"])) ?? "";
    $clave = htmlspecialchars(trim($_POST["clave"])) ?? "";
    $fichero = "../../JSON/jugadores.json";
    if(usu_clave_correctas($usuario, $clave, $fichero, "usuario", "clave")) {
        echo "<p>Hola $usuario</p>";
        session_start();
        $_SESSION["usu"]=$usuario;
        $_SESSION["fich"]=$fichero;
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";

        echo "<nav>"; 
        echo "<p><a href='02_jueves12a.php'>Ir a sección A</a></p>";
        echo "<p><a href='02_jueves12b.php'>Ir a sección B</a></p>";
        echo"</nav>";
    } else {
        header("Location: 02_jueves12.html"); 
    }
    
}


?>