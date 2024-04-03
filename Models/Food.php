<?php

class Food extends Product {

    public $type;

    function __construct($name, $price, $description, $type){
        
        parent::__construct($name, $price, $description);

        $this->type = $type;
    }
}