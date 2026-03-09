<?php
require_once "libreriaFormularios.php";
function campo($tipo,$nombre,$label,$extra=""){
    $valor=$_POST[$nombre] ?? "";
    $valor=htmlspecialchars($valor);

    echo "<div>";
    echo "<label for='$nombre'>$label </label>";
    echo "<input type='$tipo' id='$nombre' name='$nombre' value='$valor' $extra>";
    echo "</div>";
}
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $opcion=$_POST["opcion"] ?? "";
    switch($opcion){
        case "1":
            $peso=isset($_POST["peso"]) ? limpiar($_POST["peso"]) : "";
            $altura=isset($_POST["altura"]) ? limpiar($_POST["altura"]) : "";
            if (validarFloat($peso) && validarFloat($altura) && $peso>0 && $altura>0)   
                $resultado1=calcular_IMC((float)$peso,(float)$altura);
            else $error1="Peso y altura incorrectos";
            break;
        case "2":
            $clave1=isset($_POST["clave1"]) ? limpiar($_POST["clave1"]) : "";
            $clave2=isset($_POST["clave2"]) ? limpiar($_POST["clave2"]) : "";
            if(!validarVacio($clave1) || !validarVacio($clave2)){
                $error2="Las claves no pueden estar vacías";
            }
            else{
                $resultado2=compararCadenas($clave1,$clave2);
            }
            break;
        case "3":
            $numero=isset($_POST["numero"]) ? limpiar($_POST["numero"]) : "";
            if(validarEntero($numero) && $numero>=0 && $numero<=10000){
                $numero=(int)$numero;
                $resultado3=bisiesto($numero);
            }
            else{
                $error3="El año debe ser un entero entre 0 y 10000";
            }
            break;
        case "4":
            $frase=isset($_POST["frase"]) ? limpiar($_POST["frase"]) : "";
            if(validarVacio($frase)){
                $resultado4=palindromo($frase);
            }
            else{
                $error4="Debe escribir una frase";
            }
            break;
        case "5":
            if(isset($_POST["form"])){
                $tabla=pintar_vacios($_POST["form"]);
            }
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="viernes06_3.css"> -->
    <title>Múltiples formularios</title>
</head>
<body>
    <h1>Múltiples formularios</h1>
    <form action="" method="post">
        <fieldset><legend>ÍNDICE DE MASA CORPORAL</legend>
        <p>Escriba su peso en kilogramos y su altura en centímetros para calcular su índice de masa corporal</p>
        <?php campo("number","peso","Peso ","min='0' required placeholder='en kg.'"); ?> 
        <?php campo("number","altura","Altura ","min='0' required placeholder='en cm.'"); ?> 
        <div>
            <input type="submit" value="Calcular">
            <input type="reset" value="Borrar">
        </div>
        <p>
            <?=isset($resultado1)?"El IMC es $resultado1":""?>
            <?=isset($error1)?$error1:""?>
        </p>
        </fieldset>
    </form>
    <form action="" method="post">
        <fieldset><legend>COMPARAR CLAVES</legend>
        <p>Escriba dos claves iguales</p>
        <input type="hidden" name="opcion" value="2">
        <?php campo("password","clave1","clave1 ","required"); ?>
        <?php campo("password","clave2","clave2 ","required"); ?>
         <div>
            <input type="submit" value="Comprobar">
            <input type="reset" value="Borrar">
        </div>
        <p>
            <?=isset($resultado2)?$resultado2:""?>
            <?=isset($error2)?$error2:""?>
        </p>
        </fieldset>
    </form>
    <form action="" method="post">
        <fieldset><legend>CALCULADORA DE AÑOS BISIESTOS</legend>
        <p>Escriba un año entre 0 y 10000</p>
        <input type="hidden" name="opcion" value="3">
        <?php campo("number","numero","numero","required max='10000'"); ?>
        <div>
            <input type="submit" value="Comprobar">
            <input type="reset" value="Borrar">
        </div>
        <p>
            <?=isset($resultado3)?$resultado3:""?>
            <?=isset($error3)?$error3:""?>
        </p>
        </fieldset>
    </form>
    <form action="" method="post">
        <fieldset><legend>COMPROBAR PALÍNDROMOS</legend>
        <p>Escriba una frase</p>
        <input type="hidden" name="opcion" value="4">
        <?php campo("text","frase","frase","required"); ?>
        <div>
            <input type="submit" value="Comprobar">
            <input type="reset" value="Borrar">
        </div>
        <p>
            <?=isset($resultado4)?$resultado4:""?>
            <?=isset($error4)?$error4:""?>
        </p>
        </fieldset>
    </form>
    <form action="" method="post">
        <fieldset><legend>MOSTRAR CAMPOS VACÍOS</legend>
        <p>Rellene el formulario. No hay atributos required</p>
        <input type="hidden" name="opcion" value="5">
        <div>
            <label title="Introduce una frase" for="texto">Frase </label>
            <input type="text" id="texto" name="form[texto]">
            <label title="Introduce una clave" for="clave">Clave </label>
            <input type="password"  id="clave" name="form[clave]">
        </div>
        <div>
            <input type="hidden" name="form[turno]" value="">
            <input type="radio" name="form[turno]" value="mañana" id="mañana">
            <label for="mañana">Mañana</label>
            <input type="radio" name="form[turno]" value="tarde" id="tarde">
            <label for="tarde">Tarde</label>
            <input type="radio" name="form[turno]" value="indiferente"id="indiferente">
            <label for="indiferente">Indiferente</label>
        </div>
        <div>
            <input type="hidden" name="form[oficinas]" value="">
            <select name="form[oficinas][]" multiple>
                <option disabled>Elige una oficina</option>
                <option value="triana">Triana</option>
                <option value="nervion">Nervión</option>
                <option value="pinomontano">Pino Montano</option>
            </select>
        </div>
        <div>
            <label for="color">Color del coche</label>
            <input type="color" name="form[color]" id="color">
            <label for="numHijos">Número de hijos</label>
            <input type="number" name="form[numHijos]" id="numHijos" min="0"size="3">
        </div>
        <div>
            <input type="submit" value="Mostrar">
            <input type="reset" value="Borrar">
        </div>
        </fieldset>
    </form>
</body>
</html>