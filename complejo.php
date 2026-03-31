<?php
    class complejo{
        private $a;
        private $b;
        private $c;
        private $d;

        public function __construct($a, $b, $c, $d) {
            $this->a = $a;
            $this->b = $b;
            $this->c = $c;
            $this->d = $d;
        }
        public function resultado(){
            $real= $this->a +$this->c;
            $imag= $this->b +$this->d;
            echo "$real + $imag i<br>";

        }

        public function resultado2(){
            $real= $this->a -$this->c;
            $imag= $this->b -$this->d;
            echo "$real + $imag i<br>";
        }
        public function resultado3(){
            $real= ($this->a * $this->c) - ($this->b * $this->d);
            $imag= ($this->a * $this->d) + ($this->b * $this->c);
            echo "$real + $imag i<br>";
        } 
        public function resultado4(){
            $denominador= ($this->c * $this->c) + ($this->d * $this->d);
            $real= (($this->a * $this->c) + ($this->b * $this->d)) /(($this->c * $this->c) + ($this->d * $this->d));
            $imag= (($this->b * $this->c) - ($this->a * $this->d)) /(($this->c * $this->c) + ($this->d * $this->d));
            echo "$real + $imag i<br>";
        } 


    }
    

    $num1 = new complejo(2, 3, 4, 5);
    $num1->resultado(); 
    $num2 = new complejo(2, 3, 4, 5);
    $num2->resultado2();
    $num3 = new complejo(2, 3, 4, 5);
    $num3->resultado3();
    $num4 = new complejo(2, 3, 4, 5);
    $num4->resultado4();
    

?>