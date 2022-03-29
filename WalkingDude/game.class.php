<?php


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
        $this->_hero = new Hero;
        $this->_monster = new Monster;
        $this->_merchant = new Merchant;
        $this->_weapon = new Weapon;
    }


    protected function setHero($_hero)
    {
        $this->_hero = $_hero;
    }

    protected function getHero()
    {
        return $this->_hero;
    }

    protected function setMonster($_monster)
    {
        $this->_monster = $_monster;
    }

    protected function getMonster()
    {
        return $this->_monster;
    }

    protected function setMerchant($_merchant)
    {
        $this->_merchant = $_merchant;
    }

    protected function getMerchant()
    {
        return $this->_merchant;
    }

    protected function setWeapon($_weapon)
    {
        $this->_weapon = $_weapon;
    }

    protected function getWeapon()
    {
        return $this->_weapon;
    }



    protected function attack()
    {
        return;
    }


    protected function defend()
    {
        return;
    }


    protected function kill()
    {
        return;
    }


    protected function live()
    {
        return;
    }
}
