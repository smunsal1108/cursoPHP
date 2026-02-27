<?php

/* $numero = 34;

if ($numero<100 && $numero>56 || $numero == 1000) {
    echo "Número está emtre 56 y 100 O número es 1000";
} else {
    echo "Número >=100 pero diferente de 1000";
}

$dato = 45;
if ($dato<0) {}
if ($dato<20) {}

$nota = 7;

if ($nota<5) {
    echo "Suspenso";
} elseif ($nota<6) {
    echo "Susficiente";
} elseif ($nota<7) {
    echo "Bien";
} elseif ($nota<8) {
    echo "Muy Bien";
} elseif ($nota<9) {
    echo "Notable";
} elseif ($nota<=10) {
    echo "Sobresaliente";
} else {
    echo "Nota fuera de rango";
}

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
    case $nota<8:
        echo "Muy bien";
        break;
    case $nota<9:
        echo "Notable";
        break;
    case $nota<=10:
        echo "Sobresaliente";
        break;
    
    default:
        echo "Nota fuera de rango";
        break;
} */

$numeroMes = rand(1,12);
switch ($numeroMes) {
    case $numeroMes>=1 && $numeroMes<=4:
        echo "Primer Cuatrimestre";
        break;
    case $numeroMes>=5 && $numeroMes<=8:
        echo "Segundo Cuatrimestre";
        break;
    case $numeroMes>=9 && $numeroMes<=12:
        echo "Tercer Cuatrimestre";
        break;

    default:
    echo "No valido";
}

?>