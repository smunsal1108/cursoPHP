<?php

require_once "../libreriasCreadas/libreriaFicheros.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = htmlspecialchars(trim($_POST["usuario"])) ?? "";
    $clave = htmlspecialchars(trim($_POST["clave"])) ?? "";
    $clave2 = htmlspecialchars(trim($_POST["clave2"])) ?? "";

    if ($clave !== $clave2) echo "<p>Las claves no coinciden</p>";
    else if (empty($usuario) || empty($clave)) echo "<p>No puede haber campos vacíos</p>";
    else if (!preg_match("/^[a-z]{3,6}$/", $usuario)) echo "<p>No cumple las condiciones que se indicaron para el usuario</p>";
    else {
        $cadena = file_get_contents("../../JSON/acceso.json");
        $registros = json_decode($cadena, true);
        $nombresUsuarios = array_column($registros, "usuario");
        if (in_array($usuario, $nombresUsuarios)) echo "<p>No se admiten usuarios repetidos</p>";
        else if (!preg_match("/^(?=.*[a-z])(?=.*[0-9])[a-z0-9]{7}$/", $clave)) echo "<p>No cumple las condiciones que se indicaron para la clave</p>";
        else {
            $indices = array_column($registros, "id");
            $nuevoUsuario = [
                "id" => count($indices) != 0 ? (max($indices)+1) : 1,
                "usuario" => $usuario,
                "clave" => password_hash($clave, PASSWORD_DEFAULT)
            ];
            array_push($registros, $nuevoUsuario);
            $jsonData = json_encode($registros, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
            file_put_contents("../../JSON/acceso.json", $jsonData);
            leer_pintar_JSON("../../JSON/acceso.json");
        }
    }

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir un usuario</title>
</head>
<body>
    
<form action="" method="post">
    <div>
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario" required pattern="[a-z]{3,6}"> <!-- Si hacemos pattern="[a-z]{3,6}" entonces nos podemos ahorrar el min y max length -->
    </div>
    <div>
        <label for="clave">Clave</label>
        <input type="password" name="clave" id="clave" required pattern="^(?=.*[a-z])(?=.*[0-9])[a-z0-9]{7}$">
        <small>La clave debe tener al menos una letra minúscula y un número. En total 7 caracteres (no admite mayúsculas)</small>
    </div>
    <div>
        <label for="clave2">Repite la clave</label>
        <input type="password" name="clave2" id="clave2" required pattern="^(?=.*[a-z])(?=.*[0-9])[a-z0-9]{7}$">
        <small>La clave debe tener al menos una letra minúscula y un número. En total 7 caracteres (no admite mayúsculas)</small>
    </div>

    <input type="submit" value="Añadir">
    
</form>

</body>
</html>