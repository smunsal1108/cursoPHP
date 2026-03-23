<?php
class Coche {
    public $marca, $modelo, $color, $combustible, $precio;

    public function __construct($marca, $modelo, $color, $combustible, $precio) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->combustible = $combustible;
        $this->precio = $precio;
    }
}

$archivo = "coches.json";

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    // Crear objeto
    $coche = new Coche(
        trim($_POST['marca']),
        trim($_POST['modelo']),
        trim($_POST['color']),
        trim($_POST['combustible']),
        trim($_POST['precio'])
    );

    // Leer coches existentes
    $coches = file_exists($archivo) ? json_decode(file_get_contents($archivo), true) : [];

    // Añadir nuevo coche (convertido a array)
    $coches[] = $coche;

    // Guardar
    file_put_contents($archivo, json_encode($coches, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}

// Mostrar coches
if (file_exists($archivo)) {
    $coches = json_decode(file_get_contents($archivo), true);

    echo "<h2>Listado de coches</h2>";

    foreach ($coches as $c) {
        echo "<p>";
        echo "Marca: {$c['marca']} | ";
        echo "Modelo: {$c['modelo']} | ";
        echo "Color: {$c['color']} | ";
        echo "Combustible: {$c['combustible']} | ";
        echo "Precio: {$c['precio']} €";
        echo "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio09 - Coche</title>
</head>
<body>

<form method="post" action="">
    <div>
        <label>Marca</label>
        <input type="text" name="marca" required>
    </div>
    <div>
        <label>Modelo</label>
        <input type="text" name="modelo" required>
    </div>
    <div>
        <label>Color</label>
        <input type="text" name="color" required>
    </div>
    <div>
        <label>Combustible</label>
        <input type="text" name="combustible" required>
    </div>
    <div>
        <label>Precio</label>
        <input type="number" name="precio" min="0" required>
    </div>
    <input type="submit" value="Guardar">
</form>

</body>
</html>