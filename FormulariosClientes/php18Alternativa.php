    <?php
    require_once "libreriaFormularios.php";
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $campos=explode(",",$_POST["campos"]);
        foreach($campos as $campo){
            $datos[$campo] = $_POST[$campo] ?? null;
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
        <h1>Alternativa 1</h1>
        <form action="" method="post">
            <fieldset><legend>MOSTRAR CAMPOS VACÍOS</legend>
            <p>Rellene el formulario. No hay atributos required</p>
            <input type="hidden" name="campos" value="texto,clave,turno,oficinas,color,numHijos">
            <div>
                <label title="Introduce una frase" for="texto">Frase </label>
                <input type="text" id="texto" name="texto">
                <label title="Introduce una clave" for="clave">Clave </label>
                <input type="password"  id="clave" name="clave">
            </div>
            <div>
                <input type="radio" name="turno" value="mañana" id="mañana">
                <label for="mañana">Mañana</label>
                <input type="radio" name="turno" value="tarde" id="tarde">
                <label for="tarde">Tarde</label>
                <input type="radio" name="turno" value="indiferente"id="indiferente">
                <label for="indiferente">Indiferente</label>
            </div>
            <div>
                <select name="oficinas[]" multiple>
                    <option disabled>Elige una oficina</option>
                    <option value="triana">Triana</option>
                    <option value="nervion">Nervión</option>
                    <option value="pinomontano">Pino Montano</option>
                </select>
            </div>
            <div>
                <label for="color">Color del coche</label>
                <input type="color" name="color" id="color">
                <label for="numHijos">Número de hijos</label>
                <input type="number" name="numHijos" id="numHijos" min="0"size="3">
            </div>
            <div>
                <input type="submit" value="Mostrar">
                <input type="reset" value="Borrar">
            </div>
            </fieldset>
            <p><?=isset($campos)?pintar_vacios($datos):"";?></p>
        </form>
    </body>
    </html>