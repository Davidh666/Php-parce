<?php

abstract class p{
    public function metodoC(){
        echo"<table border=1>";
        echo"<tr>";
        echo"<td>";
        echo"Soy concreto<br>";
        echo"</td>";
        echo"</tr>";
        echo"</table>";
    
    }
    abstract public function metodoA();
}

class A extends P{
    public function metodoX(){
        echo"soy x<br>";
    }
    public function metodoA()
    {
        echo"jaja<br>";
    }
}
class B extends P{
    public function metodoY(){
        echo"soy y <br>";
    }
    public function metodoA()
    {
        echo"salud<br>";
    }
}

$q= new a();
$q->metodoX();
$q->metodoA();
$q->metodoC();
echo"<br>";


$w= new b();
$w->metodoY();
$w->metodoA();
$w->metodoC();


?>