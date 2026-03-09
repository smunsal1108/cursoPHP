<?php 
require_once "../../FormulariosClientes/libreriaFormularios.php";
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $nombre = isset($_POST["form"]["nombre"]) ? $_POST["form"]["nombre"] : "";
    $edad = isset($_POST["form"]["edad"]) ? $_POST["form"]["edad"] : "";
    $distritos = isset($_POST["form"]["distritos"]) ? $_POST["form"]["distritos"] : "";
/*  
    Comprobación:
    echo $nombre, $edad
    
    echo "<pre>"; 
    print_r($distritos);
    echo "</pre>"; */

    $nombre = htmlspecialchars(trim($nombre));
    $edad = htmlspecialchars(trim($edad));

    if (edad_correcta($edad)) {
        $_POST["form"]["nombre"] = $nombre;
        $_POST["form"]["edad"] = $edad;
        pintar_form($_POST["form"]);
    } else {
        echo "<p>ERRO en la entrada de datos</p>";
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lunes09_01</title>
</head>
<body>
    <form action="" method="post"> 
        <!-- El nombre no puede estar vacío, tiene que tener una longitud menor de 50 caracteres y sólo con letras del alfabeto [A - Z] -->
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="form[nombre]" id="nombre">
        </div>
        
        <!-- La edad no puede estar vacío, número entero entre 1 y 99 -->
        <div>
            <label for="edad">Edad</label>
            <input type="text" name="form[edad]" id="edad">
        </div>
        
        <!-- Debe permitirse que no se pueda escoger ningún distrito indicándolo en la pantalla -->
        <div>
            <label for="edad">Edad</label>
            <select name="form[distritos][]" multiple>
                <option value="" selected>Elige distritos</option>
                <option value="Nervión">Nervión</option>
                <option value="Macarena">Macarena</option>
                <option value="Cerro-Amate">Cerro-Amate</option>
                <option value="Sur">Sur</option>
            </select>
        </div>

        <input type="submit" value="Mostrar">
        <input type="reset" value="Borrar">
    </form>
</body>
</html>