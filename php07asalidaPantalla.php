<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 7 Salidas por pantalla</title>
</head>
<body>
Una enana roja es una estrella pequeña y 

relativamente fría de                       la secuencia principal, 


ya sea de tipo espectral K tardío o M.
    <pre>
    Una enana roja es una estrella pequeña y 

relativamente fría de                       la secuencia principal, 


ya sea de tipo espectral K tardío o M.

</pre>

    <h1>Salidas por pantalla</h1>
    <?php
    echo "<h2>echo y print</h2>";
    print "<p>Saludos</p>";
    echo "<p>Saludos</p>", "hola";
    $dato=34;
    echo "<p>resultado: $dato</p>";
    print "<p>resultado: $dato</p>";
    print "<hr>"; //lo mismo que echo "<hr>";
    $datos = array( 5, 0.0, "Hola", false, '' ); // lo mismo que $datos=[ 5, 0.0, "Hola", false, '' ]
    echo "<h2>var_dump</h2>";
    // var_dump($ciudad);
    var_dump($datos);
    $dato = 23;
    echo (" | ");
    var_dump($dato);
    echo "<hr>";
    echo "<h2>print_r</h2>";
    print_r($datos);
    echo "<hr>";
    echo "<h2>print_r dentro de pre</h2>";
    print("<pre>");
    print_r($datos);
    print("</pre>");
    $x=3;
    ?>
    <!--Ejemplo de uso de = sustituyendo a echo abreviado
    suele usarse para insertar una única sentencia echo y aunque pueden incluirse varias no se recomienda-->
    <h2>El curioso caso del echo abreviado </h2>
       <p><?=$dato?></p>
       <p><?echo $dato?></p>
       <p><?="$dato unidades"?></p>
       <p><?=$x>9?"sí":"no"?></p>
       <p><?=$dato;echo " unidades"?></p> <!-- no recomendado por ser más de una instrucción-->
       <p><?=$dato;$dato++;echo" $dato"?></p><!-- no recomendado por ser más de una instrucción-->
</body>
</html>