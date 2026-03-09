<?
$array = ["hola", "viernes", "casimiro", "carnavales"];
$array2 = array_map(function ($array) {return ucwords($array);}, $array);    

//$array2 = array_map(fn ($array)=> ucwords($array), $array);

echo "<pre>";
print_r ($array2);
echo "</pre>";


$carrito = [
    ["producto" => "Libro", "precio" => 23],
    ["producto" => "Lápiz", "precio" => 1.2],
    ["producto" => "Cuaderno", "precio" => 4.5]
];
$total = array_reduce(
    $carrito, 
    function($acumulador, $registro) {
        return $acumulador + $registro["precio"];
    },
    0);

echo $total;
echo "<hr>";
## array_reduce() hace lo mismo pero en estilo funcional ##
$total = 0;

foreach ($carrito as $item) {
    $total += $item["precio"];
}
echo $total;
?>