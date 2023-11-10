<?php


class Car {
    private $brand;

    function __construct($brand){
        $this->brand = $brand;
    }

    function __destruct(){
        echo "Dead :) <br>";
    }

    static function hello(){
        echo 'Hello my dear friend :)<br>';
    }

    function getBrand(){
        return $this->brand;
    }
}