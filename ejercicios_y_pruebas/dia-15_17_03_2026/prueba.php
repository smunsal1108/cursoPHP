<?php

$_POST["edad"] = 1;
echo "<pre>";
print_r($_POST["edad"]);
echo "</pre>";
 
if (!empty($_POST["edad"])) { 
if ($_POST["edad"] > 18) { 
echo "Mayor de edad"; 
} else { 
echo "Menor de edad"; 
} 
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="" method="post">
        <label for="edad">Edad</label>
        <input type="number" name="edad" id="edad">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>