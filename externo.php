<?php
    $nombre="Juan";// se emplea como prueba en php1b.php

function invertir_cadena($cadena){
    $array = mb_str_split($cadena);
    $array_rev = array_reverse($array);
    return implode("",$array_rev);
}


function palindromo($texto){
    //echo "<p>$texto</p>";
    $texto = mb_strtolower($texto); //sara baras
    echo $texto;
    // Separar letras de sus tildes
    $texto = Normalizer::normalize($texto, Normalizer::FORM_D);

    // Eliminar todo lo que no sea a-z
    $texto = preg_replace('/[^a-z]/u', '', $texto);

    $textoInvertido = invertir_cadena($texto); // sarabaras
   // echo "<p>$textoInvertido</p>";
    if ($texto==$textoInvertido) return "<p>PALÍNDROMO</p>";
    else return "<p>NO ES PALÍNDROMO</p>";

}


function bisiesto($numero){
    if ($numero%4==0 && ($numero%100!=0 || $numero%400==0)) 
        return "ES BISIESTO";
      else 
        return "NO ES BISIESTO";
}

function compararCadenas($cadena1, $cadena2) {
    if ($cadena1==$cadena2) return "SON IGUALES";
    else return "NO SON IGUALES";
}

    function pintarTablaVacios ($array) {
        print("<pre>");
        print_r($array);
        print("</pre>");

        echo "<table>";
        echo "<caption>Los datos que NO has introducido</caption>";
        echo "<tr><th>Variable</th><th>Valor</th></tr>";
        $bandera=false;
        foreach ($array as $variable => $valor){
            if ($valor=="")
                echo "<tr><td>$variable</td><td>Vacío</td></tr>";
            if ($variable=="oficina") $bandera=true;
        }
        if (!$bandera) echo "<tr><td>oficina</td><td>Vacío</td></tr>";       
        echo "</table>";
        echo "<hr>";
    }

    function pintarTabla($array) {
        $bandera=false;
        echo "<table>";
        echo "<caption>Todos los datos</caption>";
        echo "<tr><th>Variable</th><th>Valor</th></tr>";
        foreach($array as $variable => $valor) {           
            if (gettype($array[$variable])!="array")
            echo "<tr><td>$variable</td><td>$valor</td></tr>";
            else {
                $bandera=true;
                foreach ( $array[$variable] as $distrito){
                    echo "<tr><td>$variable</td><td>$distrito</td></tr>";
                }
                }
        }
        if (!$bandera) echo "<tr><td>oficina</td><td></td></tr>";       
        echo "</table>";
    }
?>