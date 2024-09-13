<?php

class Animal{

    public function faireDuBruit(){
        echo "Un bruit d'animal";
    }
}

class Chien extends Animal{
    public function faireDuBruit(){
        echo "Woof!";
    }
}

class Chat extends Animal{
public function faireDuBruit(){
        echo "Miaou!";
    }
}

$labrador = new Chien();
$bengal = new Chat();
$labrador->faireDuBruit(); 
$bengal->faireDuBruit(); 
?>