<?php

class factorial{
   
    public function calcular(closure $num){
        $factorial = 1;
        for($i = 1; $i <= $num; $i++){
            $factorial *= $i;
        }
        return $factorial;
    }
}

    



$calc = new factorial();
echo  $calc->calcular();
?>

