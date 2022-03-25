<?php
include "Humain.class.php";
include "MArchand.class.php";

class Armes extends Humain {



    public function __construct($nom){

        $this->strength = rand(1,50);
        $this->stamina = rand(1,50);
        $this->coins = rand(10, 100);        
    }

}