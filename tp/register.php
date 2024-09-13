<?php
include("connexion.php");

if(isset($_POST['valider'])){
    
$nom = htmlspecialchars($_POST['username']); 
$email = htmlspecialchars($_POST['email']); 
$password = htmlspecialchars($_POST['password']); 
$passwordhash = password_hash($password, PASSWORD_DEFAULT);
 
// $sql = "INSERT INTO user (nom, email,password) VALUES ('$nom', '$email','$password')";
 
$sql = "INSERT INTO utilisateurs (nom, email,password) VALUES ('$nom', '$email','$passwordhash')";
$res = $conn->query($sql);
 
if ($res === TRUE) { 
    echo "Nouvel enregistrement créé avec succès";
} else { 
    echo "Erreur : " . $sql . "<br>" . $conn->error;
}
}
 
 
$conn->close();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulaire d'Authentification</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
 
<div class="login-container">
    <h2>Inscription</h2>
    <form action="" method="post">
        <input type="text" placeholder="Nom d'utilisateur" name="username" required>
        <input type="email" placeholder="Adresse email" name="email" required>
        <input type="password" placeholder="Mot de passe" name="password" required>
        <input type="submit" name="valider" value="Inscription">
    </form>
    <p><a href="login.php">Se connecter</a></p>
</div>

 
</body>
</html>