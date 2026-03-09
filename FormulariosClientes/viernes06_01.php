<?php
require_once "libreriaFormularios.php";
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    switch ($_POST["opcion"]){
        case "1":
            $nombre = htmlspecialchars(trim($_POST["nombre"]));
            $numero = htmlspecialchars(trim($_POST["numero"]));
            settype($numero, "double"); // de string a double
            echo "<p>Hola $nombre con el $numero a cuestas</p>";
            break;
        case "2":
            if (isset($_POST["vehiculos"])){
                $vehiculos =$_POST["vehiculos"];
                pintar_form($vehiculos);
            } else echo "<p>No has elegido ningún vehículo</p>";
            
    }

}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario "todo en 1"</h1>
    <form action="" method="post">
        <h2>Formulario1</h2>
        <input type="hidden" name="opcion" value="1">
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        <div>
            <label for="numero">Número</label>
            <input type="number" id="numero" name="numero" required min="5" max="10" step="0.5">
        </div>
        <input type="submit" value="ENVIAR">
    </form>
    <form action="" method="post">
        <h2>Formulario2</h2>
        <input type="hidden" name="opcion" value="2">
        <div>
            <input type="checkbox" name="vehiculos[]" value="coche" id="coche">
            <label for="coche">Coche</label>
            <input type="checkbox" name="vehiculos[]" value="bicicleta" id="bicicleta">
            <label for="bicicleta">Bicicleta</label>
            <input type="checkbox" name="vehiculos[]" value="moto" id="moto">
            <label for="moto">Moto</label>
        </div>
        <input type="submit" value="ENVIAR">
    </form>
</body>
</html>
