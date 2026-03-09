<?php
$lista = [34, 56, 90];
echo "<pre>";print_r($lista);echo"</pre>";
array_push($lista, 120, 230);
echo "<pre>";print_r($lista);echo"</pre>";
$ultimoBorrado = array_pop($lista);
echo "<pre>";print_r($lista);echo"</pre>";
echo "<p>Has quitado el último registro con valor $ultimoBorrado</p>";
$lista[]=500;
echo "<pre>";print_r($lista);echo"</pre>";
array_unshift($lista, 120, 230);
echo "<pre>";print_r($lista);echo"</pre>";
array_shift($lista);
echo "<pre>";print_r($lista);echo"</pre>";

echo "<hr>";
$amigo = [
    "nombre"=>"Casimiro",
    "apellidos"=> "Ynoteveo Pi",
    "edad"=> 24
];
$amigo["ciudad"]="Sevilla";
echo "<pre>";print_r($amigo);echo"</pre>";

$amigos =[
    ["nombre"=>"Casimiro",
    "apellidos"=> "Ynoteveo Pi",
    "edad"=> 24],
    ["nombre"=>"Carolina",
    "apellidos"=> "López Linde",
    "edad"=> 32]
];
echo "<pre>";print_r($amigos);echo"</pre>";
$amigos[]=["nombre"=>"Pepe",
    "apellidos"=> "Torres Pérez",
    "edad"=> 32];
array_push($amigos,["nombre"=>"Pepe",
    "apellidos"=> "Torres Pérez",
    "edad"=> 32]);
echo "<pre>";print_r($amigos);echo"</pre>";

$ciudades = ["Sevilla", "Málaga", "Córdoba"];

$cadenaCiudades = implode(",", $ciudades);
echo "<p>$cadenaCiudades</p>";
$nombre = "Casimiro Ynoteveo Pi";
$array = explode(" ", $nombre);
echo "<pre>";print_r($array);echo"</pre>";

?>