<?php
try {
    // Código que puede generar una excepción
    $numero = 0; // probamos con diversos valores, 0, "3", "sd", "-3", -3
    
    // Validar que sea numérico
    if (!is_numeric($numero)) {
        throw new Exception("El valor del divisor no es numérico."); // excepción controlada
    }

    $resultado = 10 / $numero;
    echo "$resultado";
} catch (DivisionByZeroError) {
    echo "<p>Error: división por cero no permitida</p>";

} catch (Exception $error) { //Son errores del lenguaje o del motor de PHP, generalmente problemas graves que no se esperan 
    // Captura excepciones genéricas (como la que lanzamos si no es numérico)
    /* getMessage() se usa para obtener el mensaje de texto asociado a una excepción de tipo Exception.*/
    echo "<p>Error: " . $error->getMessage() . "</p>";
} finally {
    echo "<p>Ejecución finalizada.</p>";
}

?>