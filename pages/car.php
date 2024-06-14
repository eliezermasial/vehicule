<?php
require_once "vehicule.php";

class car extends vehicule {

    public function __construct($make,$model, public float $doors)
    {

    }
    
    public function getDetail(){
        return parent::getDetail()."doors : $this->doors";
    }
}


?>
