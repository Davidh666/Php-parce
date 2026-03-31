<?php
    class ecuacion{
        private $a;
        private $b;
        private $c;

        public function __construct($a, $b, $c) {
            $this->a = $a;
            $this->b = $b;
            $this->c = $c;
        }

        private function d() {
            return $this->b * $this->b - 4 * $this->a * $this->c;
        }
        public function raices(){
            if($this->d()==0){
                $x= -$this->b/(2*$this->a);
                echo "x1=x2=$x <br>";

            }
            else if($this->d()>0){
                $x1=(-$this->b+sqrt($this->d()))/(2*$this->a);
                $x2=(-$this->b-sqrt($this->d()))/(2*$this->a);
                echo "x1=$x1 , x2=$x2<br>";
               
            }
            else {
                $real=-$this->b/(2*$this->a);
                $imag=sqrt(-$this->d())/(2*$this->a);
                echo "x1=$real + $imag i <br>";
                echo "x2=$real - $imag i <br>";

            }
        }
    }


    $num = new ecuacion(1,2,1);
    $num->raices();
    $num2= new ecuacion(1,3,1);
    $num2-> raices();
    $num3 = new ecuacion(2,1,2);
    $num3-> raices();
?>