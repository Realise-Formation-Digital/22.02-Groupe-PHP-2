<?php

class Game {
private $_hero;
private $_monster;
private $_merchant;
private $_arms = [];

function __construct() {
    $this->_hero=new Hero();
    $this->_monster=new Monster();
    $this->_merchant=new Merchant();
    $this->_arms=new Arms();
}

getHero() {
    return $this->_hero;
}

getMonster() {
    return $this->_monster;
}

getMerchant() {
    return $this->_merchant;
}

getArms() {
    return $this->_arms;
}

}

?>