<?php
 
include("connexion.php");
 
include ('insererfilm.html');

    $titre = htmlspecialchars($_POST['titre']); 
    $duree = htmlspecialchars($_POST['duree']);
    $duree = (int)$duree;
    $annee_Sortie = htmlspecialchars($_POST['date_sortie']);
    $Image = htmlspecialchars($_POST['image']);


    $sqlCreateFilm = "INSERT INTO livre (`titre`, `duree`, `annee_sortie`, `image`) VALUES ('$titre',$duree,'$annee_Sortie','$Image')";
    // echo $sqlCreateFilm;
    $res = $conn->query($sqlCreateFilm);
    
    // $rowsFilm = [];
 
    if ($res === TRUE) { // Je check si la requete SQL s'est bien passé
    echo "Nouvel enregistrement créé avec succès";
    } else { // Si ca s'est mal passé ...
        echo "Erreur : " . $sql . "<br>" . $conn->error;
    }

    header("Location:film.php");
 
 
 
         
?>