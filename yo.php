<?php

    interface Actor{
        public function camina();


        public function dormir();

    }

    interface ObjetoInerte{
        public function inmobil();
        public function duro();
    }

    class Vehiculo implements Actor, ObjetoInerte{

        public function velocidad(){
            echo "Velocidad del vehículo es de 60km/h<br>";
        }
        public function color(){
            echo "Color del vehículo es rojo<br>";
        }
        public function camina(){
            echo "El vehículo camina hace que su dueño no camine<br>";
        }


        public function dormir(){
            echo "una persona duerme en su vehiculo<br>";
        }

        public function inmobil(){
            echo "El vehículo está inmóvil mientras que nose condusca<br>";
        }
        public function duro(){
            echo "El vehículo es duro por su material ante choques<br>";
        }


    }
    class coche extends Vehiculo{
        public function tamaño(){
            echo "Tamaño del coche es a gusto<br>";
        }
        public function marca(){
            echo "Marca del coche es a gusto<br>";
        }
    }
    class bicicleta extends Vehiculo{
        public function tamaño(){
            echo "Tamaño de la bicicleta es a gusto<br>";
        }
        public function marca(){
            echo "Marca de la bicicleta es a gusto<br>";
        }
        
    }
    abstract class Persona implements Actor{
        public function camina(){
            echo "una persona camina muy seguido<br>";
        }


        public function dormir(){
            echo "una persona solo duerme al dia solo 7 horas<br>";
        }

        public function estudiar(){
            echo "le gusta leer sobre historia<br>";
        }
        abstract public function ejercitarse();

    }

    class profesor extends Persona{
        public function enseñar(){
            echo "le gusta enseñar a sus estudiantes<br>";
        }
        public function comer(){
            echo "le gusta comer es sus tiempos libres<br>";
        }
        public function ejercitarse(){
            echo "le gusta correr<br>";
        }
    }
    class estudiante extends Persona{
        public function enseñar(){
            echo "le gusta aprender<br>";
        }
        public function comer(){
            echo "le gusta comer en clases<br>";
        }
        public function ejercitarse(){
            echo "le gusta nadar<br>";
        }
    }

echo"<table border=1 style='background-color:#0066cc;color:#ffffff;'>";
echo"<tr>";
echo"<td>";

$p= new Coche();
$p->velocidad();
$p->color();
$p->dormir();
$p->duro();
$p->inmobil();
$p->camina();
$p->tamaño();
$p->marca();
echo"</table>";
echo"</td>";
echo"</tr>";


echo"<br>";

echo"<table border=1>";
echo"<tr>";
echo"<td>";
$q= new Coche();
$q->velocidad();
$q->color();
$q->dormir();
$q->duro();
$q->inmobil();
$q->camina();
$q->tamaño();
$q->marca();
echo"</table>";
echo"</td>";
echo"</tr>";

echo"<br>";

echo"<table border=1>";
echo"<tr>";
echo"<td>";
$r = new profesor();
$r->ejercitarse();
$r->enseñar();
$r->comer();
$r->camina();
$r->dormir();
$r->estudiar();
echo"</table>";
echo"</td>";
echo"</tr>";

echo"<br>";
echo"<table border=1 color = red";
echo"<tr>";
echo"<td>";
$s = new estudiante();
$s->ejercitarse();
$s->enseñar();
$s->comer();
$s->camina();
$s->dormir();
$s->estudiar();
echo"</table>";
echo"</td>";
echo"</tr>";
?>

