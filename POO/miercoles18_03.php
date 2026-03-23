<?php
    class IMC {
        private $nombre;
        private $peso;
        private $altura;
        public function __construct($nombre, $peso, $altura){
            $this -> nombre = $nombre;
            $this -> peso = $peso;
            $this -> altura = $altura/100;
        }

        public function calculo_IMC(){
            /* imc = peso / (altura * altura) */
            return $this->peso / ($this->altura ** 2);
        }
        public function mostrar_resultado(){
            $imc  = round($this -> calculo_IMC(), 2);
            return $this->nombre." tienes un IMC = ".$imc;
        }
    }

$cliente1 = new IMC("Casimiro", 67, 177);

echo $cliente1 -> mostrar_resultado();
?>
