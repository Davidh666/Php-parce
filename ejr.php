<?php

// Las interfaces definen contratos (qué debe hacer la clase)
interface ComunicacionInterface {
    public function hola();
    public function dormir();
}

interface ComunicacionInglesInterface {
    public function hola2();
    public function dormir2();
}

// Clase abstracta: no se puede instanciar, sirve de base
abstract class PersonaBase {
    public function saludo() {
        echo "Buenos días<br>";
    }

    // Obliga a las clases hijas a implementar este método
    abstract public function comer();
}

// Clase intermedia que implementa interfaces y hereda de la abstracta
class Persona extends PersonaBase implements ComunicacionInterface, ComunicacionInglesInterface {
    public function hola() {
        echo "Hola, ¿cómo estás?<br>";
    }

    public function hola2() {
        echo "Hello, good morning<br>";
    }

    public function dormir() {
        echo "Duermo 24 horas<br>";
    }

    public function dormir2() {
        echo "Duermo 12 horas<br>";
    }

    public function comer() {
        echo "Me gusta comer saludable<br>";
    }

    public function nadar() {
        echo "Me gusta nadar en aguas frías<br>";
    }
}

// Clase específica para un Estudiante (Hijo A)
class EstudianteA extends Persona {
    public function estudiar() {
        echo "Tengo tarea<br>";
    }

    public function jugar() {
        echo "Me gusta jugar con la pelota<br>";
    }
}

// Clase específica para un Estudiante (Hijo B)
class EstudianteB extends Persona {
    public function estudiar2() {
        echo "Tengo examen<br>";
    }

    public function jugar() {
        echo "Me gusta jugar con el perro<br>";
    }
}

// --- Pruebas de ejecución ---

echo "<strong>Resultado Hijo A:</strong><br>";
$hijo = new EstudianteA();
$hijo->estudiar();
$hijo->jugar();
$hijo->saludo();
$hijo->hola();
$hijo->dormir();
$hijo->dormir2();
$hijo->comer();
$hijo->nadar();

echo "<br><strong>Resultado Hijo B:</strong><br>";
$hijo2 = new EstudianteB();
$hijo2->estudiar2();
$hijo2->jugar();
$hijo2->saludo();
$hijo2->dormir();
$hijo2->dormir2();
$hijo2->hola2();
$hijo2->comer();
$hijo2->nadar();