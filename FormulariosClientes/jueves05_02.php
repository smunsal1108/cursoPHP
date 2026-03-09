<link rel="stylesheet" href="..\lunes02_03.css">
<?php
require_once "libreriaFormularios.php";
echo "<pre>";
print_r($_POST);
echo "</pre>";
echo "<pre>";
print_r($_FILES);
echo "</pre>";



/*
Podemos encontrarnos con:
* Aparece como clave y tenga contenido (string o array)
* Aparece como clave  y esté vacío
* Aparece como clave  y el contenido sea un array vacío
* No aparece como clave
*/
!empty($_POST["nombre"]) ? $nombre = $_POST["nombre"] : $nombre="No se ha indicado el nombre";
!empty(["apellidos"]) ? $apellidos = $_POST["apellidos"] : $apellidos="No se ha indicado apellidos";
!empty($_POST["clave"]) ? $clave = $_POST["clave"] : $clave="No se ha indicado clave";
!empty($_POST["fecha"]) ? $fecha = $_POST["fecha"] : $fecha=date('Y-m-d');
!empty($_POST["marcas"]) ? $marcas = $_POST["marcas"] : $marcas=["No has elegido ninguna marca"];
!empty($_POST["distritos"]) ? $distritos = $_POST["distritos"] : $distritos=["No has elegido ningun distrito"];
!empty($_POST["ciudad"]) ? $ciudad = $_POST["ciudad"] : $ciudad=["No has elegido ninguna ciudad"]; 
!empty($_POST["color"]) ? $color = $_POST["color"] : $color=["No has elegido ningun color"]; 
!empty($_POST["fichero"][0]) ? $ficheros = $_POST["fichero"] : $ficheros=["No has elegido ningun fichero"];
!empty($_POST["observaciones"]) ? $observaciones = $_POST["observaciones"] : $observaciones="No se han indicado observaciones";
echo "<p><a href='jueves05_02.html'>Volver al formulario</a></p>";

$campos =[
    "nombre"=> htmlspecialchars($nombre),
    "apellidos"=> htmlspecialchars($apellidos),
    "clave"=> htmlspecialchars($clave),
    "fecha"=> htmlspecialchars($fecha),
    "ficheros"=> $ficheros, // es un array
    "marcas"=> $marcas, // es un array
    "ciudad"=> $ciudad,
    "distritos"=> $distritos, // es un array
    "color"=> $color,
    "observaciones"=> htmlspecialchars($observaciones)
];

echo "<pre>";
print_r($campos);
echo "</pre>";

pintar_form($campos);
?>