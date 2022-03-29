var launch = document.getElementById('choix');
launch.addEventListener('click', mafonction);
 
function mafonction(){
    var lancer = Math.floor(Math.random()*6 +1); // choix d'un chiffre aléatoire entre 1 et 6
    document.getElementById('chiffre').innerHTML = lancer; //affiche le chiffre
    document.getElementById('choiximg').src = "img/" + lancer;
}
