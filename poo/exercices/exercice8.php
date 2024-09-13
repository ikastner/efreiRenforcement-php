<?php
class AgeNegatifException extends Exception{}

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
        if($setAge < 0){
            throw new AgeNegatifException("L'age est négatif");
        }else{
        $this->age = $setAge;
        }
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

$Personne1 = new Personne();
try{
$Personne1-> setName("Ivane");
$Personne1-> setAge(-1);
$Personne1-> getName();
$Personne1-> getAge();
}catch(AgeNegatifException $e){
 echo "Erreur : " . $e->getMessage() ;
}

$produit = new Produit();
$produit->afficher(); 


?>