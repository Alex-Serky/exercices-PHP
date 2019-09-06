<?php
    class Maison {
        private static $increment = 1;
        private $id;
        private $dateCreation;
        private $nombreChambres;
        private $surface;

        public function __construct($dateCreation,$nombreChambres,$surface)
        {
            $this->id = self::$increment;
            self::$increment++;
            $this->dateCreation = $dateCreation;
            $this->nombreChambres = $nombreChambres;
            $this->surface = $surface;
        }

        public function getId(){return $this->id;}
        public function getDateCreation(){return $this->dateCreation;}
        public function getNombreChambres(){return $this->nombreChambres;}
        public function getSurface(){return $this->surface;}
    }




