<?php

include("./hero.class.php");
include("./monster.class.php");
include("./merchant.class.php");
include("./weapon.class.php");


// Properties

class Game
{
    protected $_hero;
    protected $_monster;
    protected $_merchant;
    protected $_weapon = [];


// Methods

    function __construct()
    {
        $this->_hero = new Hero();
        $this->_monster = new Monster();
        $this->_merchant = new Merchant();
        $this->_weapon = new Weapon();
    }


    public function setHero($_hero)
    {
        $this->_hero = $_hero;
    }

    protected function getHero()
    {
        return $this->_hero;
    }

    public function setMonster($_monster)
    {
        $this->_monster = $_monster;
    }

    public function getMonster()
    {
        return $this->_monster;
    }

    public function setMerchant($_merchant)
    {
        $this->_merchant = $_merchant;
    }

    public function getMerchant()
    {
        return $this->_merchant;
    }

    protected function setWeapon($_weapon)
    {
        $this->_weapon = $_weapon;
    }

    public function getWeapon()
    {
        return $this->_weapon;
    }
    
    
    public function stateHero($_hero)
    {
        // return $this->   ;
    }

    public function stateMonster($_monster)
    {
        // return $this->   ;
    }
    // The game coninues...

    public function deadHero(_$hero)
    {
        // return $this-> ;
    }
    // End of the game

    

    // Methods for fighting
    
    // Hero or Monster attacks first?

// random 

// $attackFirst = rand(0,10);
//         if ($attackFirst % 2 == 0) {
//             $win = ($this->_Monster)->attackFirst($this->_Hero);
//             if $this->_Monster($win) // Monster wins
//             { 
//                   // Hero loses a life
//                 $this->_Hero getLife() {
//                     return $this->_Ĥero -=  Life };
//                 $this->_Hero setLife() {
//                     return $this->_Hero = life };
// 			else $this-> Hero($win) // Hero wins
// 			{
// 				  // Monster dies
// 				protected  $this-> Monster 
// 					return $this-> Monster  {
// 				protected  $this-> Monster {
				
				

//// who is alive?

//if Hero's life > 0 -> the fight continues 
//else Hero is dead -> end of the game


//// Hero's and Monster's stats 



    // public function attack()
    // {
    //     return;
    // }


    // public function kill()
    // {
    //     return;
    // }


    // public function live()
    // {
    //     return;
    // }
}
