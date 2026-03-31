<?php
class Operaciones{

    public function suma($a,$b){
        return $a + $b;
    }

    public function resta($a,$b){
        return $a - $b;
    }

    public function multi($a,$b){
        return $a * $b;
    }

    public function divi($a,$b){
        return $a / $b;
    }
}

class Ecuacion extends Operaciones{

    private $a;
    private $b;

    public function __construct($a,$b){
        $this->a = $a;
        $this->b = $b;
    }

    public function resultado(){

        $z = $this->suma($this->a,$this->b);
        $r = $this->resta($this->a,$this->b);
        $m = $this->multi($this->a,$this->b);
        $d = $this->divi($this->a,$this->b);

        echo "z = a + b = $z <br>";
        echo "a - b = $r <br>";
        echo "a * b = $m <br>";
        echo "a / b = $d <br>";
    }
}

$ecu = new Ecuacion(8,4);
$ecu->resultado();
?>