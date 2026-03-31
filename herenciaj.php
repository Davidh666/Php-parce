<?php

    class A{
        public function mA(){
            echo "A<br>";
        }
    }
    class B extends A{
        public function mB(){
            echo "B<br>";
        }
    }
    class C extends A{
        public function mC(){
            echo "C<br>";
        }
    }  
    class D extends A{
        public function mD(){
            echo "D<br>";
        }
    }  
$r=new B();
$r->mB();
$r->mA();

$t=new C();
$t->mC();
$t->mA();

$u=new D();
$u->mD();
$u->mA();



?>