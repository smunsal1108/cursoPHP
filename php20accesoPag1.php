<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quienes somos  PAG1</title>
</head>
<body>
    <?php
    // Iniciamos sesión
    session_start();
    echo "<h1>SITIO WEB de CASIMIRO YNOTEVEO</h1>";
// recuperamos las variables de la sesión
    $nombre= $_SESSION["nombre"];   
    $nivel = $_SESSION["nivel"];


    echo "<table>";
    echo "<caption>$nombre tienes un nivel $nivel de acceso </caption>";
    if ($nivel==31) {
        echo "<tr><th>ID</th><th>Usuario</th><th>Clave</th><th>Nombre</th></tr>";
    } else 
    {
        echo "<tr><th>ID</th><th>Nombre</th></tr>";
    }
    $acceso = file_get_contents("json/acceso.json");
    $listaAcceso= json_decode($acceso, true);
    foreach($listaAcceso as $registro){
        if ($nivel==31) {
            echo "<tr><td>$registro[id]</td><td>$registro[usuario]</td><td>$registro[clave]</td><td>$registro[nombre]</td></tr>";
        }
        else {

            echo "<tr><td>$registro[id]</td><td>$registro[nombre]</td></tr>";
        }
}
    echo "</table>";
    echo "<p><a href='PHP20acceso.html'>Volver al formulario de acceso</a></p>"; 
    echo "<p><a href='PHP20accesoPag2.php'>Ir a otra página del sitio web</a></p>"; 
    ?>

</body>
</html>