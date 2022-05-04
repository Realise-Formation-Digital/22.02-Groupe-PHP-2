


<?php

include "human.class.php";


class Hero extends Human{

        public $name;
        
        public $bag = [];
        
        // public function __construct(){

        //         $this->name = $_POST['names'];
        //         $this->hero = $_POST['choix_hero'];
               
        //         if($this->hero == "TortueGeniale"){
        //             $heros = new TortueGeniale;
        //         }
        
        

        public function getNom(){
            return $this->name;
        }
        // public function setNom(){
        //     return $this->name;
        // }


        // protected function _combattre(){


        // }

        // private function _fuire(){


        // }

        // private function _mourir(){


        // }

        // private function _equiper(){


        // }

        // private function _desequiper(){


        // }

        // private function _acheter(){


        // }

        // private function _vendreDesequiper(){


        // }

        // private function _echanger(){


        // }

        // protected function _gagner(){


        // }

    }
    



    class TortueGenial extends Hero {


        public function __construct(){
            $this->life = 10;
            $this->xp = 0;
            $this->strength = 3;
            $this->stamina = 1;
            $this->coins = 20;
            $this->bag = [0 => new Armes()];
        }
    }



    class CaptainAmerica extends Hero {

        public function __construct(){
            $this->life = 10;
            $this->xp = 0;
            $this->strength = 1;
            $this->stamina = 3;
            $this->coins = 20;
            $this->bag = [0 => new Armes()];
        }
    }


    class Jocker extends Hero {

        public function __construct(){
            $this->life = 10;
            $this->xp = 0;
            $this->strength = 2;
            $this->stamina = 2;
            $this->coins = 20;
            $this->bag = [0 => new Armes()];
        }
    }

    class Sakura extends Hero {

        public function __construct(){
            $this->life = 10;
            $this->xp = 0;
            $this->strength = 1;
            $this->stamina = 2;
            $this->coins = 20;
            $this->bag = [0 => new Armes()];
        }
    }

    class Fred extends Hero {

        public function __construct(){
            $this->life = 10;
            $this->xp = 0;
            $this->strength = 5;
            $this->stamina = 5;
            $this->coins = 20;
            $this->bag = [0 => new Armes()];
        }
    }

    
    


    



    ?>

<!-- object(TortueGenial)#1 (7) 
{ ["life"]=> int(10) 
    ["xp"]=> int(0) 
    ["strength"]=> int(3) 
    ["stamina"]=> int(1) 
    ["coins"]=> int(20) 
    ["name"]=> string(5) "elyes" 
    ["bag"]=> array(1) { [0]=> object(Armes)#3 (5) { ["life"]=> NULL ["xp"]=> NULL ["strength"]=> int(42) ["stamina"]=> int(43) ["coins"]=> int(32) } } } -->
