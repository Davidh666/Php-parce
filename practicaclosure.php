<?php
class Mate{
    public Closure $oper;
    
    public function ejecutar($n){
        return ($this->oper)($n);
    }
}
$m1 = new Mate();

$m1->oper = (function($n){
    if ($n < 0) return "No definido";
    $resultado = 1;
    for ($i = 2; $i <= $n; $i++) {
        $resultado *= $i;
    }
    return $resultado;
});

echo"<table border='1';text-align='center'>";
echo "<tr><th>Valor</th><th>Factorial</th></tr>";
echo "<tr><td>5</td><td>" . $m1->ejecutar(5) . "</td></tr>";
echo "<tr><td>6</td><td>" . $m1->ejecutar(6) . "</td></tr>";
echo "<tr><td>7</td><td>" . $m1->ejecutar(7) . "</td></tr>";
echo "<tr><td>2</td><td>" . $m1->ejecutar(2) . "</td></tr>";
echo "</table>";