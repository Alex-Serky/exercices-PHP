<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 9 : Les Fonctions "; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->


<?php

$a = 5;
$b = 122;

function estChiffrePair($nombre)
{
    if ($nombre % 2 === 0) {
        return true;
    } else {
        return false;
    }
}

echo "<div>";
if (estChiffrePair($a)) {
    echo "Le nombre $a est pair";
} else {
    echo "Le nombre $a n'est pas pair";
}
echo "</div>";
echo "<div>";
echo (estChiffrePair($b)) ? "Le nombre $b est pair" : "Le nombre $b n'est pas pair";
echo "</div>";


?>



<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>