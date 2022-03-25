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
<?php
  ########################################
  #
  # Affichage image aléatoire //manucci.info
  #
  ########################################

  //On indique le dossier images
  $chem_img = "./Images/backgrounds1";
  //On ouvre le dossier images
  $handle  = opendir($chem_img);
  
  //On parcoure chaque élément du dossier
  while ($file = readdir($handle))
    {
      //Si les fichiers sont des images
      if(preg_match ("!(\.jpg|\.jpeg|\.gif|\.bmp|\.png)$!i", $file))
        {
          $listef[] = $file;
        }
    }
  
  $random_img = rand(0, count($listef)-1); //permet de prendre une image totalement au hasard (RANDom) parmi toutes les images trouvées.
  
  //On calcule la largeur et la hauteur de l'image aléatoire
  $size = getimagesize($chem_img."/".$listef[$random_img]);
  
  //Largeur maximale de l'image pour la création des miniatures
  $largeur_maxi = 1000;

  //Si la largeur dépasse la limite autorisée...
  if ($size[0] > $largeur_maxi)
    {
      //...la nouvelle largeur est égale à la limite à ne pas dépasser
      $width = $largeur_maxi;
      //La largeur d'origine divisée par la largeur limitée (on obtient un chiffre qui sert à faire la même proportion pour la hauteur)
      $theight = $largeur_maxi;
      //La hauteur originale est divisée par le chiffre obtenu précédemment afin que l'image conserve les mêmes proportions que l'originale (mais en mode vignette)
      $height = $theight;
    }
  else
    {
      //Sinon on garde la taille originale
      $width = 1800;
      $height = $largeur_maxi;
    }
  //On affiche l'image aléatoire (en respectant les standards ! :) )
  echo "<a href=\"".$chem_img."/".$listef[$random_img]."\" onclick=\"window.open(this.href,'_blank');return false;\"><img style=\"border: none; width: ".$width."px; height: ".$height."px\" src=\"".$chem_img."/".$listef[$random_img]."\" alt=\"".$listef[$random_img]."\" /></a>";
  //On ferme le dossier
  closedir($handle);
?>
</body>



