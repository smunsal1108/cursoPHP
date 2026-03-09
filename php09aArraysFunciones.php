    <!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP9 Funciones de Arrays</title>
</head>

<body>
    <?php
    echo "<h1>Funciones para arrays</h1>";
    /* array_combine */
    echo "<h2>Array_combine </h2>";
    $claves = ["nombre", "edad", "ciudad"];
    $valores = ["Juan", 30, "Madrid"];
    $resultados = array_combine($claves, $valores);
    print("<pre>");
    print_r($resultados);
    print("</pre>");



    /* count*/
    print("<h2>COUNT</h2>");

    $nombres[1] = "Ana";
    $nombres[10] = "Bernardo";
    $nombres[25] = "Carmen";
    print_r($nombres);
    $elementos = count($nombres);
    print "<p>La matriz tiene ". count($nombres)." elementos.</p>"; 
    print "<p>La matriz tiene $elementos elementos.</p>"; 

    // ¿qué pasa si usamos comillas simples''?
    print '<p>La matriz tiene $elementos elementos</p>'; 
    // que tendremos que concatenar
    print '<p>La matriz tiene'. $elementos.' elementos</p>'; 

    /*range*/
    print("<h2>RANGE</h2>");
    $valores = range(5, 43, 2);
    print_r("<pre>");
    print_r($valores);
    print_r("</pre>");

    // array_merge   MEZCLA (UNE) ARRAYS
    /*Si hay índices numéricos e índices no numéricos y hay índices que coinciden, al mezclar las matrices los valores de índices numéricos se conservan (aunque se renumeren los índices), pero los no numéricos se sobrescriben.*/
    print("<h2>ARRAY_MERGE</h2>");  
    print("<h3>Caso1</h3>");
    $uno = [1, 70 => "hola", 4];
    $dos = [1, 3, 9];
    $final = array_merge($uno, $dos);
    print "<pre>"; print_r($uno); print "</pre>";
    print "<pre>"; print_r($dos); print "</pre>";
    print "<pre>"; print_r($final); print "</pre>";

    print("<h3>Caso2</h3>");
    $uno = [2 => 1, "b" => 2, "c" => 4];
    $dos = [2 => 100, "b" => 40, "d" => 60];
    $final = array_merge($uno, $dos);
    print "<pre>"; print_r($uno); print "</pre>";
    print "<pre>"; print_r($dos); print "</pre>";
    print "<pre>"; print_r($final); print "</pre>";

 
    /*array_count_values*/
    print("<h2>ARRAY_COUNT_VALUES</h2>");
    $nombres = ["Ana", "Bernardo", "Bernardo", "Ana", "Carmen", "Ana"];
    $cuenta = array_count_values($nombres);
    print "<pre>"; print_r($nombres); print "</pre>";
    print "<pre>"; print_r($cuenta); print "</pre>";



    /* min / max */
    print("<h2>MIN / MAX</h2>");
    $numeros = [10, 45, 76, -1];
    $maximo = max($numeros);
    $minimo = min($numeros);
    print "<pre>"; print_r($numeros); print "</pre>";
    print "<p>El máximo de la matriz es $maximo.</p>";
    print "<p>El mínimo de la matriz es $minimo.</p>";


    /*in_array*/
    print("<h2>IN_ARRAY</h2>");
    $valores = [10, 40, 159, -1];
    print "<pre>"; print_r($valores); print "</pre>";
    if (in_array(15, $valores)) 
    //in_array(15,$valores)
        print "<p>15 está en la matriz.</p>";
     else 
        print "<p>15 no está en la matriz.</p>";
    
    /*array_search */
    print("<h2>ARRAY_SEARCH</h2>");
    for ($i=0;$i<10;$i++) { // creamos un array con 10 número aleatorios
        $valores[$i]=rand(1,20);
    }    
    
    $random = rand(1,20);//generamos otro número aleatorio
    print "<pre>"; print_r($valores); print "</pre>";
    $encontrado = array_search($random, $valores); // $encontrado es la posición primera donde aparece $random dentro de $valores
    if($encontrado) {
        $posicion = $encontrado +1 ;
        print "<p>$random: Encontrado en la posición $posicion.</p>";
    }  else print "$random: No encontrado.</p>";

    $nombres = ["Paco", "Luis", "Carmen"];
    $encontrado = array_search("Luis", $nombres);
    if ($encontrado) {
        $posicion = $encontrado +1 ;
        echo "Encontrado en la posición $encontrado que ocupa el sitio $posicion";
    } else { echo "No encontrado";}



    /* arraykeys*/
    print("<h2>ARRAY_KEYS</h2>");
    $valores=[23,54,15,67,33,11,15];
    print "<pre>"; print_r($valores); print "</pre>";
    $encontrados = array_keys($valores, 15);
    print "<pre>"; print_r($encontrados); print "</pre>";
    print "El número 15 aparece ".count($encontrados)." veces";

        /* arraykeys sólo con el parámetro del array*/
    $valores=[
        0=>23,
        4=>54,
        7=>15,
        8 => 100,
        9=>33,
        "b"=>11,
        "número"=>15
    ];
    print "<pre>"; print_r($valores); print "</pre>";
    $indices = array_keys($valores);
    print "<pre>"; print_r($indices); print "</pre>";
    echo "Si sólo se indica el array devolverá un nuevo array que contiene todas las claves del array original.";

    $ficha_personal =[
        "nombre" => "Casimiro",
        "apellidos"=> "Ynoteveo Pi",
        "edad" => 44,
        "ciudad"=> "Cádiz"
    ];
    print "<pre>"; print_r($ficha_personal); print "</pre>";
    $titulos = array_keys($ficha_personal);
    print "<pre>"; print_r($titulos); print "</pre>";


    /* array_values*/
    print("<h2>ARRAY_VALUES</h2>");
    $nombres = ["a" => "Ana", 20 => "Bernardo", "c" => "Carmen", "d" => "David"];
    print "<pre>"; print_r($nombres); print "</pre>";
    $nombres=array_values($nombres);
   
    print "<pre>"; print_r($nombres); print "</pre>";

    /* shuffle*/
    print("<h2>SHUFFLE</h2>");
    $valores=[23,"sd"=>54,15,67,33,11,15];
    print "<pre>"; print_r($valores); print "</pre>";
    shuffle($valores);
    print "<pre>"; print_r($valores); print "</pre>";


    /* array_rand*/
    print("<h2>ARRAY_RAND</h2>");
    $cuadrados = [2 => 4, 3 => 9, 5 => 25, 7 => 49, 10 => 100];
    print "<pre>"; print_r($cuadrados); print "</pre>";
    $indice_azar = array_rand($cuadrados);
    print("Ha salido el $indice_azar cuyo valor es $cuadrados[$indice_azar]");

    /* array_unique*/
    print("<h2>ARRAY_UNIQUE</h2>");
    for ($i=0;$i<10;$i++) { // creamos un array con 10 número aleatorios
        $inicial[$i]=rand(1,5);
    }
    print "<pre>"; print_r($inicial); print "</pre>";
    $final = array_unique($inicial);
    print "<pre>"; print_r($final); print "</pre>";

     /* array_diff */
     print("<h2>ARRAY_DIFF</h2>");
     for ($i=0;$i<10;$i++) { // creamos un array con 10 número aleatorios
        $lista1[$i]=rand(1,10);
        $lista2[$i]=rand(1,10);
    }
    print "<pre>"; print_r($lista1); print "</pre>";
    print "<pre>"; print_r($lista2); print "</pre>";
    $diferencia = array_unique(array_diff($lista1, $lista2)); // Al array resultante le aplicamos la función que elimina repetidos
    print "<pre>"; print_r($diferencia); print "</pre>";

     /* array_filter */
    print("<h2>ARRAY_FILTER sólo con parámetro array</h2>");
    $datos = [0, 1, 2, false, "", null, 3, "hola"];
    echo "<pre>";
    print_r($datos);
    echo "</pre>";
    $resultado = array_filter($datos);
    echo "<pre>";
    print_r($resultado);
    echo "</pre>";

    print("<h2>ARRAY_FILTER con parámetros array y función</h2>");
    $numeros = [1, 2, 3, 4, 5, 6];
    echo "<pre>";
    print_r($numeros);
    echo "</pre>";
    $resultado = array_filter($numeros, function($numero) {
        return $numero % 2 == 0; // Sólo deja los números pares
    }
    );
  //$resultado = array_filter($numeros, fn($numero) => $numero % 2 == 0; // Sólo deja los números pares

    echo "<pre>";
    print_r($resultado);
    echo "</pre>";

    $registros =[
        [
            "nombre" => "Ana", 
            "edad" => 17
        ],
        [
            "nombre" => "Casimiro", 
            "edad" => 56
        ],
        [
            "nombre" => "Lucas", 
            "edad" => 15
        ],
        [
            "nombre" => "Raquel", 
            "edad" => 43
        ]
    ];
    echo "<pre>";
    print_r($registros);
    echo "</pre>";
    $mayores = array_filter($registros, function($registro) {
        return $registro["edad"] >= 18;
    }
    );
    # Con función flecha
    echo "<pre>";
    print_r($mayores);
    echo "</pre>";
    $mayores = array_filter($registros, fn($r) => $r["edad"] >= 18);

    echo "<pre>";
    print_r($mayores);
    echo "</pre>";


    $datos = [
    "a" => 10,
    "b" => 20,
    "x" => 30
];
    print("<h2>ARRAY_FILTER con parámetros array, función y ARRAY_FILTER_USE_KEY</h2>");
    $resultado = array_filter($datos, function($clave) {
        return $clave != "a"; // Excluir la clave 'a'
    }, ARRAY_FILTER_USE_KEY);
    echo "<pre>";
    print_r($resultado);
    echo "</pre>";
    ?>
</body>

</html>