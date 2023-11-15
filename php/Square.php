<?php

class Square{
    public function __construct(private $w, private $h, private $c) {}

    public function makeNoise(){
        for($i = 0; $i < $this->h; $i++){
            for($j = 0; $j < $this->w; $j++){
                echo $this->c;
            }
            echo "\n";
        }
    }
}