<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilosFormulario.css">
    <title>Formulario POO Avanzado</title>
</head>
<body>

<h1>Registro de Usuario</h1>

<form method="POST">
    <fieldset>
        <legend>Datos Personales</legend>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" min="1" max="120" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" pattern="[0-9]{9}" placeholder="123456789" required>

        <input type="submit" value="Enviar">
    </fieldset>
</form>

<?php
require_once "clases/Usuario.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $usuario = new Usuario(
        htmlspecialchars($_POST['nombre']),
        htmlspecialchars($_POST['edad']), 
        htmlspecialchars($_POST['email']), 
        htmlspecialchars($_POST['telefono'])
    );
    ?>
    <div class='resultado'><?=$usuario->presentarse()?></div>
<?}?>
</body>
</html>