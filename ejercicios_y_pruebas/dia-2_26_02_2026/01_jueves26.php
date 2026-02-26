<? //

$nombre = "Pepe";
$dato = 23;
$datos = [3, "hola", false, 56];
$datos[3];

echo $nombre;
echo "<p><strong>$nombre</strong> ha llegado a su localidad</p>"; //en php puedes llamar a una variable y tener texto con comillas dobles 
echo '<p><strong>$nombre</strong> ha llegado a su localidad</p>'; //pero no puedes hacerlo si es con conmillas simples SI NO CONCATENAS.
echo '<p><strong>'.$nombre.'</strong> ha llegado a su localidad</p>'; //concatenar con punto (.)

?>