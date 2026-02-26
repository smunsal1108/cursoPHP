<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>9C Arrays Funciones</title>
</head>
<body>
    <?
    /* crear las dos listas */
$lista1 =[10,7,5,4,2,2];
$lista2 =[8,4,7,1,10,10];

/*mostrar por pantalla las dos listas */
print "<pre>"; print_r($lista1); print "</pre>";
print "<pre>"; print_r($lista2); print "</pre>";
/* genero lista de los que están en la lista 1 y no en la lista 2*/
$diferencia = array_diff($lista1, $lista2); 
/* genero lista de los que están en la lista 2 y no en la lista 1*/
$diferenciaInversa = array_diff($lista2, $lista1); 

/*mezclo ambas listas,  elimino repetidos y renumero índices */
$final = array_values(array_unique(array_merge($diferencia, $diferenciaInversa)));
/* ordeno el resultado final de contenido mayor a menor */
rsort($final);
// parto del array $final
// bucle para sacar como tabla
print_r($final);
var_dump($final);
echo "<table>";
if (count($final)==0) echo "<tr><td colspan=2>No hay contenidos únicos en algun array</td></tr>";
else {
    echo "<tr><th>Índice</th><th>Valor</th></tr>";
    foreach ($final as $indice=> $valor) {
        echo "<tr><td>$indice</td><td>$valor</td></tr>";
    }
}
echo "</table>";

?>
 <table>
    <tr>
        <th>Índice</th>
        <th>Valor</th>
    </tr>
    <?
    foreach ($final as $indice=> $valor) {
    ?>
    <tr>
        <td><?=$indice?></td>
        <td><?=$valor?></td>
    </tr>
    <?
    }
    ?>
</table>
</body>
</html>
</body>
</html>