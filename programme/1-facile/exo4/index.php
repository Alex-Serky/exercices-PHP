<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 4 : Les tests"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php

$random1 = rand(1,100);
$random2 = rand(1,100);

echo "Chiffre 1 : <b>.$random1</b><br>";
echo 'Chiffre 2 : <b>' .$random2. '</b><br>';

$resultat = abs($random1 - $random2);

if($resultat > 25 && $resultat < 75){
    echo "La valeur absolue de <b> $random1 - $random2 </b> est comprise entre 25 et 75 <br>";
}else{
    echo "La valeur absolue de <b> $random1 - $random2 </b> n'est pas comprise entre 25 et 75 <br>";
}
echo "La différence donne : <b> $resultat </b>";
?>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>