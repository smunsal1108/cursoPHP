<?php 

try {
    $numero = 0;
    
    if (!is_numeric($numero)) {
        throw new Exception ("El valor debe ser un número");
    }

    if ($numero<0) {
        throw new Exception ("El valor debe de ser positivo");
    }
    
    echo 10 / $numero;

} catch (DivisionByZeroError) {
    die ("<p>No se puede dividr por el número $numero</p>");

}catch (Exception $error) {
    //echo "<p>ERROR: $error</p>";
    die ("<p>Error: " . $error->getMessage() . "</p>");

}finally {
    echo "<p>Este es el final de la aplicación</p>";
}

?>