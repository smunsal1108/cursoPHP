<?php
echo "<h2>Métodos estáticos</h2>";
class Calculadora {
    public static function sumar($a, $b) {
        return $a + $b;
        }
}

echo Calculadora::sumar(2, 3); 
/* como si hubiera hecho
$obj = new Calculadora();
echo $obj -> sumar(12,13); 
*/
echo "<hr>";
echo "<h2>Métodos <em>abstract</em></h2>";

abstract class Animal {
    abstract public function hacerSonido(); // Cualquier cosa que sea un Animal TIENE que saber hacerSonido(), obligo a las clases hijas a crearlo
}

class Gato extends Animal {
    public function hacerSonido() {
        return "Miau"; 
   }
}
$obj = new Gato();
echo $obj->hacerSonido();


echo "<hr>";
echo "<h2>Métodos finales</h2>";
class Animal2 {
    final public function hacerSonido() { // dará error porque es final
        return "Sonido genérico";
        }
    }

class Gato2 extends Animal2 {
    public function hacerSonido() { // reescribe (override) el método del padre
        return "Miau";
    }
}
$obj3 = new Animal2();
echo $obj3->hacerSonido();
?>