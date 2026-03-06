<?php

require_once "../dia-6_04_03_2026/03_miercoles04_externo_palindromo.php";

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    switch ($_POST["submit"]) {
        case 'Calcular':
            $numeros = array_filter($_POST, fn($valores) => is_numeric($valores));
            $imc = $numeros["peso"] / ($numeros["altura"]**2); 
            echo "Tu IMC es igual a $imc metros";
            break;
        
        case 'formulario2':
            $años = array_filter($_POST, fn($valores) => is_numeric($valores));
             if (($años["año"] % 4 == 0 && $años["año"] % 100 != 0) || $años["año"] % 400 == 0) {
                 echo "Es un año bisiesto"; 
            } else {
                echo "No es un año bisiesto";
            }
            break;
        
        case 'formulario3':
            //Esta es el resultado al que yo he llegado, pero no es lo más conveniente. Ya que lo suyo sería trabajar con un array de contraseñas. Por mi parte he tenido que trabajar con 2 campos de contraseña. Pero si tuviera que trabajar con 10 ciudades, yo no puedo poner en el name --> name=ciudad1, name=ciudad2, etc.
            
            /* $mayorADos = array_count_values($_POST);
            if(array_filter($mayorADos, fn($valores) => $valores == 2)) {
                echo "Las contraseñas coinciden";
            } else {
                echo "Las contraseñas NO coinciden";
            } */
            
            //Lo suyo sería usar en el name del formulario name=contraseña[]
            $contraseñas = $_POST["contraseña"];
            if ($contraseñas[0] == $contraseñas[1]) {
                echo "Las contraseñas coinciden";
            } else {
                echo "Las contraseñas NO coinciden";
            }
            break;
        
        case 'Verificar':
            echo palindromo($_POST["palindromo"]);
            break;
    }

    echo "<pre>"; 
    print_r($_POST);
    echo"</pre>";


}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiples Formularios</title>
</head>
<body>
    <!-- Realizar en esté único documento varios formularios y tras rellenar un formulario con diferentes tipos de datos, sacar en la pantalla de
        resultados en estructura <TABLE> todos los datos que están vacíos. -->

    <!-- FORMULARIO IMC -->
    <form action="" method="post">
        <h3>ÍNDICE DE MASAS CORPORAL</h3>
        <p>Escriba su peso en kilogramos y su altura en centímetros para calcular su índice de masa corporal.</p>
        <div>
            <label for="peso">Peso:</label>
            <input type="number" name="peso" id="peso" min="0">
        </div>
        <div>
            <label for="altura">Altura:</label>
            <input type="number" name="altura" id="altura" min="0">
        </div>
        
        <input type="submit" name="submit" value="Calcular">
        <input type="reset" value="Borrar">
    </form>

    <!-- FORMULARIO AÑO BISIESTO -->
    <form action="" method="post">
        <h3>CALCULADORA DE AÑOS BISIESTOS</h3>
        <p>Escriba un año (0 <= año < 10.000) para comprobar si es bisiesto o no.</p>
        <input type="hidden" name="submit" value="formulario2">
        <div>
            <label for="año">Año:</label>
            <input type="number" name="año" id="año" min="1">
        </div>
        
        <input type="submit" value="Comprobar">
        <input type="reset" value="Borrar">
    </form>

    <!-- FORMULARIO COMPARAR CONTRASEÑA -->
    <form action="" method="post">
        <h3>COMPARADOR DE CONTRASEÑA</h3>
        <p>Escriba dos veces la misma contraseña y podrá comprobar si coinciden.</p>
        <input type="hidden" name="submit" value="formulario3">
        <div>
            <label for="contraseña">Contraseña:</label>
            <input type="password" name="contraseña[]" id="contraseña" minlength="5" maxlength="14">
        </div>
        <div>
            <label for="contraseña">Contraseña otra vez:</label>
            <input type="password" name="contraseña[]" id="contraseña" minlength="5" maxlength="14">
        </div>
        
        <input type="submit" value="Comprobar">
    </form>

    <!-- FORMULARIO PALINDROMO -->
    <form action="" method="post">
        <h3>CONVERTIR PALINDROMO</h3>
        <p>Escriba una palabra y se le informará de si es o no palindroma</p>
        <div>
            <label for="palindromo">Palabra:</label>
            <input type="text" name="palindromo" id="palindromo">
        </div>
        
        <input type="submit" name="submit" value="Verificar">
    </form>
</body>
</html>