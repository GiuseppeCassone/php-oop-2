<?php

class Category {

    public $type;
    public $icon;

    public function __construct($type, $icon){
        $this->type = $type;
        $this->icon = $icon;
    }

    public function getCategory() {
        return $this->type . ' ' . $this->icon . '.';
    }
}