<?php
class a{
    public function metodoA(){
        echo"metodoA<br>";
    }
    public function mmetodo(){
        echo "soy el metodo A<br>";
    }


}
class b extends a{
    public function metodoB(){
        echo "metodoB<br>";
    }
    public function mmetodoB(){
        echo "soy el metodo B<br>";
    }
}

$b=new b();
$b->metodoA();
$b->metodoB();
$b->mmetodo();
?>
