<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php01a</title>
</head>
<body>
    <?php
        echo "Primera línea PHP dentro de HTML";
    ?>
    <h1>Embeber PHP</h1>
    <? //En php.ini debe estar  short_open_tag = On para poder usar comandos abreviados
    echo "Hola Mundo";
    $frase = "Bienvenido";
    echo "<hr>"; // Introducimos código HTML
    echo $frase;
    $mensaje="<h2>Saludar nunca está de más</h2>"; //Comentario de una linea
    echo $mensaje; #Este comentario también es de una línea
    /*En este caso
    mi comentario ocupa
    varias lineas */
    ?>
<ol>
    <li><? echo $frase; ?></li>
    <li><?=$frase ?></li>
    <!-- =sustituye a echo (pero debe ir pegado al comienzo del script)-->
    <li><?
    $frase = "Hasta luego";
    echo $frase;
    ?></li>
</ol>
    
</body>
</html>