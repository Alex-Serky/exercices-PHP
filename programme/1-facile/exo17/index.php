<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 17 : Tableaux complexes "; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php

$j1 = [
            "nom" => "Matthieu",
            "age" => 30,
            "sexe" => true,
            "notes" => [2, 5, 15, 10]
        ];

$j2 = [
            "nom" => "Marie",
            "age" => 32,
            "sexe" => false,
            "notes" => [10, 12, 11, 11]
        ];
$j3 = [
            "nom" => "Marc",
            "age" => 25,
            "sexe" => true,
            "notes" => [15, 5, 20, 15]
        ];

$j4 = [
            "nom" => "Mathilde",
            "age" => 32,
            "sexe" => false,
            "notes" => [3, 6, 9, 12]
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
    $resultat = 0;
    foreach ($joueur["notes"] as $indice => $note) {
        $resultat += $note;
        echo " Note " . ($indice + 1) . " : " . $note . "<br>";
    }
    echo "La moyenne est de : " . ($resultat / count($joueur["notes"])) . "<br>";

    // for ($i=0; $i < count($joueur["notes"]); $i++) { 
    //     echo " Note " . ($i + 1). " : " . $joueur["notes"][$i]. "<br>";
    // }
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