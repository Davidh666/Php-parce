<?php
class A{
    public function sA(){
        echo "Saludo A<br>";
    }
}

class B extends A{
    public function sB(){
        echo "Saludo B<br>";
    }
}

class C extends B{
    public function sC(){
        echo "Saludo C<br>";
    }
}

$c = new C();
$c->sC();
$c->sB();
$c->sA();
?>