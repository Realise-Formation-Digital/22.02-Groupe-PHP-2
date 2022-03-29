<?php


class Monster extends Human{

    protected $weapon;

    public function __construct(){

        $this->xp = rand(1,50);
        $this->strength = rand(1, $this->xp);
        $this->stamina = rand(1,$this->stamina);
        $this->weapon = rand(0, new Weapon());
        $this->coins = rand(0,50);

       

    }



}
