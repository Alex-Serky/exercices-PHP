<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 12 : Les tableaux "; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php

$notesMarc = [12, 15, 13, 7, 18];
$resultat = 0;
for ($i = 0; $i <= count($notesMarc)-1; $i++) {
    $resultat += $notesMarc[$i];
}
echo "La moyenne des notes de <b>Marc</b> est de <b>" .($resultat / count($notesMarc)). "</b><br>";

echo "-------------------------------------- <br>";

$notesMatthieu = [11, 14, 10, 4, 20, 8, 2];
$resultat = 0;
foreach ($notesMatthieu as $note) {
    $resultat += $note;
}

echo "La moyenne des notes de <b>Matthieu</b> est de <b>" . ($resultat / count($notesMatthieu)) . "</b><br>";


?>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>