<?php

for ($i=0; $i < 10; $i++) { 
    echo "<p>$i ---> hola</p>";
}

echo "<hr>";

/* $i=0;
while ($i < 10) {
    echo "<p>$i ---> hola</p>";
    $i++;
} */

$i=0;
do {
    echo "<p>$i ---> hola</p>";
    $i++;
} while ($i < 10); 

echo "<hr>";

$lista = [23,45,12,11];
foreach ($lista as $indice => $valor) {
    echo "<p>$indice ---> $valor</p>";
}

echo "<hr>";

echo $elementos = count($lista);

for ($i=0; $i < $elementos; $i++) { 
    echo "<p>$i ---> $lista[$i]</p>";
}

echo "<hr>";

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
?>