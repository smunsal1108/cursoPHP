<?php
require_once "../dia-7_05_03_2026/02_jueves_05_librerias_formularios.php";

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    switch ($_POST["opcion"]) {
        case '1':
            $nombre = htmlspecialchars(trim($_POST["nombre"]));
            $numero = htmlspecialchars(trim($_POST["numero"]));
            settype($numero, "double");
            echo "Hola $numero";
            break;

        case '2':
            if (isset($_POST["vehiculos"])) {
                $vehiculos = $_POST["vehiculos"];
                pintar_formulario($vehiculos);
            } else {
                echo "<p>No has elegido ningún vehículos</p>";
            }
            break;
    }
} else { 
    
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
        <h2>Formulario 1</h2>
        <input type="hidden" name="opcion" value="1">
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" required>

            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero" required min="5" max="10" step="0.5">
        </div>
        <input type="submit" value="ENVIAR">
        <input type="reset" value="BORRAR">
    </form>
    <!-- ============================================================ -->
    <form action="" method="post">
        <h2>Formulario 2</h2>
        <input type="hidden" name="opcion" value="2">
        <div>
            <input type="checkbox" name="vehiculos[]" id="coche" value="coche">
            <label for="coche">Coche</label>

            <input type="checkbox" name="vehiculos[]" id="bicicleta" value="bicicleta">
            <label for="bicicleta">Bicicleta</label>

            <input type="checkbox" name="vehiculos[]" id="moto" value="moto">
            <label for="moto">Moto</label>
        </div>

        <input type="submit" value="ENVIAR">
        <input type="reset" value="BORRAR">
    </form>
</body>
</html>