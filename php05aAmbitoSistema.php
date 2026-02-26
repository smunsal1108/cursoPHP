<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="php05AmbitoSistema.css">
    <title>PHP5a Ámbito de variables y variables de sistema</title>
</head>
<body>
    <h1>Ejemplo PHP5</h1>
    <section>
    <?php
        function forma1() {
            global $ciudad;
            echo "<p>$ciudad</p>";
            echo "<p> empleando \$GLOBALS";

            echo $GLOBALS["ciudad"]." "."<----";
            echo $GLOBALS["ciudad"], " <----", "</p>";
            //echo "$GLOBALS['ciudad']"; daría error
            echo "<p>{$GLOBALS["ciudad"]}</p>";
            /* 
            la línea superior sustituye a
            global $ciudad;
            echo "<p>$ciudad</p>";
            */

            $variableLocal = "Soy variable local";
            echo "$variableLocal----";
            //echo $variableGlobal; //no funciona
            global $variableGlobal;
            $variableGlobal= "nuevo valor";
            $GLOBALS["variableGlobal"]="Soy variable global desde dentro de la función";
            echo $GLOBALS["variableGlobal"]."----"; 
        }

        function forma2(){
            global $variableGlobal, $segundaGlobal;
            $segundaGlobal ="Soy la segunda global";
            echo "$variableGlobal---$segundaGlobal";
        }

// *************** Código SECUENCIAL *************************
    $ciudad="Sevilla";
    echo "<p>".$ciudad."</p>";
    $variableGlobal = "Soy variable global";
    echo "$variableGlobal----";
    forma1();
    $variableGlobal = "Soy la misma variable global";
    echo "$variableGlobal----";
    echo "<HR>";
    $segundaGlobal;
    forma2();
    ?>
    </section>
</body>
</html>