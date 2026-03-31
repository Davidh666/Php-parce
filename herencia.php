<?php
class Persona{
    private $ci;
    private $nombComp;

    public function __construct($ci,$nombComp){
        $this->ci=$ci;
        $this->nombComp=$nombComp;
    }

    public function getCi(){
        return $this->ci;
    }
    public function getNombComp(){
        return $this->nombComp;
    }
    public function setCi($ci){
        $this->ci=$ci;
    }
    public function setNombComp($nombComp){
        $this->nombComp=$nombComp;
    }

    public function showData(){
        echo "Ci: ".$this->ci."<br>";
        echo "Nombre Completo: ".$this->nombComp."<br>";
        
    }



}

class universitario extends Persona{
    private $cu;
    private $carrera;
    public function __construct($cu,$carrera,$ci,$nombComp){
        parent::__construct($ci,$nombComp);
        $this->cu=$cu;
        $this->carrera=$carrera;

    }

    public function getCu(){
        return $this->cu;
    }
    public function getCarrera(){
        return $this->carrera;
    }   
    public function setCu($cu){
        $this->cu=$cu;
    }
    public function setCarrera($carrera){
        $this->carrera=$carrera;
    }
    public function mostrarDatos(){
        
        echo "Cu: ".$this->cu."<br>";
        echo "Carrera: ".$this->carrera."<br>";
    }


}

$per=new universitario(355059,"Sistemas",7482556,"David Jesus Herrera");
$per->showData();
$per->mostrarDatos();
$per->setNombComp("jesus");
$per->showData();
$per->mostrarDatos();
echo"<br>";


$per2=new universitario(456365,"Medicina",544545,"Brenda Nicol Herrera");

$per2->showData();
$per2->setNombComp("Maria");
$per2->mostrarDatos();

$per2->showData();
$per2->mostrarDatos();
echo"<br>";



$per3=new universitario(264656,"Idiomas",3545245,"Marco Antonio Gonzales");

$per3->showData();
$per3->mostrarDatos();
$per3->setNombComp("jorge");
$per3->showData();
$per3->mostrarDatos();


?>