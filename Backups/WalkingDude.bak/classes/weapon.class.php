<?php


class Weapon extends Human {



    public function __construct(){

        $this->strength = rand(1,50);
        $this->stamina = rand(1,50);
        $this->coins = rand(10, 100);        
    }

}
