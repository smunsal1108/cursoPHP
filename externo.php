<?php
    $nombre="Juan";// se emplea como prueba en php1b.php


function palindromo($texto){
    //echo "<p>$texto</p>";
    $texto = strtolower($texto); //sara baras
    //echo "<p>$texto</p>";
    $texto = str_replace(" ","", $texto);//sarabaras
   //echo "<p>$texto</p>";
    $textoInvertido = strrev($texto); // sarabaras
   // echo "<p>$textoInvertido</p>";
    if ($texto==$textoInvertido) return "<p>PALÍNDROMO</p>";
    else return "<p>NO ES PALÍNDROMO</p>";

}

function palindromoComprimido($texto) {
    if (str_replace(" ","",strtolower($texto))==strrev(str_replace(" ","",strtolower($texto)))) return "<p>PALÍNDROMO</p>";
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