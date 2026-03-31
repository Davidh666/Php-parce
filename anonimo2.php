<?php
    function operacion($a,$b,$holamundo){
        $r =$holamundo($a,$b);
        echo"resultado: $r<br>";
    }
    $sumar = function($x,$y){
        return $x+$y;
    };

    $restar = function($x,$y){
        return $x-$y;
    };
    $multiplicar = function($x,$y){
        return $x*$y;
    };
    $dividir = function($x,$y){
        return $x/$y;
    };
    operacion(3,4,$sumar);
    operacion(5,4,$restar);
    operacion(3,4,$multiplicar);
    operacion(6,3,$dividir);

?>