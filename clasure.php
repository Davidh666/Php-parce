<?php
class mate{
    public $oper;

    function __construct(Closure $oper){
        $this->oper = $oper;
    }
    public function ejecutar($a,$b){
        return ($this->oper)($a,$b);
    }
}
$m1 = new mate(function($a,$b){
    return $a+$b;
});
$m3 = new mate(function($a,$b){
    return $a-$b;
});
$m2 = new mate(function($a,$b){
    return $a*$b;
});
$m4 = new mate(function($a,$b){
    return $a/$b;
});
echo $m1->ejecutar(2, 3);
echo "<br>";
echo $m2->ejecutar(2, 3);
echo "<br>";
echo $m3->ejecutar(2, 3);
echo "<br>";
echo $m4->ejecutar(2, 3);
?>