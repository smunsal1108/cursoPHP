<?php 

$carrito = [
    ["producto" => "Libro", "precio" => 10],
    ["producto" => "Lápiz", "precio" => 2],
    ["producto" => "Cuaderno", "precio" => 5]
];



if ($carrito == 0) {
    echo "<p>Carrito vacío</p>";
} else {

    // Calcular el total del carrito con foreach

    $total = 0; //Definimos una variable acumuladora, que irá incrementando su valor
    foreach ($carrito as $producto) { //hacemos que nos saque cada valor del array asociativo
        $total += $producto["precio"]; //de la variable $producto["precio"] sacamos el valor del elemento especificado y lo sumamos a la variable $total
    }

    echo "<p>Total del carrito: $total</p>";
    echo "<p>Promedio del gasto por producto: ".round($total/count($carrito), 2)."</p>";
    
    echo "<hr>";

    // Calcular el total del carrito con array_reduce

    $total = array_reduce($carrito, 
    fn($acumulador, $producto) => $acumulador + $producto["precio"] ,0);

    echo "<p>Total del carrito: $total</p>";
    echo "<p>Promedio del gasto por producto: ".round($total/count($carrito), 2)."</p>";
}



?>