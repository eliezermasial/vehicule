<?php
declare(strict_types = 1);

class vehicule {
    
    public function __construct(public string $make, public string $model)
    {

    }
    public function getDetail()
    {
        return "make: $this->make, model : $this->model";
    }

}

?>
