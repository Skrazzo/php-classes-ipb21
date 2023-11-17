<?php

include_once("Seed.php");

abstract class Fruit{
    protected $seeds = [];

    function __construct(public $color, protected $weight, protected $seedCount) {
        for ($i = 0; $i < $this->seedCount; $i++) {
            $this->seeds[] = new Seed(23, 2, 'black');
        }
    }

    abstract function ripen();


    
}

