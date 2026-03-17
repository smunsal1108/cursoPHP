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
        agregar_campo_json($fichero, "email"); // SE HA DE HACER LA LLAMADA A LA FUNCIÓN PASANDOLE $fichero, "campo"
        $registros = leer_json($fichero);
        $opcion = $_GET["opcion"] ?? "listar";

        switch ($opcion){
            case "listar":
                ?>
                <form action="" method="post">
                    <label for="buscar">Buscar usuario</label>
                    <input type="text" name="buscar" id="buscar">
                    <?foreach ($registros[0] as $clave => $campo) {?>
                        <input type="checkbox" name="campos[]" id="<?=$clave?>" value="<?=$clave?>">
                        <label for="<?=$clave?>"><?=$clave?></label>
                    <?}?>
                    <input type="submit" value="Buscar">
                    <small>Para listado completo dejar en blanco</small>
                </form>
                <?
                if (!empty($_POST["buscar"])) {
                    $texto = htmlspecialchars(trim($_POST["buscar"]));
                    $registros = buscar_parcial_en_json_registros($texto, "usuario", $registros);
                }
                usort(
                    $registros,
                    function($a, $b) { return strcmp($a["usuario"], $b["usuario"]); }
                );

                if (empty($_POST["campos"])) $campos_seleccionados = ["id", "usuario", "fecha", "email"];
                else $campos_seleccionados = $_POST["campos"];
                
                pintar_tabla($registros, "id", $campos_seleccionados);
                echo "<p>Total de registros encontrados: ".count($registros)."</p>";
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
                        $email = htmlspecialchars(trim($_POST["email"]));
                        if (!buscar_en_json($email, "email", $fichero) || $email == $encontrado["email"]) {
                            $nuevo = [
                                "usuario"=>$usuario,
                                "clave"=>password_hash($clave, PASSWORD_DEFAULT),
                                "fecha"=>date("d-m-Y"),
                                "email"=> $email
                            ];
                            insertar_registro_json($nuevo, $fichero, "id");
                            header("Location:index.php");
                            exit;
                        } else {
                            echo "<p>No se admiten emails repetidos. Por favor introduzca otro email</p>";    
                        }
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
                    <div>
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required pattern="^[a-z0-9]+([._%+-]?[a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)+$">
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
                        $emailNuevo = htmlspecialchars(trim($_POST["email"]));
                        if (!buscar_en_json($email, "email", $fichero) || $email == $encontrado["email"]) {
                            actualizar_registros_json("id", $id, "usuario", $usuarioNuevo, $fichero);

                            if (!empty($_POST["clave"])) {
                                actualizar_registros_json("id", $id, "clave", password_hash($_POST["clave"], PASSWORD_DEFAULT), $fichero);
                            }

                            actualizar_registros_json("id", $id, "email", $emailNuevo, $fichero);
                            header("Location:index.php");
                            exit;
                        } else {
                            echo "<p>No se admiten emails repetidos. Por favor introduzca otro email</p>";
                        }
                    } else {
                        echo "<p>No se admiten usuarios repetidos</p>";
                    }
                }                
                ?>
                <form action="?opcion=editar&campoRefer=<?=$id?>" method="post">
                    <fieldset><legend>Modificar registro</legend>
                        <div>
                            <label for="usuario">Usuario</label>
                            <input type="text" id="usuario" name="usuario" required readonly value="<?=$encontrado["usuario"]??""?>">
                        </div>
                        <div>
                            <label for="clave">Clave (password)</label>
                            <input type="password" id="clave" name="clave">
                        </div>
                        <div>
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" value="<?=$encontrado["email"]??""?>" required pattern="^[a-z0-9]+([._%+-]?[a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)+$">
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