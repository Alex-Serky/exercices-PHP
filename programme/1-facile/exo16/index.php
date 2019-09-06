<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 16 : Tableaux de tableaux associatifs "; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php

$j1 = [
            "nom" => "Matthieu",
            "age" => 30,
            "sexe" => true
        ];

$j2 = [
            "nom" => "Marie",
            "age" => 32,
            "sexe" => false
        ];
$j3 = [
            "nom" => "Marc",
            "age" => 25,
            "sexe" => true
        ];

$j4 = [
            "nom" => "Mathilde",
            "age" => 32,
            "sexe" => false
        ];

$joueurs = [$j1, $j2, $j3, $j4];

foreach ($joueurs as $key => $joueur) {
    afficherJoueur($joueur);
    echo "----------------------<br>";
}

function afficherJoueur($joueur){
    echo " Nom : " . $joueur["nom"]. "<br>";
    echo " Age : " . $joueur["age"]. "<br>";
    if ($joueur["sexe"]) {
        echo " Sexe : Homme <br>";
    }else{
        echo " Sexe : Femme <br>";
    }
}

?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>