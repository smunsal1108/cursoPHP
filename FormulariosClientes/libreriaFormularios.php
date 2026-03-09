<?php
function pintar_vacios($array){
    echo "<table>";
    foreach($array as $clave=>$valor){
        echo "<tr><td>";
        if (is_array($clave)) echo count($clave)!=0?$clave:"";
        else echo $valor==""?$clave:"";
        echo "</td></tr>";
    }
    echo "</table>";
}
function pintar_form($campos){
    echo "<table>";
    foreach ($campos as $clave => $valor){
        echo "<tr>";
        echo "<th>$clave</th>";
        if (is_array($valor)){
            echo "<td>";
            foreach ($valor as $contenidoValor){
                echo nl2br($contenidoValor."\n");
            }
            echo "</td>";
        } else {
            echo "<td>$valor</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}


function calcular_IMC($peso, $altura){
    $altura = $altura/100;
    $imc = round($peso/$altura**2,2);
    return $imc;
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
function invertir_cadena($cadena){
    $array = mb_str_split($cadena);
    $array_rev = array_reverse($array);
    return implode("",$array_rev);
}
function palindromo($texto){
    //echo "<p>$texto</p>";
    $texto = mb_strtolower($texto); 
    // Separar letras de sus tildes
    $texto = Normalizer::normalize($texto, Normalizer::FORM_D);
    // Eliminar todo lo que no sea a-z
    $texto = preg_replace('/[^a-z]/iu', '', $texto);
    $textoInvertido = invertir_cadena($texto); 
   // echo "<p>$textoInvertido</p>";
    if ($texto==$textoInvertido) return "<p>PALÍNDROMO</p>";
    else return "<p>NO ES PALÍNDROMO</p>";

}

function limpiar($dato){
    return htmlspecialchars(trim($dato));
}

function validarFloat($dato){
    return filter_var($dato,FILTER_VALIDATE_FLOAT)!==false;
}

function validarEntero($dato){
    return filter_var($dato,FILTER_VALIDATE_INT)!==false;
}

function validarVacio($dato){
    return trim($dato)!=="";
}

//Creamos la función de nombre correcto (validación)
/* function nombre_correcto($nombre) {
    if (!empty($nombre) && strlen($nombre) <=50 && preg_match("/[A-Za-záéíóúÁÉÍÓÚñÑ]+$/iu", $nombre)) {
        return true;
    } else {
        return false;
    }
} */

//Creamos la función de edad correcta (validación)
function edad_correcta($edad) {
    if (!filter_var($edad, FILTER_VALIDATE_INT)) {
        return false; 
    } else {
        $edad = (int) $edad;
        if ($edad>=1 && $edad<=99) {
            return true;
        } else {
            return false;
        }
    }
}


?>