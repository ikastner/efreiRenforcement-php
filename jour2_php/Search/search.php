<?php
$livres = [
    ["title" => "Les Miserables", "author" => "Victor Hugo"],
    ["title" => "Le Petit Prince", "author" => "Antoine de Saint-Exupéry"],
    ["title" => "Candide", "author" => "Voltaire"],
    ["title" => "L'Étranger", "author" => "Albert Camus"]
];

$livrePost = $_POST["livre"];
$auteurPost = $_POST["auteur"];
$livreFound = false;

foreach($livres as $livre){
    if($livrePost == $livre["title"] && $auteurPost == $livre["author"]){
        $livreFound = true;
        break;
    }
}


if($livreFound){
    echo $livrePost . " par " . $auteurPost . " trouvée";
    } else {
    echo $livrePost . " par " . $auteurPost . " non trouvé";
    }
?>

<br>
<a href="frm_recherche.html">
<button type="button">retry</button>
</a>