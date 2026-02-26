<style>
p {
    white-space: pre-line; /* Los saltos de línea (\n) se respetan y se muestran como saltos en pantalla.*/
}
</style>

<?php
// echo "Hola";
// echo "<br>"; # No es semántico aunque válido
// echo "<p>Hola \n y adiós</p>"; #correcto aunque confuso
$texto = "Hola \n y adiós";
// echo $texto; # no funciona el \n
echo nl2br($texto); # convierte cada \n en un <br>, es el más práctico

echo "<p>Combinar HTML \n con CSS</p>"; #válido, semántico y moderno

?>