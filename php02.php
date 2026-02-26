<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php02</title>
</head>
<body>
    <h1>Ejemplo PHP2</h1>
    <?php  
    include("externo.php");
    echo "Hola Mundo";
    echo "<hr>"; // Introducimos código HTML
    $mensaje="¿Cómo se vive fuera del LI?"; //Comentario de una linea
    echo $mensaje; #Este comentario también es de una linea
    /*En este caso
    mi comentario ocupa
    varias lineas */
    echo "<ol>";
    $todo =  "<li>".palindromo("sara baras")."</li>"; // el punto (.) es el operador concatenar
    echo "<li> $mensaje </li>"; 
    echo $todo;
// la coma se puede usar en la función echo para imprimir varias cadenas o valores sin necesidad de concatenarlos previamente
    echo "<li>",$mensaje,"</li>";
    echo "<li>$mensaje</li>";
    echo "</ol>";
    ?>
</body>
</html>