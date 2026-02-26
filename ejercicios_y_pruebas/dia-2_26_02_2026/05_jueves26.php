<?php

function sin_estatic() {
    $x = 0;
    echo "<p>$x</p>";
    $x++;
}

function con_estatic() {
    static $x = 0;
    echo "<p>$x</p>";
    $x++;
}

sin_estatic();
sin_estatic();
sin_estatic();

echo "<hr>";


con_estatic();
con_estatic();
con_estatic();

echo "<hr>";

define("CIUDAD", "Sevilla");
echo CIUDAD;

define()
?>