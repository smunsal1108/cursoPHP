<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 13aFichero</title>
</head>
<body>
<?
require_once "../jueves26_externo.php";
// Leemos un fichero de texto
$cadena = file_get_contents("fichero.txt"); // extraigo contenido textual en una cadena
echo "<p>$cadena</p>";
echo ("<HR>");
echo nl2br($cadena); // para convertir los /n en /n reales
echo ("<HR>");
echo "<pre>$cadena</pre>";
$cadena = file_get_contents("datos.csv"); 
echo "<p>$cadena</p>";
echo ("<HR>");
echo nl2br($cadena); // para convertir los /n en /n reales
echo ("<HR>");
echo "<pre>$cadena</pre>";

$lineas = array_map(
    fn($l)=>explode(";",$l),   // función que se aplicará a cada línea que es un elemento del array
    explode("\n",$cadena)      // array sobre el que se aplica -- crea un array donde cada elemento es una línea
);
$cabecera=array_shift($lineas); // extrae la cabecera, es decir, extraer el elemento [0] del array

$registros=array_map(
    fn($fila)=>array_combine($cabecera,$fila),
    $lineas
);

pintar_tabla($registros);

?>

</body>
</html>