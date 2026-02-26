<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP9b Ordenar Arrays</title>
</head>
<body>
    <?php
    echo "<h1>ORDENAR en PHP</h1>";
    /*sort / rsort NO ME IMPORTAN LOS ÍNDICES*/
    echo "<h2>sort / rsort NO ME IMPORTAN LOS ÍNDICES</h2>";
    echo "<h3>Caso1</h3>";
    $valores = [5 => "tomate", 1 => "calabaza", 9 => "pimiento"];
    print "<p>Matriz inicial:</p>";
    print "<pre>"; print_r($valores); print "</pre>";
    sort($valores); //prueba con rsort
    print "<p>Matriz ordenada con sort():</p>";
    print "<pre>"; print_r($valores); print "</pre>";
    echo "<h3>Caso2</h3>";
    $valores2 = [3,-1,7];
    print "<p>Matriz inicial:</p>";
    print "<pre>"; print_r($valores2); print "</pre>";
    rsort($valores2); //prueba con sort
    print "<p>Matriz ordenada con rsort():</p>";
    print "<pre>"; print_r($valores2); print "</pre>";

    /* asort/ arsort*/
    echo "<h2>asort / arsort</h2>";
    echo "<h3>Caso1</h3>";
    $valores = [5 => "tomate", 1 => "calabaza", 9 => "pimiento"];
    print "<p>Matriz inicial:</p>";
    print "<pre>"; print_r($valores); print "</pre>";
    asort($valores);
    print "<p>Matriz ordenada con asort():</p>";
    print "<pre>"; print_r($valores); print "</pre>";
    echo "<h3>Caso2</h3>";
    $valores2 = [3,-1,7];
    print "<p>Matriz inicial:</p>";
    print "<pre>"; print_r($valores2); print "</pre>";
    arsort($valores2);
    print "<p>Matriz ordenada con arsort():</p>";
    print "<pre>"; print_r($valores2); print "</pre>";

    /* ksort / krsort*/
    echo "<h2>ksort / krsort</h2>";
    echo "<h3>Caso1</h3>";
    $valores = [5 => "tomate", 1 => "calabaza", 9 => "pimiento"];
    print "<p>Matriz inicial:</p>";
    print "<pre>"; print_r($valores); print "</pre>";
    ksort($valores);
    print "<p>Matriz ordenada con ksort():</p>";
    print "<pre>"; print_r($valores); print "</pre>";
    echo "<h3>Caso2</h3>";
    $valores2 = ["b"=>3,"h"=>-1,"a"=>7];
    print "<p>Matriz inicial:</p>";
    print "<pre>"; print_r($valores2); print "</pre>";
    krsort($valores2);
    print "<p>Matriz ordenada con krsort():</p>";
    print "<pre>"; print_r($valores2); print "</pre>";

    echo "<h2>Array de países y capitales. Las tres posibilidades.</h2>";
    $paises=[
    "España"=>"Madrid",
    "Suecia"=>"Estocolmo", 
    "Italia"=>"Roma"
    ];
    print "<pre>"; print_r($paises); print "</pre>";
    sort($paises);// probar krsort() y arsort()
    print "<pre>"; print_r($paises); print "</pre>";

    ?>
</body>
</html>