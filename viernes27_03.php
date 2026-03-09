<?php
for($i=0;$i<7;$i++){
    echo "<p>$i---> hola</p>";
}

$i=0;
while ($i<7){
    echo "<p>$i---> hola</p>";
    $i++;
}

$i=0;
do {
    echo "<p>$i---> hola</p>";
    $i++;
} while ($i<7);

$lista = [23,45,12,11];
foreach ($lista as $indice => $valor){
    echo "<p>$indice---> $valor</p>";
}

echo count($lista);

for($i=0;$i<count($lista);$i++){
    echo "<p>$i---> $lista[$i]</p>";
}
?>