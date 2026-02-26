<?
/* EXPLICACIÓN DE SALIDAS POR PANTALLA */
$prueba = ["hola",90];
echo $prueba[0]." | ";
print $prueba[0];

var_dump($prueba);
echo "<hr>";
print_r($prueba);

echo ("<pre>");
var_dump($prueba);
echo ("</pre>");

echo ("<pre>");
print_r($prueba);
echo ("</pre>");

/* Array con índices */

echo "<h1>ARRAYS</h1>";
echo "<h2>ARRAYS con índices</h2>";
$listado = [
    0 => "Juan",
    1 => "Ana"
];
$listado = ["Juan", "Ana"];

//  $listado = ["Juan","Ana"];
print("<pre>");
print_r($listado);
print("</pre>");
echo $listado[0];
$listado = [
    0 => "Juan",
    2 => "Ana"
];
echo "<hr>";
print_r($listado);
echo $listado[2]; //Se accede con corchetes
// Si ponemos índice 1 dará error porque coge los índices de dos en dos
echo "<hr>";

$paises = [
    "Paris" => "Francia",
    "Lisboa" => "Portugal",
    "Oslo" => "Noruega"
];
print_r($paises);
echo $paises["Lisboa"];
$paises["Bruselas"] = "Bélgica";
echo "<hr>";
print_r($paises);
echo $paises["Bruselas"];
// probar con , $paises[0]; $paises["Roma"]; daría error

/* Array sin especificar índices (se emplean numéricos) */
echo "<h2>ARRAYS sin índices</h2>";
$palos = array("soleá", "tango", "fandango", "petenera");
print_r($palos);
echo $palos[2];
echo "<hr>";

/* Array mixtos */

echo "<h2>ARRAYS mixtos</h2>";
$mixto = [
    "a",
    "b",
    4 => "c",
    "d" 
];

$mixto["saludo"]="hola";
echo("<pre>");
print_r($mixto);
echo "</pre>";
echo "$mixto[0] | $mixto[4] | $mixto[5]";

/* Array múltiples */

echo "<h2>ARRAYS múltiples</h2>";

$multiple = array ( "nombres"  => array ( "Casimiro","Carlos","Lucía"),
                    "edades" => array ( 34,45,26),
                    "departamento"   => array ("Técnico", "Contabilidad","Técnico"));


echo $multiple["departamento"][1], " | ";
$multiple["edades"][3]  = 76;// añadiendo una nueva edad
print_r($multiple["edades"]);
print("<pre>");
print_r($multiple);
print("</pre>");
echo "<hr>";
echo "<hr>";
echo "<h2>Recorriendo un array múltiple con foreach</h2>";
$multiple = array ( 
    "nombres"  => array ( "Casimiro","Carlos","Lucía"),
    "edades" => array ( 34,45,26),
    "departamento"   => array ("Técnico", "Contabilidad","Técnico"));

foreach ($multiple as $x => $array2){ // $x es el índice de multiple y $array2 es el contenido de cada elemneto de multiple
    echo "<h3>$x</h3>";
    foreach($array2 as  $contenido){
        echo "<p>$contenido</p>";
    }
}


/* Rellenar  un array con while*/

echo "<h2>Rellenar  un ARRAY con while</h2>";
$puntos = array(); 
$i = 0;
while ($i<=4) {
    $puntos[$i]=$i**3;
    echo "<p>$i----$puntos[$i]</p>";
    $i++;
}
print_r ($puntos);
echo $puntos[2];
/* Rellenar  un array con do..while*/

echo "<h2>Rellenar  un ARRAY con do..while</h2>";
$puntos = array();
$i = 0;
do {
    $puntos[$i]=$i**2;
    $i++;
}while ($i<=3);
print_r($puntos);
echo $puntos[2];



?>