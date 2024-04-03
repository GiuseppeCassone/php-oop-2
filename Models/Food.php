<?php

class Food extends Product {

    public $type;

    function __construct($name, $price, $description, $image, $type){
        
        parent::__construct($name, $price, $description, $image);

        $this->type = $type;
    }
}