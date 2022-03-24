<?php

include "Humain.class.php";

class Hero extends Humain{

        
        protected $bag = [];
        


<<<<<<< Updated upstream
        public function __construct(){
            $this->life = 10;
            $this->xp = 0;
            $this->strength = 1;
            $this->$stamina = 1;
            $this->coins = 20;
        }
=======
        protected $life;
        protected $xp;
        protected $strength;
        protected $stamina ;
        protected $bag = [];
        protected $coins;
>>>>>>> Stashed changes



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