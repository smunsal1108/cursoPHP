<?php 
/* Nos aseguramos que en php.ini no está comentado extension=intl
(tras cambiarlo reinicia el servicio Apache)
*/
    var_dump(extension_loaded('intl'));
    // https://www.php.net/manual/en/function.grapheme-extract.php 
    require_once "jueves26_externo.php";
    $cadena = trim("Hola MUNdo cruel. MÁtame camión. Camión. ");
    echo "<p>$cadena</p>";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lunes 02Marzo_2</title>
</head>
<body>
    <h1>Cadena de caracteres</h1>
    <h2>strtolower()</h2>
        <p><?=strtolower($cadena)?></p>
    <h2>strtoupper()</h2>
        <p><?=strtoupper($cadena)?></p>
    <h2>mb_strtolower()</h2>
        <p><?=mb_strtolower($cadena)?></p>
    <h2>mb_strtoupper()</h2>
        <p><?=mb_strtoupper($cadena)?></p>
    <h2>str_replace()</h2>
        <p><?=str_replace("camión","coche",strtolower($cadena))?></p>
    <h2>substr()</h2>
        <p><?=grapheme_substr("ñu",0,2)?></p>
        <p><?=grapheme_substr($cadena,-3)?></p>
    <h2>substr_count()</h2>
        <p><?=substr_count($cadena,"a")?></p>
    <h2>strlen()</h2>
        <p><?=mb_strlen($cadena)?></p>
        <p><?=strlen("camión")?></p>
        <p>Con grapheme_strlen <?=grapheme_strlen("camión");?></p>
    <h2>strpos()</h2>
        <p><?=strpos($cadena, " ")?></p>
        <p><?=grapheme_strpos("cañaveral", "ñ")?></p>
        <p><?=grapheme_strpos("😊hola", "l")?></p>
    <h2>mb_str_split()</h2>
    <?
        $array = mb_str_split($cadena);
        echo "<pre>";print_r($array);echo "</pre>";
        $array_rev = array_reverse($array);
        echo "<pre>";print_r($array_rev);echo "</pre>";
        echo implode("",$array_rev);
    ?>
    <h2>trim()</h2>
        <p><?=trim($cadena)?></p>
    <h2>strrev()</h2>
        <p><?=$cadena?></p>
        <p><?=strrev(mb_strtolower($cadena))?></p>
        <p><?=invertir_cadena($cadena);?></p>
        <p><?=invertir_cadena("camión");?></p>
</body>
</html>