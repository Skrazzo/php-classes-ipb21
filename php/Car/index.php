<?php

include "Car.php";
include "Square.php";

$square = new Square(20, 10, '@');
$new_car = new Car('Red', 'Toyota', 69, 420, 4, 444, CarType::Hybrid);

print_r($new_car);

//$square->makeNoise();