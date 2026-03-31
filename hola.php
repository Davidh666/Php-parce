<?php
    class Persona{
        private $ci;
        private $nombre;
        private $apellido;

        public function __construct($ci, $nombre, $apellido){
            $this->ci = $ci;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
        }
        public function mostrarDatos(){
            echo "CI: " . $this->ci . "<br>";
            echo "Nombre: " . $this->nombre . "<br>";
            echo "Apellido: " . $this->apellido . "<br>";
        }
    }

    $per1 = new Persona("12345678", "Juan", "Perez");
    $per1->mostrarDatos();
    $per2 = new Persona("87654321", "Maria", "Gomez");
    $per2->mostrarDatos();
?>
