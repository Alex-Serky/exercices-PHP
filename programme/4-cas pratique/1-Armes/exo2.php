<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 2 : Partie 2 - Tableaux et boucles"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php

$arme1 = "épée";
$arme2 = "arc";
$arme3 = "hâche";
$arme4 = "fléau";

$armes = [$arme1, $arme2, $arme3, $arme4];

echo "------------------------------------------------- <br />";
?>

<div>
    <b>Voici les armes dans un tableau PHP :</b>
</div>

<p>
    Arme 1 : <?= $arme1;  ?> <br />
    Arme 2 : <?= $arme2;  ?> <br />
    Arme 3 : <?= $arme3;  ?> <br />
    Arme 4 : <?= $arme4;  ?> <br />
</p>

<div>
    <b>Voici les armes dans une boucle for :</b>
</div>
<?php
echo "---------------------------------------------- <br />";
    for ($i=0; $i < count($armes); $i++) { 
        echo "Arme " . ($i + 1). " : " . $armes[$i] . "<br>";
    }
    echo "------------------------------------------------ <br />";
?>

<div>
    <b>Voici les armes dans une boucle foreach :</b>
</div>
<?php
    foreach ($armes as $key => $arme) {
        echo "Arme " . ($key+1) . " : " . $arme . "<br>";
    }
    echo "----------------------------------------------- <br />";
?>



<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>