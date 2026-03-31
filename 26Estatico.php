<?php
    class Estatica{
        public static $cad="Hola";
        public static function saludo(){
            echo"Buenos dia";
        }
        public function saludo2(){
            echo"Pasos<br>";
        }

    }

echo Estatica::$cad."<br>";
echo Estatica::saludo()."<br>";



$saludo=new Estatica();
echo Estatica::saludo()."<br>";
$saludo->saludo2();
?>