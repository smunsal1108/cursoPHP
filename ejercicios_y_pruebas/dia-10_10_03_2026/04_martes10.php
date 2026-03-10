<?php 

require_once "../libreriasCreadas/libreriaFicheros.php";

$cadena = file_get_contents("../../JSON/banderas_azules.json");
$registros = json_decode($cadena, true);
foreach ($registros as &$array) {
    if (!filter_var($array["Año"], FILTER_VALIDATE_INT)) {
        $array["Bandera azul"] .= ", ".$array["Año"];
        $array["Año"] = $array["Notas"];
        $array["Notas"] = "";
    }
}


$jsonData = json_encode($registros, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
$arreglado = file_put_contents("../../JSON/banderas_azules.json", $jsonData);
echo "<pre>";
print_r($jsonData);
echo "</pre>";

//leer_pintar_JSON($arreglado);

?>