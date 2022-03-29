<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>WALKING DUDE</title>
</head>
<body>

<form method="post">

    <div class="form-group">
        <label for="text">Entrer un nom de héro</label>
        <input name="names" class="form-control" id="inputVal2" placeholder="input">
        </div>
    <label>Veuillez s'il vous plait séléctionner le Héro désiré</label>
        <select name="choix_hero">
            <option value=""></option>
            <option value="Tortue Génial"> Tortue Géniale </option>
            <option value="Captaine America"> Captain América </option>
            <option value="Jocker"> Jocker </option>
            <option value="Sakura"> Sakura </option>
            <option value="Fred"> Fred </option>
        </select>
        <br>
        <br>
        <button type="submit" name="Lancer">Choose</button>

    </form> 
    
    
    <?php 
    require "Héro.class.php";
    include "Game.class.php";
    include "Monstres.class.php";
    include "Armes.class.php";
    if(isset($_POST['Lancer'])){
        
        $nom = $_POST['names'];
        $choixhero = $_POST['choix_hero'];
        if($choixhero == "Tortue Génial"){
            $hero = new TortueGenial();
            echo "Bonjour $nom, vous avez choisi $choixhero 
            ";
            
            $hero->name = $nom;
            echo '<img src="./Images/TUNG_FU_RUE/tung-intro.gif" />';
            
    
        }
        else if($choixhero == "Sakura"){
            $hero = new Sakura();
            echo "Bonjour $nom, vous avez choisi $choixhero 
            ";
            $hero->name = $nom;
            echo '<img src="./Images/TUNG_FU_RUE/tung-intro.gif" />';

            
        }
        else if($choixhero == "Captaine America"){
            $hero = new CaptainAmerica();
            echo "Bonjour $nom, vous avez choisi $choixhero 
            ";
            $hero->name = $nom;
            echo '<img src="./Images/TUNG_FU_RUE/tung-intro.gif" />';

        }
        else if($choixhero == "Jocker"){
            $hero = new Jocker();
            echo "Bonjour $nom, vous avez choisi $choixhero 
            ";
            $hero->name = $nom;
            echo '<img src="./Images/TUNG_FU_RUE/tung-intro.gif" />';

        }
        else if($choixhero == "Marco"){
            $hero = new Julien();
            echo "Bonjour $nom, vous avez choisi $choixhero 
            ";
            $hero->name = $nom;
            echo '<img src="./Images/TUNG_FU_RUE/tung-intro.gif" />';

        }
        
    
    }
    ?>

    <br>
    <br>
    <br>
    <br>
    <button type="submit" name="start" onclick=window.location.href='index2.php'>START</button>

    
</body>

