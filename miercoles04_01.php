<link rel="stylesheet" href="lunes02_03.css">
<?php
include_once "jueves26_externo.php";
$edades = [23,45,11,90,45];

$pares = array_filter($edades, fn($edad)=>$edad%2==0);
print_r($pares);
echo "<hr>";
$doble = array_map(fn($edad)=>$edad*2,$edades);
print_r($doble);
echo "<hr>";
$suma = array_reduce($edades,fn($acum, $edad)=>$acum+$edad,0);
echo $suma;
echo "<hr>";
$alumnos = [
    [
        "nombre" => "Ana",
        "edad" => 16,
        "curso" => "4º ESO",
        "matemáticas" => 8,
        "lengua" => "",
        "inglés" => 3
    ],
    [
        "nombre" => "Carlos",
        "edad" => 17,
        "curso" => "1º Bachillerato",
        "matemáticas" => 6,
        "lengua"=>5,
        "inglés" => 7
    ],
    [
        "nombre" => "Lucia",
        "edad" => 16,
        "curso" => "4º ESO",
        "matemáticas" => 9,
        "lengua" => 3,
        "inglés" => 2
    ]
];
// array_filter() Alumnos de 4º ESO
$alumCuarto = array_filter($alumnos, fn($alumno)=>$alumno["curso"]=="4º ESO");
echo "<pre>";
pintar_tabla($alumCuarto);
echo "</pre>";
echo "<hr>";
// array_filter() con los que tiene nota de lengua
$alumLengua = array_filter($alumnos,fn($alumno)=>!empty($alumno["lengua"]));
print_r($alumLengua);

// array_map() Obtener sólo los nombres
$nombres = array_map(fn($alumno)=>["Nom"=>$alumno["nombre"],"cur"=>$alumno["curso"]] ,$alumnos);
pintar_tabla($nombres);

// array_map() Añadir campo "aprobado" con valor Sí o No dependiendo de la media asignaturas

$alumnosConEstado = array_map(
    function ($alumno){
        $media = ($alumno["matemáticas"]+
        (is_numeric($alumno["lengua"])?$alumno["lengua"]:0)+
        $alumno["inglés"])/3;
        $media>=5 ? $alumno["aprobado"]="Sí" : $alumno["aprobado"]="No";
        return $alumno; 
    }
    ,$alumnos);
pintar_tabla($alumnosConEstado);

// array_reduce() Obtener el alumno con mayor nota en inglés
$mejorIngles = array_reduce($alumnos, 
    function ($mejor, $alumno) {
    if ($mejor === null || $alumno["inglés"] > $mejor["inglés"]) return $alumno;
    return $mejor;
    }
    , null);
echo "<pre>";
print_r($mejorIngles);
echo "</pre>";

$mejorNotaIngles = array_reduce($alumnos,
    function ($maxNota, $alumno){
        if ($alumno["inglés"]>$maxNota) return $alumno["inglés"];
        return $maxNota;
    },
    0
);
echo $mejorNotaIngles;

$alumnosMejorNota = array_filter($alumnos, fn($alumno)=>$alumno["inglés"]==$mejorNotaIngles);

pintar_tabla($alumnosMejorNota);

?>