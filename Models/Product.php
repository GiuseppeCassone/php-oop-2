<?php

class Product {

    public $name;
    public $price;
    public $description;
    public $image;
    public $category;

    
    /**
     * __construct
     *
     * @param  string $name
     * @param  float $price
     * @param  string $description
     * @param  string $image
     */
    public function __construct($name, $price, $description, $image) {
        $this->name = $name;

        if(is_numeric($price)) {
            $this->price = $price;

        } else {
            throw new Exception("Il prezzo inserito non è un valore numerico!");
        }

        $this->description = $description;
        $this->image = $image;
    }

}