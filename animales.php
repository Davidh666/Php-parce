<?php
    class Animal{
        private $sonido;
        private $alimentos;
        private $habitat;
        private $nombreCientifico;


        public function __construct($sonido,$alimentos,$habitat,$nombreCientifico){
            $this->sonido = $sonido;
            $this->alimentos = $alimentos;
            $this->habitat = $habitat;
            $this->nombreCientifico = $nombreCientifico;

        }
        public function getSonido() {
            return $this->sonido;
        }

        public function getAlimento(){
            return $this->alimentos;
        }

        public function getHabitat() {
            return $this->habitat;
        }

        public function getNombreCientifico() {
            return $this->nombreCientifico;
        }

        }
        
    class Canino extends Animal{
        public function emitirSonido() {
            echo "El canino hace " . $this->getSonido() . "<br>";
        }
        public function jugar() {
            echo "El canino juega con su comida.<br>";
        }
    }
    class Felino extends Animal{
        public function emitirSonido() {
            echo "El felino hace " . $this->getSonido() . "<br>";
        }
        public function jugar() {
            echo "El felino juega con su comida.<br>";
        }
    }

    class perro extends Canino{
        public function comer() {
            echo "El perro le gusta comer con su " . $this->getAlimento() . "<br>";
        }
        public function jugar2() {
            echo "El perro juega con su pelota.<br>";
        }
    }
    class lobo extends Canino{
        public function comer() {
            echo "El lobo le gusta comer con su " . $this->getAlimento() . "<br>";
        }
        public function jugar2() {
            echo "El lobo juega con su pelota.<br>";
        }
    }
    class gato extends Felino{
        public function emitirSonido2() {
            echo "El gato hace " . $this->getSonido() . "<br>";
        }
        public function jugar2() {
            echo "El gato juega con su almohada.<br>";
        }
    }
    class leon extends Felino{
        public function emitirSonido2() {
            echo "El león hace " . $this->getSonido() . "<br>";
        }
        public function jugar() {
            echo "El león juega con su comida.<br>";
        }
        public function jugar2() {
            echo "El león juega con su pelota.<br>";
        }
    }
$p= new perro("guau", "croquetas", "doméstico", "Canis lupus familiaris");
$p->emitirSonido();
$p->comer();
$p->jugar();
$p->jugar2();

echo"<br>";

$q= new lobo("aullido", "carne", "bosque", "Canis lupus");
$q->emitirSonido();
$q->comer();
$q->jugar();
$q->jugar2();

echo"<br>";

$r =new gato("maullido", "pescado", "doméstico", "Felis catus");
$r->emitirSonido();
$r->emitirSonido2();
$r->jugar();
$r->jugar2();
echo"<br>";

$s =new leon("rugido", "carne", "sabana", "Panthera leo");
$s->emitirSonido();
$s->emitirSonido2();
$s->jugar();
$s->jugar2();

?>