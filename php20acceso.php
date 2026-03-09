<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    nav>a {
        display:block;
    }
</style>
    <title>Document</title>
</head>
<body>
<?php 
/*
print "<pre>";
print_r($_REQUEST);
print "</pre>";
*/
$usuario = htmlspecialchars($_REQUEST["usuario"]);
$clave = htmlspecialchars($_REQUEST["clave"]);

$bandera=0;
$acceso = file_get_contents("json/acceso.json"); // cadena
$listaAcceso= json_decode($acceso, true);  // array

echo "<h1>SITIO WEB de CASIMIRO YNOTEVEO</h1>";

foreach ($listaAcceso as $registro){  // es un array de arrays
    if ($registro["usuario"]==$usuario && $registro["clave"]==$clave) 
    {
        // hay coincidencia de usuario y clave
        $bandera=1;
        $id=$registro["id"];
        $nombre=$registro["nombre"];
        $nivel=$registro["nivel"];
        echo "<P>BIENVENIDO $nombre</P>";

        // iniciamos sesión
        session_start();
        // cargamos variables en array $_SESSION
        $_SESSION["id"] = $id;
        $_SESSION["nombre"]  = $nombre;
        $_SESSION["nivel"] = $nivel;

        echo "<nav>
        <a href='PHP20accesoPag1.php'>Listados</a>
        <a href='PHP20accesoPag2.php'>Ofertas</a>
        </nav>";
    }
}

if ($bandera==0) {
    echo "<P>EL ACCESO NO HA SIDO POSIBLE. Inténtelo de nuevo</P>";
    echo "<p><a href='PHP20acceso.html'>Volver al formulario de acceso</a></p>";
}

?>
</body>
</html>