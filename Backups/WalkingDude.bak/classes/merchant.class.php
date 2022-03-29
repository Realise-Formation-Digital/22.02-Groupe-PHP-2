<?php


include "human.class.php";

class Merchant extends Human{


    public function __construct(){
        $this->xp = rand(1, 50);
        $this->bag = [new Weapon(), new Weapon(), new Weapon()];

    }


    protected function buy(){



    }


    protected function sell(){



    }






}
