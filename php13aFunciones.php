<?
echo "<h1>Funciones</h1>";
// Funciones definidas por el usuario
echo "<h2>Funciones definidas por el usuario</h2>";
function sumar($a, $b) {
    return $a + $b;
}
$resultado = sumar(2, 3);
echo "<p>$resultado</p>"; 
echo "<p>".sumar(4,6)."</p>"; 


// Funciones integradas
echo "<h2>Funciones integradas</h2>";
$longitud = strlen("Hola, mundo!");
echo "Tiene $longitud caracteres"; 

// Funciones anónimas
echo "<h2>Funciones anónimas</h2>";
$saludo = function($nombre) {
    echo "¡Hola $nombre !";
};
$saludo("Juan");

// sin usar función anónima
function saludar($nombre){
    echo "¡Hola $nombre !";
}
saludar("Pepe");


// Funciones de retorno de llamada (callbacks)
echo "<h2>Funciones de retorno de llamada</h2>";
function dosPrimeros($cadena) {
    return substr($cadena,0,2);
}

echo dosPrimeros("Juanito");
echo "<hr>";

$codigos = ["41005", "41012", "32001", "28010"];
// array_map recorre el array ejecutando la función indicada en cada elemento
$resultado = array_map("dosPrimeros", $codigos);
print "<pre>";print_r($resultado);print "</pre>";


// Funciones flecha (arrow)
echo "<h2>Funciones flecha</h2>";
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
echo "<pre>";
print_r($numeros);
echo "</pre>";
// Usamos una arrow function para filtrar números pares
// La función devuelve $num cuando cumple la condición (es decir, cuando $num % 2 == 0 da true).
$numerosPares = array_filter($numeros, fn($num) => $num % 2 == 0);
echo "<pre>";
print_r($numerosPares);
echo "</pre>";


?>