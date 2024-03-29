<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 3 : Partie 3 - Tableaux associatifs "; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php

$arme1 = [
    "nom" => "épée",
    "image" => "epee/epee1.png",
    "description" => "Une arme bien tranchante"
];

$arme2 = [
    "nom" => "arc",
    "image" => "arc/arc1.png",
    "description" => "Une arme à distance"
];

$arme3 = [
    "nom" => "hâche",
    "image" => "hache/hache1.png",
    "description" => "Une arme tranchante ou un outil qui permet aussi de couper du bois"
];

$arme4 = [
    "nom" => "fléau",
    "image" => "fleau/fleau4.png",
    "description" => "Une arme contondante du moyen âge"
];

$armes = [$arme1, $arme2, $arme3, $arme4];

?>

<div>
    <b>Voici toutes les armes :</b>
</div>
<?php foreach ($armes as $key => $arme) { ?>

    <div class="row align-items-center">
        <div class="col-3" text-align="text-center">
            <img src="sources/<?= $arme['image']; ?>" />
        </div>
        <div class="col-auto">
            <h2><?= $arme['nom']; ?></h2>
                <p><?= $arme['description']; ?></p>
        </div>
    </div>

<?php } ?>



<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>