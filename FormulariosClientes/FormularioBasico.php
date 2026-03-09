<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Página PHP que recibe los datos</h1>
<?
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    $nombre = htmlspecialchars($_POST["nombre"]);
    $clave  = htmlspecialchars($_POST["clave"]);
?>
    <p>Nombre enviado: <?=$nombre?></p> <!-- hay que asegurarse que las etiquetas cortas están activadas en el servidor-->
    <p>Clave enviada: <?=$clave?></p>
</body>
</html>
