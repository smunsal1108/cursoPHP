<?php
// Comprobar Si el usuario cambia el tema
if (isset($_POST["tema"])) {
    $tema = $_POST["tema"];

    // Validamos valores permitidos (seguridad básica por si hay injerencias externas poniendo p.e. tema=azul usando cURL, Postman, etc. ).
    if ($tema == "claro" || $tema == "oscuro") {
        setcookie("tema", $tema, time()+60*60*24*2, "/"); // 2 días, en segundos
        $_COOKIE["tema"] = $tema; 
    }
}

// Definir tema actual, si no se ha pulsado ningun botón
$tema_actual = "claro"; // por defecto

if (isset($_COOKIE["tema"])) {
    if ($_COOKIE["tema"] == "oscuro") {
        $tema_actual = "oscuro";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="php21cookies.css">
    <title>Ejemplo Cookies Seguro</title>
</head>
<body class="<?=$tema_actual;?>">
<div class="contenedor">
    <h2>Preferencia de tema</h2>
    <form action="" method="post">
        <button type="submit" name="tema" value="claro">Tema Claro</button>
        <button type="submit" name="tema" value="oscuro">Tema Oscuro</button>
    </form>
    <p>El tema actual es: <strong><?=$tema_actual;?></strong></p>
</div>

</body>
</html>