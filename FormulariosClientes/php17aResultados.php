
<?
print "<pre>";
print_r($_REQUEST);
print "</pre>";
$nombre = htmlspecialchars($_REQUEST["nombre"]);
$sinNum = preg_replace('/[0-9]+/', "", $nombre);
echo "<p>$sinNum </p>";
//$sinNum = trim($sinNum);
if ($nombre!=$sinNum)  {
    echo "El nombre no puede contener números";
    $_REQUEST["nombre"] = $sinNum;
    print "<pre>";
    print_r($_REQUEST);
    print "</pre>";
}

if (is_int($_REQUEST["numero"])) echo "es un número";
else echo "es una cadena";

if (empty($_REQUEST["vehiculo1"])) echo "<p>No usará el coche</p>";
if (empty($_REQUEST["vehiculo2"])) echo "<p>No usará la bicicleta</p>";
echo "<p><a href='php17aFormulario.html'>Volver al Formulario</a></p>";

foreach ($_REQUEST as $variable => $contenido){ //$variable es el índice y $contenido es el valor
    if (empty($contenido)) echo "<p>Has dejado vacío el campo $variable</p>";
}
?>