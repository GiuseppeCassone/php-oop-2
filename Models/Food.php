<?php

class Food extends Product {

    public $quantity;

    function __construct($name, $price, $description, $quantity){
        
        parent::__construct($name, $price, $description);

        $this->quantity = $quantity;
    }
}