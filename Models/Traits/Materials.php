<?php

trait Materials {

    public $materials;
   

    public function getMaterials() {
        return $this->materials;
    }

    public function setMaterials($materials) {
        $this->materials = $materials;
    }
}