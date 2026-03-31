<?php
    interface Cajero{
        public function darDinero();

    }

    class X implements Cajero{
        public function saluda(){
            echo"Hola<br>";
        }
        public function darDinero(){
            echo"Disfruta tus gastos 0%<br>";
        }
    }
    class Y implements Cajero{
        public function saluday(){
            echo"Hola<br>";
        }
        public function darDinero(){
            echo"Te cobro 10%<br>";
        }
    }
    class Z implements Cajero{
        public function saludaz(){
            echo"Hola<br>";
        }
        public function darDinero(){
            echo"Te cobro 20%<br>";
        }
    }




   
    
   

    $x = new X();
    $x->saluda();      
    $x->darDinero();    
    $y = new Y();
    $y->saluday();     
    $y->darDinero();    
    $z = new Z();
    $z->saludaz();     
    $z->darDinero(); 

?>