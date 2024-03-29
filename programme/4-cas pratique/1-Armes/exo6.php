<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 6 : Partie 6 - Amélioration de la classe : La POO "; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php

    class Arme {
        private $nom;
        private $level;
        private $description;

        public function __construct($nom, $description)
        {
            $this->nom = $nom;
            $this->level = 1;
            $this->description = $description;
        }

        function __toString()
        {
            $txt = "";
            $txt .= '<div class="row align-items-center">';
                $txt .= '<div class="col-3" text-align="center">';
                    $txt .= '<img src="sources/'. $this->getImageName() .'"/>';
                $txt .= '</div>';
                $txt .= '<div class="col-auto">';
                    $txt .= '<h2>'. $this->nom . '</h2>';
                        $txt .= '<p>' . $this->description .'</p>';
                $txt .= '</div>';
            $txt .= '</div>';
            return $txt;
        }

        public function getImageName(){
            $recherche = ["à", "é", "è", "ç", "ù", "â"];
            $remplacement = ["a", "e", "e", "c", "u", "a"];
            $nomSansAccent = str_replace($recherche, $remplacement, $this->nom);
            return $nomSansAccent."/".$nomSansAccent.$this->level.".png";

        }

        public function getNom(){return $this->nom;}
        public function getLevel(){return $this->level;}
        public function getDescription(){return $this->description;}

        public function setNom($nom){$this->nom = $nom;}
        public function setLevel($level){$this->level = $level;}
        public function setDescription($description){$this->description = $description;}
    }

    $arme1 = new Arme("épée", "Une arme bien tranchante");
    $arme2 = new Arme("arc", "Une arme à distance");
    $arme3 = new Arme("hâche", "Une arme tranchante ou un outil qui permet aussi de couper du bois");
    $arme4 = new Arme("fléau", "Une arme contondante du moyen âge");

$armes = [$arme1, $arme2, $arme3, $arme4];



?>

<div>
    <b>Voici toutes les armes :</b>
</div>
<?php foreach ($armes as $key => $arme) {
    echo $arme;
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