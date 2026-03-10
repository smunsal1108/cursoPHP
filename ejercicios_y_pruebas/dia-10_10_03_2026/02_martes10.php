<?php
require_once "../libreriasCreadas/libreriaFicheros.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["fichero"])) {
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    if ($_FILES["fichero"]["error"] == 0) {
        $ruta = $_FILES["fichero"]["tmp_name"];
        leer_pintar_CSV($ruta);
    } else echo "<p>Error en la carga del archivo</p>";
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para coger fichero CSV</title>
</head>
<body>
  <form action="" method="post" enctype="multipart/form-data">
    <div>
        <div>
            <label for="fichero">Suba el fichero a tratar</label>
            <!-- <input type="file" name="fichero" id="fichero" required accept=".csv"> -->
            <!-- <input type="file" name="fichero[]" multiple id="fichero" required accept=".csv"> -->
        </div>
        
        <input type="submit" value="Subir fichero">
    </div>
  </form>  
</body>
</html>