<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contenido = htmlspecialchars($_POST["contenido"]) ?? "";
    $modo = $_POST["modo"] ?? "";
    if (empty($contenido)) echo "<p>No has escrito nada</p>";
    else if ($modo == "agregar") {
        file_put_contents("../../JSON/fichero.txt", PHP_EOL.$contenido, FILE_APPEND);
    } else {
        file_put_contents("../../JSON/fichero.txt", $contenido);
    }
    $contenidoFichero = file_get_contents("../../JSON/fichero.txt");
    echo "<pre>";
    print_r($contenidoFichero);
    echo "</pre>";

}


/* $cadena = file_get_contents("../../JSON/fichero.txt");
echo "<pre>";
print_r($cadena);
echo "</pre>";
 */
//$nuevo = PHP_EOL."Hola mundo cruel";
//$cadena = file_put_contents("../../JSON/fichero.txt", $nuevo); //sustituye todo
//file_put_contents("../../JSON/fichero.txt", $nuevo, FILE_APPEND); // añade
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir / Sustituir</title>
</head>
<body>
    <form action="" method="post">
            <div>
                <textarea name="contenido" id="contenido" placeholder="Escribe lo que quieras" cols="50" rows="5"></textarea>
            </div>
            <div>
                <input type="radio" name="modo" id="agregar" value="agregar" checked>
                <label for="modo">Agregar contenido</label>
                <input type="radio" name="modo" id="sustituir" value="sustituir" checked>
                <label for="modo">Sustituir contenido</label>
            </div>

        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>