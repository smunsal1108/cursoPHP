<!--Ejercicio 6: Crear un coche desde un formulario
Instrucciones:
1.	Crea un formulario con campos: marca, modelo, color.
2.	Al enviar el formulario, crea un objeto Coche.
3.	Muestra la información del coche usando mostrarCoche().
-->
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
    class Coche {
        public $marca;
        public $modelo;
        public $color;

        public function __construct($marca, $modelo, $color) {
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->color = $color;
        }

        public function mostrarCoche() {
            echo "<p>
            Marca: $this->marca, 
            Modelo: $this->modelo, 
            Color: $this->color
            </p>";
        }
    }

    $coche = new Coche(
        trim($_POST['marca']), 
        trim($_POST['modelo']), 
        trim($_POST['color'])
        );
    $coche->mostrarCoche();
}
?>