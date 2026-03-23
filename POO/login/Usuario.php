<?php
    class Usuario {
        private $usuario;
        public function __contruct($usuario){
            $this->usuario = $usuario;
        }
        public function getUsuario(){
            return $this->usuario;
        }
    }
?>