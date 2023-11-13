<?php

include_once("Vehicle.php");

class Car extends Vehicle {
    static function makeNoise(){
        echo "Beep beep~! UwU 🚗💨\n";
    }
}