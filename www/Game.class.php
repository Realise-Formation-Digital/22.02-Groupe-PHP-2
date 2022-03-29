<?php




class Game {

    private $_hero;
    private $_monster;
    private $_merchant;
    private $_weapon = [];

    public function __construct() {
        $this->_monster=new Monstrer();
        $this->_merchant=new Marchands();
        $this->_arms=new Armes();
    }

    public function getHero() {
        return $this->_hero;
    }

    public function getMonster() {
        return $this->_monster;
    }

    public function getMerchant() {
        return $this->_merchant;
    }

    public function getArms() {
        return $this->_arms;
    }


    }



?>

