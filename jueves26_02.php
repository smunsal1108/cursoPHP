<?
echo "holaaaaa";
include "03_externo.php";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
</head>
<body>
    <h1>Aprendiendo PHP</h1>
    <? $nombre="Casimiro";?>
    <p>Hola <?=$nombre;?>, bienvenido.</p>
    <p><?=$otroNombre;?> ya estaba aquí.</p>
    <?
        sumar_raro(34,8);
        echo "<strong>".poner_mayusc("rosario")."</strong>";
        echo $nombre, $otroNombre;
        print $nombre."---";
        $nombre="pepe";
        if ($nombre=="pepe"){
            echo "hola";
            echo "adiós";
        }
        $nombre="juan";
        if ($nombre=="pepe") echo "hola";
        echo "adios";

        $mi_variable_bonita =34;
        $mi_Variable_Bonita =35;

        $camino = `dir *.php`;
        echo "<pre>";
        echo $camino;
        echo "</pre>";

    ?>




</body>
</html>
