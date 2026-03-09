<?php

$numero =4;
$numero2 =400;
if ($numero<100 && $numero2>56 || $numero == 1000){
    echo "Número está entre 56 y 100 O numero es 1000";
} else {
    echo "Número >=100 pero diferente de 1000";
}
$nota = "a7.4";
if ($nota<5){
    echo "Suspenso";
} elseif ($nota<6){
    echo "Suficiente";
} elseif ($nota<7) {
    echo "Bien";
} elseif ($nota<9){
    echo "Notable";
} elseif ($nota<=10) {
    echo "Sobresaliente";
} else {
    echo "Nota fuera de rango";
}

echo "<hr>";
switch ($nota) {
    case $nota<5:
        echo "Suspenso";
        break;
    case $nota<6:
        echo "Suficiente";
        break;
    case $nota<7:
        echo "Bien";
        break;
    case $nota<9:
        echo "Notable";
        break;
    case $nota<=10:
        echo "Sobresaliente";
        break;
    default:
        echo "Nota fuera de rango";
}
echo "<hr>";
$numeroMes = rand(1,12);
echo $numeroMes;
switch ($numeroMes) {
    case $numeroMes<=4:
        echo "Primer Cuatrimestre";
        break;
    case $numeroMes<=8:
        echo "Segundo Cuatrimestre";
        break;
    case $numeroMes<=12:
        echo "Tercer Cuatrimestre";
        break;
    default:
        echo "No válido";
}
echo "<hr>";
$numero = rand(1,100);
switch ($numero) {
    case $numero<30:
        echo "$numero menor que 30";
        break;
    case $numero<=50: // un rango
        echo "$numero está entre 30 y 50";
        break;
    default:
        echo "$numero mayor que 50";
}

?>