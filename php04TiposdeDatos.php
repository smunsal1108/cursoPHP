<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP4 Tipos de datos</title>
</head>
<body>
    <h1>Ejemplo PHP4</h1>
    <?php
    $numero = "0";
    echo "$numero "; 
    echo gettype($numero)." "; # añadimos un espacio para separar los resultados en la misma línea
    settype($numero,"bool");
    echo gettype($numero)." ";
    settype($numero,"float");
    echo gettype($numero)." ";
    settype($numero,"string");
    echo gettype($numero)." ";
    settype($numero,"integer");
    echo gettype($numero)." ";
    settype($numero,"bool");
    echo gettype($numero)." ";
    echo "$numero ";
 echo "<hr>";
 $desempleado = false;
echo "*$desempleado*";
if ($desempleado) {
    echo "DESEMPLEADO";
}
else {
    echo "NO DESEMPLEDO";
}
$comprobacion = (3-7)<4;
echo "*$comprobacion*";


echo "<hr>";
    settype($numero,"NULL");
    echo gettype($numero)." ";
    echo ("<hr>");
    $variable = true;
    echo gettype($variable)." ";
    $variable = (string) $variable; //settype($variable,"integer");
    echo gettype($variable)." ";
    echo "$variable ";
//
    echo ("<hr>");
    $variable = "Mortadelo";
    echo gettype($variable)." ";
    $variable = (array) $variable; // un array con una posición que vale "Casimiro" $variable[0]
    echo gettype($variable)." ";
    $variable[1]="Filemón";
    $variable[2]="Dr. Bacterio";
    
    echo nl2br("\n");
    echo "$variable[0] y $variable[1]";
    $nuevo ="";
    foreach($variable as $nombre){
        $nuevo = $nuevo.$nombre;
    }
    
    echo "<ul>";
    foreach ($variable as $nombre) {
        echo "<li>$nombre</li>";
    }
    echo "</ul>";

    echo "<p>$nuevo</p>";
    $variable = (string) $variable[0];
    echo $variable;


    echo "<hr>";
    echo "*".false."*";

    ?>
</body>
</html>