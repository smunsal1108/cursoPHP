<?

include "03_externo.php"; //include sirve para incluir ficheros con datos o directorios que contienen ficheros con datos.

/* 
datoNombre --> camel Case
dato_nombre --> snake Case
DatoNombre --> Pascal Case

*/

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Aprendiendo PHP</h1>
    <? 
        $nombre = "pepe";
    ?>
    <p>Hola <? echo $nombre; ?>, bienvenido.</p>
    <p>Vaya <?= $otroNombre; ?>, ya estaba aquí.</p>

    <? sumar_raro(2,4) ?>
    <? echo poner_mayuscula("rosario") ?>
    <? echo "<p><strong>".poner_mayuscula("rosario")."</strong></p>";
    print $otroNombre."-----";
    

    //$camino = `dir *.php`;
    //echo $camino;

    if ($nombre == "pepe") {
        echo "hola";
        echo "adios";
    }
    $nombre = "juan";
    if ($nombre == "pepe") {
        echo "hola";
    }
    echo "adios";
    ?>

</body>
</html>