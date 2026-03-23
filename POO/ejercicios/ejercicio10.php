<!-- Ejercicio 10: Enviar y recibir JSON via formulario
Instrucciones:
1.	Crea un formulario que envíe los datos del coche.
2.	Al recibir el POST, crea un objeto Coche y devuelve un JSON con los datos completos.
 -->
<?php
class Coche {
    public $marca;
    public $modelo;
    public $color;

    public function __construct($marca, $modelo, $color) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
    }
}

// 🔹 Si se envía el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Crear objeto Coche
    $coche = new Coche(
        $_POST['marca'],
        $_POST['modelo'],
        $_POST['color']
    );

    header('Content-Type: application/json');
    echo json_encode($coche, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    exit; 
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio10 - Coche</title>
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
    <div>
        <label for="combustible">Combustible </label>
        <input type="text" name="combustible" id="combustible" required>
    </div>
    <div>
        <label for="precio">Precio </label>
        <input type="number" name="precio" id="precio" min="0" required>
    </div>
    <input type="submit" value="Guardar">
</form>
    
</body>
</html>