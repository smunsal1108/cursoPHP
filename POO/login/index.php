<?php
require_once "Autoriza.php";
$autoriza  = new Autoriza("login.json");
$mensaje ="";
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $usuario = $_POST["usuario"] ?? "";
    $clave = $_POST["clave"] ?? "";

    if ($autoriza->login($usuario, $clave))
        $mensaje = "Bienvenido ". $usuario;
    else $mensaje = "Usuario y/o contraseña no coinciden";
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login POO</title>
</head>
<body>
    <h1>Login POO</h1>
    <form action="" method="post">
        <div>
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" id="usuario" required>
        </div>
        <div>
            <label for="clave">Clave</label>
            <input type="password" name="clave" id="clave" required>
        </div>
        <input type="submit" value="Acceder">
        <input type="reset" value="Borrar">
    </form>
    <?=$mensaje;?>
</body>
</html>