<?php

class Cat{
    public $name;
    private $age = 0;

    function birthday(){
        $this->age++;
    }

    static function moew(){
        print('"Mewo~" 🐾💕 ');
    }
}