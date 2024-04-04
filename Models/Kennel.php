<?php

require_once __DIR__ .'/Traits/Materials.php';
class Kennel extends Product {

    public $type;

    use Materials;
    

    function __construct($name, $price, $description, $image, $type, $materials){
        
        parent::__construct($name, $price, $description, $image);

        $this->type = $type;
        $this->materials = $materials;
    }
}