<?php
class IMC {
    private $nombre;
    private $peso;
    private $altura;

    public function __construct($nombre, $peso, $altura){
        $this->nombre = $nombre;
        $this->peso = $peso;
        $this->altura = $altura/100;
    }

    public function calculo_IMC(){
        return $this->peso / ($this->altura ** 2);
    }

    public function mostrar_resultado(){
        $imc = round($this->calculo_IMC(), 2);
        return $this->nombre." tienes un IMC = ".$imc;
    }
}

// Inicializamos la variable resultado vacía
$resultado = "";

// Comprobamos si el formulario fue enviado
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $nombre = htmlspecialchars(trim($_POST["nombre"] ?? ''));
    $peso   = htmlspecialchars($_POST["peso"] ?? '');
    $altura = htmlspecialchars($_POST["altura"] ?? '');

    if($nombre && $peso>0 && $altura>0){
        $cliente = new IMC($nombre, $peso, $altura);
        $resultado = $cliente->mostrar_resultado();
    } else {
        $resultado = "Por favor, rellena todos los campos correctamente.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario IMC - POO</title>
</head>
<body>
    <h1>Formulario IMC</h1>
    <form action="" method="post">
        <fieldset><legend>ÍNDICE DE MASA CORPORAL</legend>
        <p>Escriba su peso en kilogramos y su altura en centímetros para calcular su índice de masa corporal</p>
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        <div>
            <input type="hidden" name="opcion" value="1">
            <label title="Introduce el peso en kg" for="peso">Peso </label>
            <input type="number" min="0" id="peso" name="peso" step="0.1" required> kg.
        </div>
        <div>
            <label title="Introduce la altura en cm" for="altura">Altura</label>
            <input type="number" min="0" id="altura" name="altura" step="0.1"> cm.
        </div>
        <div>
            <input type="submit" value="Calcular">
            <input type="reset" value="Borrar">
        </div>
        </fieldset>
    </form>
    <?php if($resultado): ?>
        <h2>Resultados</h2>
        <p><?=$resultado;?></p>
    <?php endif; ?>
</body>
</html>