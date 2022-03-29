<?php
    require "Armes.class.php";
    require "Humain.class.php";

    $gun = new Armes("Pistolet");
    $sabre = new Armes("Épée");
    $masse = new Armes("Masse");
    var_dump($gun,$sabre,$masse);