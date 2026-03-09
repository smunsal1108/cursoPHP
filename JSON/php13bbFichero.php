<?php
include "../jueves26_externo.php";
$cadena = file_get_contents("acceso.json"); #fase1
$usuarios = json_decode($cadena, true); #fase2
pintar_tabla($usuarios);
echo "<h2>Añadir un nuevo usuario</h2>";

$indices = array_column($usuarios, "id"); // creo un array con todos los íd (para que cuando incluya no se repitan)
$nombres_usuarios = array_column($usuarios, "usuario");
$nuevo_nombre = "casimiro";
if (!array_search($nuevo_nombre, $nombres_usuarios)) { // evito usuario repetido
        $nuevo_usuario = [
            "id" => max($indices)+1,
            "usuario"=>$nuevo_nombre,
            "clave"=> "89ur412"
        ];
        array_push($usuarios,$nuevo_usuario); #fase3 añadir al array    de arrays
        pintar_tabla($usuarios);
        $jsonData = json_encode($usuarios, JSON_PRETTY_PRINT); #fase4   convertir array de arrays en JSON
        file_put_contents("accesos.json", $jsonData);
    } else {
    echo "<p>Usuario repetido</p>";
}



?>