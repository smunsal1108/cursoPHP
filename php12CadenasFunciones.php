<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP12 Funciones cadenas</title>
</head>
<body>
<?
include("externo.php");
echo "<h1>Funciones de cadenas</h1>";
/* strtolower()*/
echo "<h2>strtolower</h2>";
echo strtolower("<p>Alejandro PÉrez Chica</p>");
echo mb_strtolower("<p>Alejandro PÉrez Chica</p>");// para salvar el problema de las tildes por ejemplo

/* strtoupper()*/
echo "<h2>strtoupper</h2>";
echo strtoupper("<p>Alejandro Pérez Chica</p>");  
echo mb_strtoupper("<p>Alejandro Pérez Chica</p>"); // para salvar el problema de las tildes por ejemplo

/*str_replace*/
echo "<h2>str_replace</h2>";
$cadena = "Cuando Fernando séptimo usaba paletón";
echo str_replace("a","i",mb_strtolower($cadena));   

$vocales = ["a","á","e","é","i","í","o","ó","u","ú"];
foreach ($vocales as $vocal){
   $cadena= str_replace($vocal,"o",mb_strtolower($cadena));
}

echo "<p>$cadena</p>";

//substr_count
echo "<h2>substr_count</h2>";
echo "<p>".$cadena = "Cuando Fernando séptimo usaba paletón"."</p>";
$trozo="an";
echo substr_count($cadena, $trozo)." veces aparece $trozo";

//strpos
echo "<h2>strpos</h2>";
$caracter="an";
echo "La letra $caracter aparece por primera vez en la posición ".strpos($cadena, $caracter);

// strlen
echo "<h2>strlen</h2>";
$longitud = strlen($cadena);
echo "$cadena tiene $longitud caracteres";

// substr
$cadena="No por mucho madrugar amanece más temprano";
echo "<h2>substr</h2>";
echo substr($cadena,0,21)."...";

// mb_str_split
echo "<h2>mb_str_split</h2>";
$cadena ="No por mucho madrugar amanece más temprano";
$array = mb_str_split($cadena); // convierte cada letra en un elemento del array, no puedo usar explode para separar letras
print("<pre>");
print_r ($array);
print("</pre>");

$frase="sara baras";
if (palindromo($frase)) echo "¡Es un palíndromo!";
 else echo "¡No es un palíndromo!";
?>
</body>