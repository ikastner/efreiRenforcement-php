<?php

class Personne {
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


   

    public function afficherInfos() {
               echo "Personne : <br> Name: " . $this->name . "<br> Age: " . $this->age ."<br><br>";
    }
}

class Etudiant extends Personne{
    private $niveau;

    public function setNiveau($setNiveau){
        $this->niveau = $setNiveau;
    }
    public function afficherInfosEtudiant(){
                echo "Etudiant : <br> Name: " . $this->name . "<br> Age: " . $this->age;

    }
}


$Personne1 = new Personne();
$Personne1-> setName("Ivane");
$Personne1-> setAge(1);
//$Personne1->afficherInfos();
$Personne1-> getName();
$Personne1-> getAge();

// $Etudiant1 = new Etudiant();
// $Etudiant1-> setName("Jules");
// $Etudiant1-> setAge(10);
// $Etudiant1->afficherInfosEtudiant();


?>
