<?php
class Operaciones {

    public function suma($a,$b){
        return $a + $b;
    }

    public function resta($a,$b){
        return $a - $b;
    }

    public function mul($a,$b){
        return $a * $b;
    }

    public function divi($a,$b){
        return $a / $b;
    }
}

class Ecuancion extends Operaciones{

    private $a;
    private $b;
    private $c;
    private $d;

    public function __construct($a,$b,$c,$d){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $this->d = $d;
    }

    public function solucion(){
        $s = $this->suma($this->a,$this->b);
        $d = $this->divi($s,$this->c);
        $p = $this->mul(5,$this->d);
        $c = $this->resta($d,$p);

        echo "Resultado: $c";
    }
}

$ecu = new Ecuancion(5,7,3,2);
$ecu->solucion();
?>