<?php
    interface Y{
        public function hola();


        public function dormir();

    }

    interface X{
        public function hola2();
        public function dormir2();
    }

    abstract class q{
        public function saludo(){
            echo "buenos dias<br>";
        }

        
        abstract public function comer();
    }

    class p extends q implements Y,X{
        public function hola(){
            echo "hola como estas<br>";
        }
        public function hola2(){
            echo "hello good morning<br>";
        }
        public function dormir(){
            echo"duermo 24 horas<br>";
        }
        public function dormir2(){
            echo"duermo 12 horas<br>";
        }
        public function comer(){
            echo "me gusta comer saludable<br>";
        }
        public function nadar(){
            echo"me gusta nadar en aguas frias<br>";
        }
        

    }


    class A extends p{
        public function estudiar(){
            echo "tengo tarea<br>";
        }
        public function jugar(){
            echo"me gusta jugar con la pelota<br>";
        }


    }

    class B extends p{
        public function estudiar2(){
            echo "tengo examen<br>";
        }
        public function jugar(){
            echo"me gusta jugar con el perro<br>";
        }
        

    }


    $hijo= new A();
    $hijo->estudiar();
    $hijo->jugar();
    $hijo->hola();
    $hijo->hola2();
    $hijo->dormir();
    $hijo->dormir2();
    $hijo->saludo();
    $hijo->comer();
    $hijo->nadar();
  
    echo"<br>";


    $hijo2= new B();
    $hijo2->estudiar2();
    $hijo2->jugar();
    $hijo2->hola();
    $hijo2->hola2();
    $hijo2->dormir();
    $hijo2->dormir2();
    $hijo2->saludo();
    $hijo2->comer();
    $hijo2->nadar();

?>