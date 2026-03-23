<?php
require_once "vendor/autoload.php";
use MiProyecto\Cliente;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $cliente = new Cliente($_POST);
    if ($cliente->controlNombre()) echo $cliente -> presentarse();
    else {
        $mensajeError="Nombre no es correcto";
        header("Location:jueves19_04.php?error=$mensajeError");
        exit;
    }
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilosFormulario.css">
    <title>Document</title>
</head>
<body>
    <h1>Registro de usuarios</h1>
<form action="" method="POST">
    <fieldset>
        <legend>Datos Personales</legend>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" pattern="[A-Za-záéíóúÁÉÍÓÚñÑ]+" required>
        <label for="edad">Edad </label>
        <input type="number" id="edad" name="edad" min="1" max="120" required>
        <label for="email">Email </label>
        <input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
        <label for="telefono">Teléfono </label>
        <input type="tel" id="telefono" name="telefono" pattern="[0-9]{9}" placeholder="por ejemplo, 123456789" required>
        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </fieldset>
</form>
<?php
    if(count($_GET)>0) echo "ERROR: ".$_GET["error"];
?>
</body>
</html>