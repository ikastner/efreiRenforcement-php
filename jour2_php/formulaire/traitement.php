<?php
//var_dump($_GET);

if(isset($_GET["nom"]) !== true){
    echo "pas de nom";
}else{
    echo "nom: " . $_GET["nom"]."<br>";
    echo "email: " . $_GET["email"]."<br>";
    if(isset($_GET["nom"]) == 1){
        echo isset($_GET["nom"]);
    }
    
}
?>