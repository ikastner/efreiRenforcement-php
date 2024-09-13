<?php

$n1 = $_POST["n1"];
$n2 = $_POST["n2"];

switch ($_POST["calcul"]) {
    case "addition":
        echo "Le résultat est = ".$n1 + $n2;
        break;
    case "soustraction":
        echo "Le résultat est = ".$n1 - $n2;
        break;
    case "division":
        if($n2 == 0){
            echo "La division par 0 n'est pas possible";
            break;
        }else{
            echo "Le résultat est = ".$n1 / $n2;
            break;
        }
    case "multiplication":
        echo "Le résultat est = ".$n1 * $n2;
        break;    
}


?>
<br>
<a href="calculatrice.html">
<button type="button">AC</button>
</a>