<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 2</title>
</head>
<body>
<?php
    session_start();
    $id=$_SESSION["id"];
    $nombre=$_SESSION["nombre"];
    $nivel=$_SESSION["nivel"];
   echo "Hola $nombre";
   echo "<p><a href='PHP20accesoPag1.php'>Ir a la primera página del sitio web</a></p>";
   
?>
</body>
</html>