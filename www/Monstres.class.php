<?php

//include 'Humain.class.php';

class Monstrer extends Humain{

    protected $weapon;
    protected $coins;
    protected $nom;

    public function __construct($nom, $xp = null, $strenght = null, $stamina = null, $coin = null, $bag = null){
        $this->nom = $nom;
        $this->xp = $xp ?? rand(1,50);
        $this->strength = $strenght ?? rand(1, $this->xp);
        $this->stamina = $stamina ?? rand(1,$this->xp);
        //$this->weapon = rand( 1, $this-> Armes[]);
        $this->coins = $coin ?? rand(0,50);
    }
    
    //$min = 1;
    //$max = 6;


    public function attaquer($ennemy){
        
    //    if $ennemy->strenght - $this-> stamina > 0{

       
    //         <this->(attaquer)}
    //     else if $ennemy 

            
        if (($ennemy->strenght > $this->stamina) && ($this->stamina <= 0)){

                echo "Hero WINS"; 
                $this->coins = $ennemy->coins;
                $this->arms = $ennemy->arms;
                $ennemy->setExp($ennemy->getExp()++);
                
        } 
        else if (($ennemy->strenght < $this->stamina) && ($ennemy->strenght <= 0)){

                echo "Monstres WINS";
                $ennemy->setVie($ennemy->getVie()--);
                
        }
        else {
                echo "Equality";
        } 

    }
    //Monstre porte l
    public function defendrer($this){
        
    
    
                
            if (($this->strenght > $ennemy->stamina) && ($ennemy->stamina <= 0)){
    
                    echo "Monstre WINS et Hero DEAD"; 
                    $ennemy->setVie($ennemy->getVie()--);
            } 
            else if (($this->strenght) < ($ennemy->stamina) && ($this->strenght<= 0)){ 
    
                    echo "Hero WINS et Monstre DEAD";
                    
                    $this->coins = $ennemy->coins;
                    $this->arms = $ennemy->arms;
                    $ennemy->setExp($ennemy->getExp()++);
            }
            else {
                
                echo "Eglality";
            } 

    }
                









 
$monstrer = [];
$monstrer[] = new Monstrer('Joker', 1, 1, 1, 20, [new Armes()]);
$monstrer[] = new Monstrer('Voltemort', 1, 2, 0, 20, [new Armes()]);
$monstrer[] = new Monstrer('Hallowenn', 1, 2, 2, 20, [new Armes()]);
$monstrer[] = new Monstrer('Julien', 1, 3, 1, 20, [new Armes()]);               
                
}              
              


                    
            
        ?> 

    

        

       

   



