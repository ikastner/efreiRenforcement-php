<?php

include "exercice10Stock.php";
include "exercice10Ecommerce.php";

use Ecommerce\Commande;
use Stock\Produit;

$produit = new Produit("Laptop", 50);
$commande = new Commande(1, $produit, 2);

echo "id: ".$commande->getId() ."<br>";
echo "Produit: ".$commande->getProduit()->getNom()."<br>";
echo "Quantite: ".$commande->getQuantite();
?>