<?php

class Personne {
    private $name = "Ivane";
    private $age = 13;

   

    public function afficherInfos() {
        echo "Name: " . $this->name . "<br> Age: " . $this->age;
    }
}

$Personne1 = new Personne();
$Personne1->afficherInfos();

?>