<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 8 : La Boucle While "; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php

$random = rand(1,20);
$cpt = 1;
while ($random < 15) {
    echo "Essaie $cpt: Le nombre $random est plus petit que 15<br>";
    $random = rand(1, 20);
    $cpt++;
}
echo "Essaie $cpt: Le nombre $random est plus grand que 15";


?>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>