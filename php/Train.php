<?php

include_once("Vehicle.php");

class Train extends Vehicle {
    static function makeNoise(){
        echo "Tuuu tuuuu~! UwU 🚂💨\n";
    }

    function get_milage(){
        return $this->milage;
    }
}


?>
