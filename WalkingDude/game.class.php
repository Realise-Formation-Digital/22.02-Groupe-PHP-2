<?php


// Properties
class Game {
private $_hero;
private $_monster;
private $_merchant;
private $_arms=[];


// Methods

function __construct() {
    $this->_hero=new Hero();
    $this->_monster=new Monster();
    $this->_merchant=new Merchant();
    $this->_arms=new Arms();
}


public function setHero($_hero)
{
$this->_hero=$_hero;
}

public function getHero() {
    return $this->_hero;
}

public function setMonster($_monster) {
$this->_monster=$_monster;
}

public function getMonster() {
    return $this->_monster;
}

public function setMerchant($_merchant) {
$this->_merchant=$_merchant;
}

public function getMerchant() {
    return $this->_merchant;
}

public function setArms($_arms) {
$this->_arms=$_arms;
}

public function getArms() {
    return $this->_arms;
}

}
