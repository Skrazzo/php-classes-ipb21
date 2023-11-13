<?php

abstract class Vehicle{
    private $brand;
    protected $milage;

    function __construct($brand, $milage){
        $this->brand = $brand;
        $this->milage = $milage;

        echo $this->brand . ": Nyaa~! You awive! UwU 🌟💖\n";
    }

    function __destruct(){
        echo $this->brand . ": Oh noes! (＞﹏＜) But wait, is this a ghostly chat? Boo~! 👻💦 \n";
    }

    function get_brand(){
        return $this->brand;
    }

    function get_milage(){
        return $this->milage;
    }

    // shitais funkcijai ir vienmer jabut
    abstract static function makeNoise();
}