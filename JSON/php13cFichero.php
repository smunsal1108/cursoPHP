<?php
$contenido = file_get_contents("fichero.txt");
echo "<pre>";
echo $contenido;
echo "</pre>";
$textoEliminar="Guerra y paz";

/* echo "<p>Eliminar un texto concreto</p>";
$contenido=str_replace($textoEliminar,"",$contenido); 
echo "Texto eliminado";
*/
/*
$parrafos=explode("\n",$contenido); // convertimos en array cuyos elementos son los párrafos
$contenido="";

// recorrer párrafos 
foreach($parrafos as $parrafo){
    if(strpos($parrafo,$textoEliminar)==false){// strpos() devuelve la posición numérica (entero) de la primera aparición de una subcadena dentro de otra. Si no encuentra la subcadena, devuelve false
        $contenido.=$parrafo."\n";
    }
}
// en este punto $contenido tiene todos los párrafos que no tienen $textoEliminar
file_put_contents("fichero.txt",$contenido);

echo "Párrafos eliminados";
*/
?>