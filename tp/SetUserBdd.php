<?php
include("connexion.php");

$nom = "ivane";
$email = "kastnerivane@efrein.net";
$password = password_hash('admin', PASSWORD_DEFAULT);

$sql = "INSERT INTO utilisateurs (nom, email,password) VALUES ('$nom', '$email','$password')";

$res = $conn->query($sql);

if ($res === TRUE) { 
    echo "Nouvel enregistrement créé avec succès";
} else { 
    echo "Erreur : " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
