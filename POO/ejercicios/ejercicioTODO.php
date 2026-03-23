<?php
require_once "Vehiculo.php";
require_once "Coche.php";
require_once "Bicicleta.php";

if ($_SERVER["REQUEST_METHOD"]=="POST"){

    if ($_POST['tipo'] == "coche") {
        $vehiculo = new Coche(
            $_POST['marca'],
            $_POST['modelo'],
            $_POST['color'],
            $_POST['combustible'],
            $_POST['precio']
        );
    } else {
        $vehiculo = new Bicicleta(trim($_POST['tipo_bici']));
    }

    $vehiculo->acelerar();

    $archivo = "vehiculos.json";
    $datos = file_exists($archivo) ? json_decode(file_get_contents($archivo), true) : [];

    $datos[] = $vehiculo->toArray();

    file_put_contents($archivo, json_encode($datos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}

function mostrarVehiculos($archivo) {
    if (!file_exists($archivo)) return;

    $datos = json_decode(file_get_contents($archivo), true);

    foreach ($datos as $dato) {
        if ($dato['tipo'] == "coche") {
            $objeto = new Coche(
                $dato['marca'], 
                $dato['modelo'], 
                $dato['color'], 
                $dato['combustible'], 
                $dato['precio']
            );
        } else {
            $objeto = new Bicicleta($dato['tipo_bici']);
        }

        $objeto->acelerar();
        $objeto->mostrar();
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EjercicioTODO - Coche</title>
</head>
<body>
<h1>Crear Vehículo</h1>
<form method="post" action="">
    <label for="tipo"Tipo></label>
    <select name="tipo" id="tipo">
        <option value="coche">Coche</option>
        <option value="bicicleta">Bicicleta</option>
    </select>

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
    <div>
        <label for="tipo_bici">Tipo de bicicleta </label>
        <input type="text" name="tipo_bici" id="tipo_bici" required>
    </div>
    <input type="submit" value="Guardar">
</form>

<h2>Vehículos guardados</h2>

<?php
mostrarVehiculos("vehiculos.json");
?>
    
</body>
</html>