<?php

require_once "../libreriasCreadas/libreriaFicheros.php";


$cadena = file_get_contents("../../JSON/acceso.json");
$registros = json_decode($cadena, true);
pintar_tabla($registros);

$nombresUsuarios = array_column($registros, "usuario");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //echo "¿Quieres eliminar a ".$_POST["usuario"]."?";
    $victima = htmlspecialchars(trim($_POST["usuario"])) ?? "";
    if (empty($victima)) echo "<p>No has elegido ningún usuario</p>";
    else if (!in_array($victima, $nombresUsuarios)) echo "<p>No existe este usuario</p>";
    else {
        foreach ($registros as $clave => $valor) {
            if ($valor["usuario"] === $victima) {
                unset($registros[$clave]);
            }
        }
        $datos = array_values($registros);
        echo "<pre>";
        print_r($datos);
        echo "</pre>";
        
        /* $jsonData = json_encode($registros, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        file_put_contents("../../JSON/acceso.json", $jsonData); */
    };
    
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar un registro</title>
</head>
<body>
    <form action="" method="post">
        <label for="usuario">Eliminar un registro</label>
        <select name="usuario" id="usuario">
            <option value="" disabled selected>Elige un usuario</option>
            <?php foreach ($nombresUsuarios as $nombre):?>
                <option value=<?=$nombre?>><?=$nombre?></option>
            <?endforeach?>
        </select>
        <input type="submit" value="Eliminar">
    </form>
    
</body>
</html>