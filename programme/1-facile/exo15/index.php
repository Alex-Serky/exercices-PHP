<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 15 : Tableaux associatifs "; //Mettre le nom du titre de la page que vous voulez
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

afficherJoueur($j1);

echo "--------------------------<br>";

afficherJoueur($j2);

function afficherJoueur($joueur){
    echo " Nom : " . $joueur["nom"]. "<br>";
    echo " Age : " . $joueur["age"]. "<br>";
    if ($joueur["sexe"]) {
        echo " Sexe : Homme <br>";
    }else{
        echo " Sexe : Femme";
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