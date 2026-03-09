<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario PHP unificado</title>
    <link rel="stylesheet" href="formularioBasicoMismoDoc.css">
</head><body>

<h1>Formulario y procesamiento en un solo archivo</h1>
<?
if($_SERVER["REQUEST_METHOD"]=="POST") {
    /* también podría preguntarse por  !empty($_POST)  o ambas aunque en la mayoría de los casos es redudante. El REQUEST_METHOD es normalmente suficiente.
    También podría preguntarse por 
    if(isset($_POST["submit"])){
    } aunque esto implicaría <input type="submit" name="submit" value="Enviar">
    */
/*
Si es "POST", significa que el navegador ha hecho una petición POST, aunque:El formulario esté vacío, No haya inputs o todos los campos estén vacíos. Es decir, el método POST es independiente de que haya datos o no.
*/
    $nombre = htmlspecialchars($_POST["nombre"]);
    $clave  = htmlspecialchars($_POST["clave"]);
?>
    <div class="resultado">
        <h2>Datos recibidos:</h2>
        <p>Nombre enviado: <? echo $nombre; ?></p>
        <p>Clave enviada: <? echo $clave; ?></p>
        <p><a href="formularioBasicoMismoDoc.php">Volver al formulario</a></p>
    </div>

<?} else {?>

    <form action="formularioBasicoMismoDoc.php" method="post">
        <div class="campo">
            <label for="nombre">Escriba su nombre</label>
            <input id="nombre" type="text" name="nombre" required>
        </div>

        <div class="campo">
            <label for="clave">Escriba la clave</label>
            <input id="clave" type="password" name="clave" required>
        </div>

        <div class="campo">
            <input type="submit" value="Enviar">
        </div>
    </form>
<?}?>

</body>
</html>
