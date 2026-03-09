<?php
try {
    $numero = -12;
    if (!is_numeric($numero)){
        throw new Exception ("El valor debe ser un número");
    }
    if ($numero<0){
        throw new Exception ("El valor debe ser un número positivo");
    }
    echo 11/$numero;
} catch (DivisionByZeroError) {
    echo "<p>No se puede dividir por cero en esta dimisión humana</p>";
    //die ("<p>No se puede dividir por cero en esta dimisión humana</p>");
} catch (Exception $error){
    echo "<p>Error: " . $error->getMessage() . "</p>";
} finally {
    echo "<p>Este es el final de la aplicación</p>";
}


?>