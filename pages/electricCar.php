<?php
require_once "car.php";

class electricCar extends car {
    
    public function __construct(public string $make, public string $model, public float $doors,protected float $batterycapacity)
    {

    }
    
    public function getDetail(){

        return parent::getDetail()."batterycapacity :".$this->getBatterycapacity();
    }

}

?>
