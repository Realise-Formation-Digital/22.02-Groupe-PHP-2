<?php

include "Humain.class.php";

class Hero extends Humain{

        
        protected $bag = [];
        


        public function __construct(){
            $this->life = 10;
            $this->xp = 0;
            $this->strength = 1;
            $this->$stamina = 1;
            $this->coins = 20;
            $this->bag = [0 => new Armes()];

            if(!empty($this->bag)){
            
                $this->stamina += Armes()->$stamina;
                $this->strength += Armes()->$strength;
            }
        }


        protected function _combattre(){


        }

        private function _fuire(){


        }

        private function _mourir(){


        }

        private function _equiper(){


        }

        private function _desequiper(){


        }

        private function _acheter(){


        }

        private function _vendreDesequiper(){


        }

        private function _echanger(){


        }

        protected function _gagner(){


        }

    }