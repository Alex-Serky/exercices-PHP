<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 14 : Tableaux des tableaux "; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php
$notesMarc = [12, 15, 13, 7, 18];
$notesMatthieu = [11, 14, 10, 4, 20, 8, 2];
$notesPierre = [5, 13, 9, 3];
$notesPaul = [6, 11, 15, 2];
$notesEleves = [$notesMarc, $notesMatthieu, $notesPierre, $notesPaul];

foreach ($notesEleves as $index => $notes) {
    echo "La moyenne des notes du <b>$index</b> ème élément est de <b>" . calculerMoyenneEleve($notesEleves[$index]) . "</b><br>";
}

function calculerMoyenneEleve($notes){
    $resultat = 0;
    foreach ($notes as $note) {
        $resultat += $note;
    }
    return $resultat / count($notes);
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