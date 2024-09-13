<?php

namespace Ecommerce{
    class Commande{
        private $id;
        private $produit;
        private $quantite;
        
        public function __construct($id, $produit, $quantite) {
        $this->id = $id;
        $this->produit = $produit;
        $this->quantite = $quantite;
        }

        public function getId() {
            return $this->id;
        }

        public function getProduit() {
            return $this->produit;
        }

        public function getQuantite() {
            return $this->quantite;
        }
    }
}

?>