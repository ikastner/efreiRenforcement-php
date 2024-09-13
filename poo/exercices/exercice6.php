<?php

class Calculateur {
    
    public static function addition($a, $b) {
        return $a + $b;
    }
}

$resultat = Calculateur::addition(5, 10);
echo $resultat;
?>
