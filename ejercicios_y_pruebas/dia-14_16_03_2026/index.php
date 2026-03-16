<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>CRUD</title>
</head>
<body>
    <h1><a href="index.php">Gestión</a></h1>
    <nav><a href='?opcion=agregar'>Añadir un nuevo usuario</a></nav>
    <?php
        require_once "libreria.php";
        $fichero="acceso.json";
        $registros = leer_json($fichero);
        $opcion = $_GET["opcion"] ?? "listar";

        switch ($opcion){
            case "listar":
                pintar_tabla($registros, "id");
                break;

            case "borrar":
                $id = $_GET["campoRefer"] ?? "";
                borrar_registro_json("id", $id, $fichero);
                header("Location:index.php");
                exit;

            case "agregar":
                if ($_SERVER["REQUEST_METHOD"]=="POST"){
                    $usuario = htmlspecialchars(trim($_POST["usuario"]));
                    $clave = htmlspecialchars(trim($_POST["clave"]));
                    if (!buscar_en_json($usuario, "usuario", $fichero)) {
                        $nuevo = [
                            "usuario"=>$usuario,
                            "clave"=>password_hash($clave, PASSWORD_DEFAULT)
                        ];
                        insertar_registro_json($nuevo, $fichero, "id");
                        header("Location:index.php");
                        exit;
                    } else {
                        echo "<p>No se admiten usuarios repetidos</p>";
                    }
                }
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
                <?php 
                break;

            case "editar":
                $id = $_GET["campoRefer"] ?? "";
                $encontrado = buscar_en_json($id, "id", $fichero);

                if ($_SERVER["REQUEST_METHOD"]=="POST"){
                    $usuarioNuevo = htmlspecialchars(trim($_POST["usuario"]));
                    if (!buscar_en_json($usuarioNuevo, "usuario", $fichero)) {
                        actualizar_registros_json("id", $id, "usuario", $usuarioNuevo, $fichero);

                        if (!empty($_POST["clave"])) {
                            actualizar_registros_json("id", $id, "clave", password_hash($_POST["clave"], PASSWORD_DEFAULT), $fichero);
                        }

                        header("Location:index.php");
                        exit;
                    } else {
                        echo "<p>No se admiten usuarios repetidos</p>";
                    }
                }                
                ?>
                <form action="?opcion=editar&campoRefer=<?=$id?>" method="post">
                    <fieldset><legend>Modificar registro</legend>
                        <div>
                            <label for="usuario">Usuario</label>
                            <input type="text" id="usuario" name="usuario" required value="<?=$encontrado["usuario"]??""?>">
                        </div>
                        <div>
                            <label for="clave">Clave (password)</label>
                            <input type="password" id="clave" name="clave">
                        </div>
                        <input type="submit" value="Modificar">
                    </fieldset>
                </form>
                <?php
                break;
        }
    ?>
</body>
</html>