<?php

class Bibliotheque{
    private $livres = [];

    public function ajouterLivre($titre){
    array_push($this->livres,$titre);
    }

   public function afficher(){
    foreach ($this->livres as $livre) {
            echo $livre . "<br>";
        }
    }
}

$bbl = new Bibliotheque();
$bbl-> ajouterLivre("Misérables");
$bbl-> ajouterLivre("Leve toi et code !");
$bbl-> afficher();

?>