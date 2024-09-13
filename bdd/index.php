<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
</head>
<body>
    <h2>Formulaire d'inscription</h2>
    <form action="index.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br><br>

        <input type="submit" value="S'inscrire">
    </form>
</body>
</html>

<?php
// Connexion à la base de données
$servername = "localhost"; // Serveur de base de données, généralement "localhost"
$username = "ik"; // Nom d'utilisateur de la base de données
$password = "azerty"; // Mot de passe de la base de données
$dbname = "testdb"; // Nom de la base de données

// Créer la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

// Récupérer les données du formulaire
$nom = htmlspecialchars($_POST['nom']);
$email = htmlspecialchars($_POST['email']);


// Préparer et exécuter la requête SQL pour insérer les données
$sql = "INSERT INTO utilisateurs (nom, email) VALUES ('$nom', '$email')";

// Ci dessous j'execute la requete
$res = $conn->query($sql);


if ($res === TRUE) { // Je check si la requete SQL s'est bien passé
    echo "Nouvel enregistrement créé avec succès";
} else { // Si ca s'est mal passé ...
    echo "Erreur : " . $sql . "<br>" . $conn->error;
}
echo "<br>";

$sql1 = "SELECT * FROM utilisateurs";
$res1 = $conn->query($sql1);

if ($res1 !== FALSE) {  // Vérifier si la requête a réussi
    echo "Requête SELECT exécutée avec succès";
    // Afficher les résultats
    while ($row = $res1->fetch_assoc()) {
        echo "<br>ID: " . $row["id"] . "   Nom: " . $row["nom"] . "   Email: " . $row["email"];
    }
} else {
    echo "Erreur : " . $conn->error;
}
// Fermer la connexion
$conn->close();
?>