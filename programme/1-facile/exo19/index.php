<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 19 : Formulaire & Méthode POST "; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<form action="" method="POST">
    <div class="form-group">
        <label for="chiffre">Chiffre: </label>
        <input type="number" name="saisie" class="form-control">
    </div>
    <input type="submit" class="btn btn-primary" value="Valider">
</form>
<?php

if (isset($_POST['saisie']) && !empty($_POST['saisie'])) {
    if ($_POST['saisie'] % 2 !== 0) {
        echo "Le chiffre " . $_POST['saisie'] . " est impair ";
        }else
        echo "Le chiffre " .$_POST['saisie'] . " est pair ";
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