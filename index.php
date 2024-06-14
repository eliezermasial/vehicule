<?php
require_once "pages/vehicule.php";
require_once "pages/car.php";
require_once "pages/electricCar.php";

$vehicle = new vehicule("toyota","yaris");
var_dump($vehicle);

$car = new car("toyota","yaris","4");
var_dump($car);

$ElectricCar = new electricCar("toyota","yaris","4","0");
var_dump($ElectricCar);

?>