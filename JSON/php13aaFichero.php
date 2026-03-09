<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 13aaFichero</title>
</head>
<body>
<?
require_once "../jueves26_externo.php";
$cadena = file_get_contents("acceso.json"); // extraigo json en una cadena
echo $cadena;
echo "<hr>";    
$usuarios= json_decode($cadena, true); //interpreta
// es un array donde cada elemento es otro array (cada registro)
print ("<pre>");
print_r($usuarios);
print("</pre>");
echo "<hr>";
pintar_tabla($usuarios);
?>
</body>
</html>