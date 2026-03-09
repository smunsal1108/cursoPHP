<?
function login($usuario, $clave) {
    $usuarioBD ="pepito56";
    $claveBD = "rt980";
    if ($usuario == $usuarioBD && $clave == $claveBD) {
        return [
            "estado" => true,
            "mensaje" => "Login correcto. Bienvenido $usuario"
        ];
    }
    return [ // esto será lo que devueva si no hace el return anterior
        "estado" => false,
        "mensaje" => "Usuario o contraseña incorrectos"
    ];
}


$resultado = login("pepito56", "rt980");
// Desestructuración asociativa 
["estado" => $estado, "mensaje" => $mensaje] = $resultado;
echo $mensaje;

// puede usarse un foreach
foreach ($resultado as $dato){
    echo "<p>$dato</p>";
}
echo "<p>{$resultado["mensaje"]}</p>";
echo "<p>$mensaje</p>";




?>