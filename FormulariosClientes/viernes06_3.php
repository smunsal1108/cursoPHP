    <?php
    require_once "libreriaFormularios.php";
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $opcion =$_POST["opcion"];
        switch($opcion) {
            case "1":
                $peso = htmlspecialchars(trim(($_POST["peso"])));
                settype($peso, "double"); 
                $altura = htmlspecialchars(trim($_POST["altura"]));
                settype($altura, "double"); 
                $imc = calcular_IMC($peso, $altura);
                break;
            case "2":
                $clave1 = htmlspecialchars(trim(($_POST["clave1"])));
                $clave2 = htmlspecialchars(trim(($_POST["clave2"])));
                break;
            case "3":
                $numero = htmlspecialchars(trim(($_POST["numero"])));
                settype($numero, "int"); 
                break;
            case "4":
                $frase = htmlspecialchars(trim(($_POST["frase"])));
                break;
            case "5":
                echo "<pre>";
                print_r($_POST);
                echo "</pre>";
                $tabla = pintar_vacios($_POST["form"]);
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
            <div>
                <input type="hidden" name="opcion" value="1">
                <label title="Introduce el peso en kg" for="peso">Peso </label>
                <input type="number" min="0" id="peso" name="peso"       required value="<?=isset($peso)?$peso:""?>"> kg.
            </div>
            <div>
                <label title="Introduce la altura en cm" for="altura">Altura</label>
                <input type="number" min="0" id="altura" name="altura" required value="<?=isset($altura)?$altura:""?>"> cm.
            </div>
            <div>
                <input type="submit" value="Calcular">
                <input type="reset" value="Borrar">
            </div>
            <p><?=isset($imc)?"El IMC es $imc":""?></p>
            </fieldset>
        </form>
        <form action="" method="post">
            <fieldset><legend>COMPARAR CLAVES</legend>
            <p>Escriba dos claves iguales</p>
            <input type="hidden" name="opcion" value="2">
            <div>
                <div>
                    <label title="Introduce una clave" for="clave1">Clave1 </label>
                    <input type="password" id="clave1" name="clave1" required value="<?=isset($clave1)?$clave1:""?>">
                </div>
                <div>
                    <label title="Introduce otra clave" for="clave2">Clave2 </label>
                    <input type="password" id="clave2" name="clave2" required value="<?=isset($clave2)?$clave2:""?>">
                </div>
            </div>
            <div>
                <input type="submit" value="Comprobar">
                <input type="reset" value="Borrar">
            </div>
            <p><?=isset($clave1)?compararCadenas($clave1,$clave2):""?></p>
            </fieldset>
        </form>
        <form action="" method="post">
            <fieldset><legend>CALCULADORA DE AÑOS BISIESTOS</legend>
            <p>Escriba un año entre 0 y 10000</p>
            <input type="hidden" name="opcion" value="3">
            <div>
                <label title="Introduce el año" for="numero">Año </label>
                <input type="number" min="0" max="10000" id="numero" name="numero" required value="<?=isset($numero)?$numero:""?>">
            </div>
            <div>
                <input type="submit" value="Comprobar">
                <input type="reset" value="Borrar">
            </div>
            <p><?=isset($numero)?bisiesto($numero):""?></p>
            </fieldset>
        </form>
        <form action="" method="post">
            <fieldset><legend>COMPROBAR PALÍNDROMOS</legend>
            <p>Escriba una frase</p>
            <input type="hidden" name="opcion" value="4">
            <label title="Introduce una frase" for="frase">Frase </label>
            <input type="text" id="frase" name="frase"  required value="<?=isset($frase)?$frase:""?>">
            <div>
                <input type="submit" value="Comprobar">
                <input type="reset" value="Borrar">
            </div>
            <p><?=isset($frase)?palindromo($frase):""?></p>
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