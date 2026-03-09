<?
    function sin_static() {
        $x = 0;
        echo "<p>$x</p>";
        $x++; // está línea se ejecuta pero no se emplea posteriormente
    }
    function con_static() {
        static $x = 0;
        echo "<p>$x</p>";
        $x++; 
    }

sin_static();
sin_static();
sin_static();
echo "<hr>";
con_static();
con_static();
con_static();


define("CIUDAD", "Sevilla");
echo CIUDAD;
// define("CIUDAD", "Málaga"); //no se puede reasignar
define("numHijos",3);
echo numHijos;
const PI = 3.14;
echo PI;

echo ("<pre>");
print_r(get_defined_constants());
echo ("</pre>");

?>