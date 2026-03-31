<?php
    $obj = new class(700){
        public $x;
        public function __construct($x){
            $this->x = $x;
        }
    };

echo $obj->x;
?>