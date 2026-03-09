<?
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
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
        
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        <div>
            <label for="numero">Número</label>
            <input type="number" id="numero" name="numero" required min="5" max="10" step="0.5">
        </div>
        <input type="submit" name="submit" value="ENVIAR">
    </form>
    <form action="" method="post">
        <h2>Formulario2</h2>
        
        <div>
            <input type="checkbox" name="vehiculos[]" value="coche" id="coche">
            <label for="coche">Coche</label>
            <input type="checkbox" name="vehiculos[]" value="bicicleta" id="bicicleta">
            <label for="bicicleta">Bicicleta</label>
            <input type="checkbox" name="vehiculos[]" value="moto" id="moto">
            <label for="moto">Moto</label>
        </div>
        <input type="submit"  value="ENVIAR">
    </form>
</body>
</html>
