<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    echo "<pre>"; 
    print_r($_POST);
    echo"</pre>";
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
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" required>
            <input type="number" name="numero" id="numero" required min="5" max="10" step="0.5">
            <label for="numero">Número</label>
        </div>
        <input type="submit" name="submit" value="ENVIAR">
        <input type="reset" value="BORRAR">
    </form>
    <!-- ============================================================ -->
    <form action="" method="post">
        <h2>Formulario 2</h2>
        <div>
            <input type="checkbox" name="vehiculos[]" id="coche" value="coche">
            <label for="coche">Coche</label>

            <input type="checkbox" name="vehiculos[]" id="bicicleta" value="bicicleta">
            <label for="bicicleta">Bicicleta</label>

            <input type="checkbox" name="vehiculos[]" id="moto" value="moto">
            <label for="moto">Moto</label>
        </div>

        <input type="submit" name="submit" value="ENVIAR">
        <input type="reset" value="BORRAR">
    </form>
</body>
</html>