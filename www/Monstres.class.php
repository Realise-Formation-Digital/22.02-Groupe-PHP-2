<?php


class Monstres extends Humain{

    protected $weapon;

    public function __construct(){

        $this->xp = rand(1,50);
        $this->strength = rand(1, $this->xp);
        $this->stamina = rand(1,$this->stamina);
        $this->weapon = rand(0, new Armes());
        $this->coins = rand(0,50);

       

    }



}