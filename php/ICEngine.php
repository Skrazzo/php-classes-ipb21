<?php

include_once("PropulsionSystem.php");


class ICEngine extends PropulsionSystem{
    public function __construct(
        public $size,
        private $cylinderCount
    ) { }

    public function work() {
        echo "Bwumm bwumm~! UwU 🚗💨";
    }
}