<?php

include_once("PropulsionSystem.php");

class ElectricMotor extends PropulsionSystem{
    function __construct(){ }
    public function work() {
        echo "Zumm zumm~! UwU 🐝🌼";
    }
}