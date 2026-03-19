<?php
// Clase padre
class ClasePadre {
    public $nombre;

    // Método protegido: solo accesible dentro de la clase o desde la hija
    protected function saludar() {
        return "<p>Hola, soy " . $this->nombre . "</p>";
    }
}

// Clase hija que hereda de ClasePadre
class ClaseHija extends ClasePadre {

    // Método público propio
    public function despedirse() {
        return "<p>" . $this->nombre . " se va</p>";
    }

    // Método público que llama al método protegido de la clase padre
    public function saludoHijo() {
        return $this->saludar();
    }
}

// Crear objeto de la clase hija
$persona = new ClaseHija();
$persona->nombre = "Casimiro";

// Llamadas a los métodos
echo $persona->saludoHijo();   // Llama al método protegido de la clase padre
echo $persona->despedirse();   // Método propio de la clase hija
?>