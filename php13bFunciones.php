<?
$array = ["hola", "viernes", "casimiro", "carnavales"];
$array2 = array_map(function ($array) {return ucwords($array);}, $array);    

//$array2 = array_map(fn ($array)=> ucwords($array), $array);

echo "<pre>";
print_r ($array2);
echo "</pre>";


/* 
function primeraMayusc ($array){
    return ucwords($array);
}
 */

?>