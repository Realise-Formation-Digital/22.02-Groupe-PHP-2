<?php


// Properties

class Game
{
    private $_hero;
    private $_monster;
    private $_merchant;
    private $_weapon = [];


// Methods

    function __construct()
    {
        $this->_hero = new Hero;
        $this->_monster = new Monster;
        $this->_merchant = new Merchant;
        $this->_arms = new Weapon;
    }


    public function setHero($_hero)
    {
        $this->_hero = $_hero;
    }

    public function getHero()
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

    public function setWeapon($_weapon)
    {
        $this->_weapon = $_weapon;
    }

    public function getWeapon()
    {
        return $this->_weapon;
    }



    function attack()
    {
        return;
    }


    function defend()
    {
        return;
    }


    function kill()
    {
        return;
    }


    function live()
    {
        return;
    }
}
