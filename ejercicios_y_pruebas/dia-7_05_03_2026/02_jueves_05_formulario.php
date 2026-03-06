<link rel="stylesheet" href="../dia-4_02_03_2026/03_lunes_02.css">

<?php 

require_once "02_jueves_05_librerias_formularios.php";

echo "<pre>"; 
print_r($_POST);
echo"</pre>";

echo "<pre>"; 
print_r($_FILES); //Te muestra todos los datos del fichero (la ruta, el tamaño del fichero, la extensión que tiene, etc). PEEERO, para que nos salga necesitamos dentro de nuestro HTML y dentro de la etiqueta <form action="..." method="post" enctype="multipart/form-data"> <--- TENEMOS QUE AÑADIRLE EL PARAMETRO enctype="multipart/form-data"

// SI VAS A USAR EL PARAMETRO enctype="multipart/form-data" en el formulario HTML y la variable $_FILES en tu fichero .php, entonces ya no te sirve usar esta función --------------> !empty($_POST["fichero"]) ? $fichero = $_POST["fichero"] : $fichero = "No se ha indicado el fichero"; <--- YA QUE SIEMPRE TE VA A MOSTRAR "No se ha indicado el fichero"

echo"</pre>";

//echo "<p>Hola ".$_POST['nombre']."</p>"; // Esto normalmente no se hace, ya que no es práctico.

// Se suele trabajar más comodamente de la siguiente forma
/* $_POST["nombre"] ? $nombre = $_POST["nombre"] : $nombre = "No se ha indicado el nombre";
$_POST["apellidos"] ? $apellidos = $_POST["apellidos"] : $apellidos = "No se ha indicado apellidos";
$_POST["clave"] ? $clave = $_POST["clave"] : $clave = "No se ha indicado la clave";
$_POST["fecha"] ? $fecha = $_POST["fecha"] : $fecha = date('Y-m-d');
$_POST["fichero"] ? $fichero = $_POST["fichero"] : $fichero = "No se ha indicado el fichero";
!$_POST["ficheros"][0] ? $ficheros = $_POST["ficheros"] : $ficheros = ["No se ha indicado ningún fichero"];
isset($_POST["marcas"]) ? $marcas = $_POST["marcas"] : $marcas = "No se ha indicado las marcas";
$color = $_POST["color"]; //Para el tema del color es más peculiar una cuestión: ¿El usuario realmente no ha seleccionado ningún color y sale el color negro en hexadecimal por defecto Ó si ha elegido por voluntad propia el color negro? Para poder saber esto, habría que usar Javascript para saber si ha hecho click o no.
isset($_POST["ciudad"]) ? $ciudad = $_POST["ciudad"] : $ciudad = "No se ha indicado las ciudad";
isset($_POST["distritos"]) ? $distritos = $_POST["distritos"] : $distritos = "No se ha indicado las distritos";
$_POST["observaciones"] ? $observaciones = $_POST["observaciones"] : $observaciones = "No se ha indicado los observaciones"; */


// PERO TODAVÍA SE PUEDE TRABAJAR MÁS COMODAMENTE (o más bien reduciendo casos de usos). Y sería con la función empty(), que comprueba diferentes casos, para devolvernos true si se cumple alguna de los siguientes casos:

    /*
    1. String vacio ("");
    2. Valor numérico que valga 0 o 0.0 (si se tratará de un número con decimales)
    3. Un string con un 0 --> "0"
    4. Un null 
    5. Un false
    6. Un array vacío
    7. Una variable declarada pero sin valor
    8. Una variable que no existe
    */

!empty($_POST["nombre"]) ? $nombre = $_POST["nombre"] : $nombre = "No se ha indicado el nombre";
!empty($_POST["apellidos"]) ? $apellidos = $_POST["apellidos"] : $apellidos = "No se ha indicado apellidos";
!empty($_POST["clave"]) ? $clave = $_POST["clave"] : $clave = "No se ha indicado la clave";
!empty($_POST["fecha"]) ? $fecha = $_POST["fecha"] : $fecha = date('Y-m-d');
!empty($_POST["fichero"]) ? $fichero = $_POST["fichero"] : $fichero = "No se ha indicado el fichero";
!empty($_POST["ficheros"][0]) ? $ficheros = $_POST["ficheros"] : $ficheros = ["No se ha indicado ningún fichero"];
!empty($_POST["marcas"]) ? $marcas = $_POST["marcas"] : $marcas = "No se ha indicado las marcas";
$color = $_POST["color"]; //Para el tema del color es más peculiar una cuestión: ¿El usuario realmente no ha seleccionado ningún color y sale el color negro en hexadecimal por defecto Ó si ha elegido por voluntad propia el color negro? Para poder saber esto, habría que usar Javascript para saber si ha hecho click o no.
!empty($_POST["ciudad"]) ? $ciudad = $_POST["ciudad"] : $ciudad = "No se ha indicado las ciudad";
!empty($_POST["distritos"]) ? $distritos = $_POST["distritos"] : $distritos = "No se ha indicado las distritos";
!empty($_POST["observaciones"]) ? $observaciones = $_POST["observaciones"] : $observaciones = "No se ha indicado los observaciones";


$campos =[
    "nombre"=> htmlspecialchars($nombre),
    "apellidos"=> htmlspecialchars($apellidos),
    "clave"=> htmlspecialchars($clave),
    "fecha"=> htmlspecialchars($fecha),
    "fichero" => htmlspecialchars($fichero),
    "ficheros"=> ($ficheros), //esto es un array
    "marcas"=> ($marcas), //esto es un array
    "ciudad"=> htmlspecialchars($ciudad),
    "distritos"=> ($distritos), //esto es un array
    "color"=> htmlspecialchars($color),
    "observaciones"=> htmlspecialchars($observaciones)
];

echo "<hr>";

echo "<pre>";
print_r($campos);
echo "</pre>";

echo "<hr>";

pintar_formulario($campos);

// echo "<table>"; 
// foreach ($campos as $clave => $valor) {
//     echo "<tr>";
//     echo "<th>$clave</th>";
//     echo "<td>";
//     if (is_array($valor)) {
//         foreach ($valor as $contenidoValor) {
//             echo nl2br("$contenidoValor \n");
//         }
//     } else {
//         echo $valor;
//     }
     
//     echo"</td>";
//     echo"</tr>";
// }
// echo"</table>";


echo "<p><a href='02_jueves_05_formulario.html'>Volver al formulario</a></p>";

?>