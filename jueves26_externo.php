<?
$otroNombre="Gregorio";

function sumar_raro($num1, $num2){
    echo "<p>La función rara está en marcha</p>";
    $calculo = $num1*2+$num2;
    echo "<p>$calculo</p>";
}

function poner_mayusc($nombre){
    return strtoupper($nombre);
}

function invertir_cadena($cadena){
    $array = mb_str_split($cadena);
    $array_rev = array_reverse($array);
    return implode("",$array_rev);
}

function pintar_tabla($registros){ // recibe un array de arrays asociativos
    if (count($registros)==0){
    echo "<p>No hay registros</p>";
} else {
    echo "<table>";
    $registros=array_values($registros);
    $encabezados = array_keys($registros[0]);
    echo "<tr>";
    foreach ($encabezados as  $encabezado){
        echo "<th>".ucwords($encabezado)."</th>";
    }
    echo "</tr>";
    foreach ($registros as $registro){
        echo "<tr>";
        foreach ($registro as $campo){
            echo "<td>$campo</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
}

function palindromo($cadena){
    $cadena = mb_strtolower($cadena);
    $cadena = str_replace(" ","",$cadena);
    $cadenaInvertida = invertir_cadena($cadena);
    if ($cadena==$cadenaInvertida) return "Es palíndromo";
    else return "No es palíndromo";
}



?>