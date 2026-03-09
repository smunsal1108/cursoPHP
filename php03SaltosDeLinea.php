<style>
p {
    white-space: pre-line; /* Los saltos de línea (\n) se respetan y se muestran como saltos en pantalla.*/
}
</style>

<?php
echo "Hola";
echo "<br>"; # No es semántico aunque válido
echo "<p>Hola \n y adiós</p>"; #sin el css no funciona correctamente
$texto = "Hola \n y adiós";
echo $texto; # no funciona el \n
# dos soluciones a elegir:
echo nl2br($texto); # convierte cada \n en un <br>, es el más práctico

echo "<p>Combinar HTML \n con CSS</p>"; #válido, semántico y moderno

?>