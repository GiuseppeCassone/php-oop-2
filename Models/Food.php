<?php

class Food extends Product {

    public $type;
    public $weight;


    function __construct($name, $price, $description, $image, $type, $weight){
        
        parent::__construct($name, $price, $description, $image);

        $this->type = $type;
        $this->weight = $weight;
    }
}