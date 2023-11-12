<?php
system('clear');

include 'Car.php';
include 'Train.php';


//$cat1 = new Cat; $cat1->name = 'Mincis';
//$cat2 = new Cat; $cat2->name = 'Brincis';

$car = new Car('Toyota', 124512);
$car->makeNoise();
echo 'Car milage: '. $car->get_milage() . "\n";

$train = new Train("Kawasaki",12410);
$train->makeNoise();
echo 'Train milage: ' . $train->get_milage() . "\n";



