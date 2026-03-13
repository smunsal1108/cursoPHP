<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <h1>Gestión</h1>
    <nav><a href='?opcion=agregar'>Añadir un nuevo usuario</a></nav>
    <?php
        require_once "libreria.php";
        $fichero = "../acceso.json";
        $datos = leer_json($fichero);
        //$datos = buscar_en_json("Censo", "Bandera azul", $fichero);
        $opcion = $_GET["opcion"] ?? "listar";
        switch ($opcion) {
            case "listar":
                pintar_tabla($datos, "usuario");
                break;
            case "borrar":
                $usuario = $_GET["campoRefer"] ?? "";
                borrar_registro_json("usuario", $usuario, $fichero);

                header("Location: index.php");
                break;
            case "agregar":
                pintar_tabla($datos, "usuario");
                ?>
            <form action="?opcion=agregar" method="post">
                <div>
                    <label for="usuario">Usuario</label>
                    <input type="text" id="usuario" name="usuario" required>
                </div>
                <div>
                    <label for="clave">Clave (password)</label>
                    <input type="password" id="clave" name="clave" required>
                </div>

                <input type="submit" value="Añadir">
            </form>
        <?}?>
</body>
</html>