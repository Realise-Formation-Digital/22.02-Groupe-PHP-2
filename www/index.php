<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="./Images/zombi.png">
    <link rel="stylesheet" href="index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>The Walking Dude</title>
</head>
<body class="bg bg-dark">

<div class="container-fluid">
    <div class="container">
        <div class="card border border-warning border-2 position-absolute top-50 start-50 translate-middle text-center" style="width: 35rem;">
         <img src="./Images/TheWalkingDudes2.png" class="card-img-top" alt="...">
            <div class="card-body border-top border-warning">
                <h5 class="card-title">TheWalkingDudes</h5>
                <p class="card-text">Click sur Go Start pour commencer.</p>
                <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">GO START</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form method="post">

                        <div class="form-group">
                            <label class="pb-3" for="text">Entrer un nom de héro</label>
                            <input name="names" class="form-control mb-2" id="inputVal2" placeholder="ici...">
                        </div>
                        <label class="pb-3">Veuillez s'il vous plais séléctionner le Héro désiré</label>
                        <select name="choix_hero">
                            <option selected>Choisir personnage</option>
                            <option value="Tortue Génial"> Tortue Géniale </option>
                            <option value="Captaine America"> Captain América </option>
                            <option value="Jocker"> Jocker </option>
                            <option value="Sakura"> Sakura </option>
                            <option value="Fred"> Fred </option>
                        </select>
                        <br>
                        <button  name="Lancer" class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal" type="submit">Choose</button>
                    </form>
                     
                    <div class="modal-footer">
                    
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      
                <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">CONTINUER</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">Modal 2</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <?php 
                require "Héro.class.php";
                include "Game.class.php";
                include "Monstres.class.php";
                include "Armes.class.php";

                if(isset($_POST['Lancer']))
                {$nom = $_POST['names'];
                $choixhero = $_POST['choix_hero'];
                if($choixhero == "Tortue Génial"){
                $hero = new TortueGenial();
                echo "Bonjour $nom, vous avez choisi $choixhero";
                $hero->name = $nom;
                echo '<img src="./Images/TUNG_FU_RUE/tung-intro.gif" />';
                }else if($choixhero == "Sakura")
                {$hero = new Sakura();
                echo "Bonjour $nom, vous avez choisi $choixhero";
                $hero->name = $nom;
                echo '<img src="./Images/TUNG_FU_RUE/tung-intro.gif" />';
                }else if($choixhero == "Captaine America")
                {$hero = new CaptainAmerica();
                echo "Bonjour $nom, vous avez choisi $choixhero ";
                $hero->name = $nom;
                echo '<img src="./Images/TUNG_FU_RUE/tung-intro.gif" />';
                }else if($choixhero == "Jocker")
                {$hero = new Jocker();
                echo "Bonjour $nom, vous avez choisi $choixhero";
                $hero->name = $nom;
                echo '<img src="./Images/TUNG_FU_RUE/tung-intro.gif" />';
                }else if($choixhero == "Fred"){
                $hero = new Fred();
                echo "Bonjour $nom, vous avez choisi $choixhero";
                $hero->name = $nom;
                echo '<img src="./Images/TUNG_FU_RUE/tung-intro.gif" />';
                }
                }
            ?>       
      </div>
      <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">RETOUR</button>
            <button type="submit" name="start" onclick=window.location.href='index2.php' class="btn btn-primary">START!</button>
      </div>
    </div>
  </div>
</div>
<!-- <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Open first modal</a> -->






<!-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">The Walking Dudes</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
<div class="modal-body">
    <a href="#" role="button" class="btn btn-secondary popover-test" title="Popover title" data-bs-content="Popover body content is set in this attribute.">button</a>
  <hr>
    
</div> -->

<!-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">The Walking Dudes</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
<div class="modal-body">
    <a href="#" role="button" class="btn btn-secondary popover-test" title="Popover title" data-bs-content="Popover body content is set in this attribute.">button</a>
  <hr>
    
</div> -->

<?php

    if(isset($_POST['start'])){
        $game = new Game;
    }

?>







<!-- <div class="background">

<input type=button class="btn1" onclick=window.location.href='index2.php'; value="PLAY" />


</div> -->



    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="index.js"></script>
</body>
</html>