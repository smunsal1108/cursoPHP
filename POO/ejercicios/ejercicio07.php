<!-- 
Ejercicio 7: Guardar objetos en JSON
Instrucciones:
1.	Cuando se cree un coche desde el formulario, convierte el objeto a JSON con json_encode().
2.	Guarda el JSON en un archivo coches.json.
3.	Permite añadir varios coches sin sobrescribir los anteriores. -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario coches</title>
</head>
<body>
    <form method="post" action="">
        <div>
            <label for="marca">Marca </label>
            <input type="text" name="marca" id="marca" required>
        </div>
        <div>
            <label for="modelo">Modelo </label>
            <input type="text" name="modelo" id="modelo" required>
        </div>
        <div>
            <label for="color">Color </label>
            <input type="text" name="color" id="color" required>
        </div>
        <input type="submit" value="Enviar">
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $nuevoCoche = [
        "marca" => trim($_POST['marca']),
        "modelo" => trim($_POST['modelo']),
        "color" => trim($_POST['color'])
    ];

    $archivo = "coches.json";

    if (file_exists($archivo)) {
        $coches = json_decode(file_get_contents($archivo), true);
    } else {
        $coches = [];
    }

    $coches[] = $nuevoCoche; // añadir como si se usara array_push($nuevoCoche)

    file_put_contents($archivo, json_encode($coches, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}
?>