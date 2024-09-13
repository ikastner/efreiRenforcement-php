<?php

namespace Stock{
    
    class Produit{
        private $nom;
        private $quantite;

        public function __construct($nom, $quantite) {
        $this->nom = $nom;
        $this->quantite = $quantite;
        }

        public function getNom() {
            return $this->nom;
        }

        public function getQuantite() {
            return $this->quantite;
        }
    }
    
}

?>