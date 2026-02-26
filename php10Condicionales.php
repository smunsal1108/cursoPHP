<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10 Condicionales PHP</title>
</head>
<body>
<?
echo "<h1>Condicionales</h1>";
$a = rand(1,5);
$b = rand(1,5);
/* if..else*/
echo "<h2>if / elseif</h2>";
if ($a > $b) 
    echo "$a es mayor que $b";
 elseif ($a == $b) {
    echo "<strong>¡Coincidencia!</strong> ";
    echo "$a es igual que $b";
 }
  else 
    echo "$a es menor que $b";

    /*switch*/
echo "<h2>switch</h2>";
echo "<h3>caso1</h3>";
$numero = rand(1,100);
switch ($numero) {
    case $numero<30:
        echo "$numero menor que 30";
        break;
    case 30...50: // un rango
        echo "$numero está entre 30 y 50";
        break;
    default:
        echo "$numero mayor que 50";
}

echo "<h3>caso2</h3>";
$moneda=rand(1,2);
echo($moneda);

if ($moneda==1) $lado="cara" ;
else $lado="cruz";
$numero = rand(1,100);
echo ($numero);
echo ("<hr>");
switch ($numero) {
    case $moneda==1:
        echo "Salió $lado";
        break;
    case $numero<30:
        echo "$numero menor que 30 y salió $lado";
        break;
    case 31...50:
        echo "$numero está entre 30 y 50 y salió $lado";
        break;
    default:
        echo "$numero mayor que 50 y salió $lado";
}

?>
    
</body>
</html>
