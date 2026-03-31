<?php
    class Tablas{
        private $x;
        

        public function __construct($x){
            $this->x = $x;

        }
        public function mostrar(){
            for($i=1; $i<=10; $i++){
                $p=$i*$this->x;
                echo $this->x . " x $i = $p<br>";
            }
        }
        
       public function suma(){
            for($i=1; $i<=10; $i++){
                $p=$i+$this->x;
                echo $this->x . " + $i = $p<br>";
            }
       }
        public function division(){
            $a=$this->x;
            for($i=1;$i<=10;$i++){
                
                $r=0+$a;
                $e=$r/$i;
                echo"$r / $i = $e<br>";
                
                $a=$a+$this->x;
            }

        }
        public function resta(){
            $y=$this->x+1;
            for($i=1;$i<=10;$i++){
                $o=$y-$this->x;
                echo"$y - $this->x = $o<br>";
                $y=$y+1;

            }

        }

        
    }

    $t =new Tablas(7);
    $t->mostrar();
    echo"<br>";
    
    $u=new Tablas(7);
    $u->suma();
    echo"<br>";

    $b=new Tablas(9);
    $b->division();
    echo"<br>";

    $m=new Tablas(5);
    $m->resta();


    
?>