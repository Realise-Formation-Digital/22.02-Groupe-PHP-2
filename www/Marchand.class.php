<?php

class Marchands extends Humain{



    public function __construct(){
        $this->xp = rand(1, 50);
        $this->bag = [new Armes(), new Armes(), new Armes()];

    }


    protected function acheter(){



    }


    protected function vendre(){



    }






}