<?php
interface Affichable{
    public function afficher();
}

class Personne implements Affichable{
    private $name;
    private $age;

    public function setName($setName){
        $this->name = $setName;
    }
    public function setAge($setAge){
        $this->age = $setAge;
    }
    public function getName(){
        echo "Name: " . $this->name;
    }
    public function getAge(){
        echo "Age: " . $this->age;
    }

    public function afficher() {
               echo "Personne : <br> Name: " . $this->name . "<br> Age: " . $this->age ."<br><br>";
    }
}

class Produit implements Affichable{
    private $nom = "PS5 PRO";
    private $prix = "799eur";

    public function afficher() {
            echo "$this->nom $this->prix";
        }

}

$produit = new Produit();
$produit->afficher(); 


?>