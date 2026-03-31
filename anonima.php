<?php
    $x =function(){
        echo "hola<br>";
    };
    $x();
    $y = function($a, $b){
        return $a + $b;
    };
    echo $y(2,3);
?>