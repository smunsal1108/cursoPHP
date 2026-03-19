<?php
class Animal {
    public function hacerSonido() {
        return "Sonido genérico de animal";
    }
}

class Perro extends Animal {
    public function hacerSonido() {
        return "Guau guau";
    }
}

class Gato extends Animal {
    public function hacerSonido() {
        return "Miau miau";
    }
}

// Polimorfismo: mismo método, diferentes comportamientos
$animales = [new Animal(), new Perro(), new Gato()];

foreach ($animales as $animal) {
    echo "<p>".$animal->hacerSonido()."</p>";
}
?>