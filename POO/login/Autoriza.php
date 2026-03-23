<?php
class Autoriza {

private $rutaJson;

public function __construct($rutaJson){
$this->rutaJson = $rutaJson;
}

public function cargarUsuarios(){ //Seria como el "leer_json"
if(!file_exists($this->rutaJson)){
return[];
}
$json = file_get_contents($this->rutaJson);
return json_decode($json, true);
}

public function login($usuario, $clave){
$usuarios = $this->cargarUsuarios();
print_r($usuarios);
foreach ($usuarios as $usu){
if($usu["usuario"]==$usuario)
return password_verify($clave, $usu["clave"]);

}
return false;
}
}
?>