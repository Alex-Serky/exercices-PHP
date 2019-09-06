<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 2 : Fichiers de fonctions et Tableaux "; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php
require "gestionTableau.php";
$tab1 = [2, 6, 10, 20, 9, 14];
$tab2 = [4, 8, 2, 26, 18, 14];

?>

<div class="row text-center">
    <div class="col">
        <h2>Tableau 1</h2>
        <?php
            afficherTableau($tab1);
            echo calculerMoyenne($tab1);
            if (estTableauPair($tab1)) {
                echo "Le tableau ne contient que des valeurs paires";
            }else{
                echo "Le tableau ne contient pas que des valeurs paires";
            }
        ?>
    </div>
    <div class="col">
        <h2>Tableau 2</h2>
        <?php
            afficherTableau($tab2);
            echo calculerMoyenne($tab2);
            if (estTableauPair($tab2)) {
                echo "Le tableau ne contient que des valeurs paires";
            }else{
                echo "Le tableau ne contient pas que des valeurs paires";
            }
        ?>
    </div>
</div>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>