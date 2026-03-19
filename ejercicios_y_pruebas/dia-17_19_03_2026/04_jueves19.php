<?php

require_once "../../POO/vendor/autoload.php";

use MiProyecto\Usuario;
use MiProyecto\Cliente;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cliente = new Cliente($_POST);
    if($cliente -> controlNombre()) echo $cliente -> presentarse();
    else {
        $error = "Nombre invalido";
        header("Location:04_jueves19.php?$error");
        exit;
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../POO/estilosFormulario.css">
    <title>Registro de usuarios</title>
</head>
<body>
    <h1>Registro de usuarios</h1>
    <form action="" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" pattern="[A-Za-záéíóúÁÉÍÚÓñÑ]">

        <label for="edad">Edad</label>
        <input type="number" name="edad" id="edad" pattern="[0-9]">

        <label for="email">Email</label>
        <input type="email" name="email" id="email">

        <label for="telefono">Teléfono</label>
        <input type="tel" name="telefono" id="telefono">

        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </form>
    <? if(count($_GET)>0) echo "ERROR: ".$_GET["error"]?>
</body>
</html>