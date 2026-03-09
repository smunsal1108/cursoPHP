<?
$carrito = [
    ["producto" => "Libro", "precio" => 10],
    ["producto" => "Lápiz", "precio" => 2],
    ["producto" => "Cuaderno", "precio" => 5]
];

if (count($carrito)==0){
    echo "<p>Carrito vacío</p>";
} else {
    // calcular el total del carrito
   /*  $total=0;
    foreach ($carrito as $producto){
        $total += $producto["precio"];
    }
    echo "<p>Total del carrito: $total</p>";
    $mediaRedondeada = round($total/count($carrito),2);
    echo "<p>Pomedio del gasto por producto:$mediaRedondeada</p>"; */

    $total = array_reduce($carrito,fn($acumulador, $producto)=> $acumulador + $producto["precio"],0);

    echo "<p>Total del carrito: $total</p>";
    $mediaRedondeada = round($total/count($carrito),2);
    echo "<p>Pomedio del gasto por producto:$mediaRedondeada</p>";

}
?>