<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>9D Arrays Funciones</title>
</head>
<body>
<?
/*array_pop*/
print "<h1>Operaciones sobre arrays</h1>";
print "<h2>array_pop</h2>";
$frutas = array("naranja", "plátano", "manzana", "frambuesa");
print "<pre>"; print_r($frutas);print"</pre>";
array_pop($frutas);
print "<pre>"; print_r($frutas);print"</pre>";


/*array_push*/
print "<h2>array_push</h2>";
array_push($frutas, "nectarina", "pomelo");
print "<pre>"; print_r($frutas);print"</pre>";

/*array_shift*/
print "<h2>array_shift</h2>";
array_shift($frutas);
print "<pre>"; print_r($frutas);print"</pre>";
/*array_unshift*/
print "<h2>array_unshift</h2>";
array_unshift($frutas, "sandía", "melón");
print "<pre>"; print_r($frutas);print"</pre>";
print "<hr>";
/*implode*/
print "<h2>implode</h2>";
print "<pre>"; print_r($frutas);print"</pre>";
$cadena = implode("*", $frutas);//crea una cadena
print_r($cadena);

/*explode*/
print "<h2>explode</h2>";
echo "<h3>Caso1</h3>";
$cadena="La*casa*maravillosa*en*el*jardín";
print("<p>$cadena</p>");
$array = explode("*",$cadena);//crea un array a partir de una cadena.
print "<pre>"; print_r($array);print"</pre>";

echo "<h3>Caso2</h3>";
$frase="Nunca llueve a gusto de todos";
print $frase;
$array = explode(" ",$frase);//crea un array a partir de una cadena.
print "<pre>"; print_r($array);print"</pre>";
?>
    
</body>
</html>
</body>
</html>