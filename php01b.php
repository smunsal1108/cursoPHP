<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php01b</title>
</head>
<body>
    <?
    include("externo.php");
    echo '<h1>Probando include()</h1>';
    echo "<p>Hola $nombre</p>";
    echo "<p>".palindromo('sara baras')."</p>";
    echo "<p>palindromo('sara baras')</p>";
    echo "<p>".compararCadenas("Casimiro","Casimira")."</p>";
    ?>
    <!-- En la configuración de "php.ini" existe un atributo llamado "include_path" que nos permite indicar una o varias rutas para almacenar estos archivos externos. PHP se encargara de buscar ahí los archivos externos en el orden que se hayan declarado los directorios.-->
</body>
</html>