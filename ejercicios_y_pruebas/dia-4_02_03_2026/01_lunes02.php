<?php


$lista = [34, 56, 90];
echo "<pre>"; print_r($lista); echo"</pre>";
array_push($lista, 120, 230);
echo "<pre>"; print_r($lista); echo"</pre>";
$ultimoBorrado = array_pop($lista);
echo "<pre>"; print_r($lista); echo"</pre>";

echo "<p>Has quitado el último registro con valor $ultimoBorrado</p>";
$lista[] = 500; //Es lo mismo que array_push, pero solo puede agregar un solo elemento, a diferencia del array_push que puede agregar más de un elemento

echo "<hr>";
echo "<pre>"; print_r($lista); echo"</pre>";
array_unshift($lista, 120, 230);
echo "<pre>"; print_r($lista); echo"</pre>";
array_shift($lista);
echo "<pre>"; print_r($lista); echo"</pre>";

echo "<hr>";
$amigo = [
    "nombre" => "Casimiro",
    "apellidos" => "Ynoteveo Pi",
    "edad" => 24
];

$amigo[]=["ciudad" => "Sevilla"]; //así no se puede añadir una clave al array asociativo
echo "<pre>"; print_r($amigo); echo"</pre>";

$amigo["ciudad"]="Sevilla"; //así SÍ se puede añadir una clave al array asociativo
echo "<pre>"; print_r($amigo); echo"</pre>";

echo "<hr>";

$amigos = [
    ["nombre" => "Casimiro",
    "apellidos" => "Ynoteveo Pi",
    "edad" => 24],
    ["nombre" => "Carolina",
    "apellidos" => "Lopez Linde",
    "edad" => 32]
];
echo "<pre>"; print_r($amigos); echo"</pre>";

$amigos[]=[ //Esta es una forma de añadir al final sin funciones
    "nombre" => "Pepe",
    "apellidos" => "Torre Pérez",
    "edad" => 32
];

array_push($amigos,[ //Esta la misma forma de añadir al final valores a un array, pero con funciones
    "nombre" => "Pepe",
    "apellidos" => "Torre Pérez",
    "edad" => 32
]);
echo "<pre>"; print_r($amigos); echo"</pre>";

echo "<hr>";

$ciudades = ["Sevilla", "Málaga", "Cordoba"];

$cadenaCiudades = implode(",", $ciudades);
echo "<p>$cadenaCiudades</p>";
$nombre = "Casimiro Ynoteveo Pi";
echo "<p>$nombre</p>";
$array = explode(" ", $nombre);
echo "<pre>";print_r($array); echo"</pre>";









?>


