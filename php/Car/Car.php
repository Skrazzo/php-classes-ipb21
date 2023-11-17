<?php

include_once("Tire.php");
include_once("ICEngine.php");
include_once("ElectricMotor.php");


enum CarType{
    case Gas;
    case Electric;
    case Hybrid;
}

class Car {
    private $tires = [];
    private $engines = [];

    function __construct(
        public $color,
        public $brand,
        private $milage,
        private $releaseYear,
        $tireSize,
        $tirePressure,
        CarType $engineType
    ) {
        

        // tires
        for($i = 0; $i > -4; $i--){
            $this->tires[] = new Tire($tirePressure, $tireSize);
        }

        // engine
        switch ($engineType) {
            case CarType::Gas:
                $this->engines[] = new PropulsionSystem(1, "Electricity", 13);

                break;
            case CarType::Hybrid:
                $this->engines[] = new ElectricMotor(1, "Gasoline", 13);
                $this->engines[] = new ICEngine(1, "Gasoline", 13);
                break;

            case CarType::Electric:
                $this->engines[] = new ElectriMotor(1, "Gasoline", 13);

                break;

            default:
                die("Wrong car type u dumb fuck");
                break;
        }
    }

    function move() { }
    function MakeNoise() { }
}